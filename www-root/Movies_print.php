<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

include("include/dbcommon.php");
include("classes/searchclause.php");

add_nocache_headers();

include("include/Movies_variables.php");

if(!isLogged())
{ 
	$_SESSION["MyURL"]=$_SERVER["SCRIPT_NAME"]."?".$_SERVER["QUERY_STRING"];
	header("Location: login.php?message=expired"); 
	return;
}
if(CheckPermissionsEvent($strTableName, 'P') && !CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Export"))
{
	echo "<p>"."You don't have permissions to access this table"."<a href=\"login.php\">"."Back to login page"."</a></p>";
	return;
}

$layout = new TLayout("print","FancyBlueWave","MobileBlueWave");
$layout->blocks["center"] = array();
$layout->containers["grid"] = array();

$layout->containers["grid"][] = array("name"=>"printgrid","block"=>"grid_block","substyle"=>1);


$layout->skins["grid"] = "empty";
$layout->blocks["center"][] = "grid";$layout->blocks["top"] = array();
$layout->skins["master"] = "empty";
$layout->blocks["top"][] = "master";
$layout->skins["pdf"] = "empty";
$layout->blocks["top"][] = "pdf";$page_layouts["Movies_print"] = $layout;


include('include/xtempl.php');
include('classes/runnerpage.php');

$cipherer = new RunnerCipherer($strTableName);

$xt = new Xtempl();
$id = postvalue("id") != "" ? postvalue("id") : 1;
$all = postvalue("all");
$pageName = "print.php";

//array of params for classes
$params = array("id" => $id,
				"tName" => $strTableName,
				"pageType" => PAGE_PRINT);
$params["xt"] = &$xt;
			
$pageObject = new RunnerPage($params);

// add button events if exist
$pageObject->addButtonHandlers();

// Modify query: remove blob fields from fieldlist.
// Blob fields on a print page are shown using imager.php (for example).
// They don't need to be selected from DB in print.php itself.
$noBlobReplace = false;
if(!postvalue("pdf") && !$noBlobReplace)
	$gQuery->ReplaceFieldsWithDummies($pageObject->pSet->getBinaryFieldsIndices());

//	Before Process event
if($eventObj->exists("BeforeProcessPrint"))
	$eventObj->BeforeProcessPrint($conn, $pageObject);

$strWhereClause="";
$strHavingClause="";
$strSearchCriteria="and";

$selected_recs=array();
if (@$_REQUEST["a"]!="") 
{
	$sWhere = "1=0";	
	
//	process selection
	if (@$_REQUEST["mdelete"])
	{
		foreach(@$_REQUEST["mdelete"] as $ind)
		{
			$keys=array();
			$keys["idMovie"]=refine($_REQUEST["mdelete1"][mdeleteIndex($ind)]);
			$selected_recs[]=$keys;
		}
	}
	elseif(@$_REQUEST["selection"])
	{
		foreach(@$_REQUEST["selection"] as $keyblock)
		{
			$arr=explode("&",refine($keyblock));
			if(count($arr)<1)
				continue;
			$keys=array();
			$keys["idMovie"]=urldecode($arr[0]);
			$selected_recs[]=$keys;
		}
	}

	foreach($selected_recs as $keys)
	{
		$sWhere = $sWhere . " or ";
		$sWhere.=KeyWhere($keys);
	}
	$strSQL = $gQuery->gSQLWhere($sWhere);
	$strWhereClause=$sWhere;
}
else
{
	$strWhereClause=@$_SESSION[$strTableName."_where"];
	$strHavingClause=@$_SESSION[$strTableName."_having"];
	$strSearchCriteria=@$_SESSION[$strTableName."_criteria"];
	$strSQL = $gQuery->gSQLWhere($strWhereClause, $strHavingClause, $strSearchCriteria);
}
if(postvalue("pdf"))
	$strWhereClause = @$_SESSION[$strTableName."_pdfwhere"];

$_SESSION[$strTableName."_pdfwhere"] = $strWhereClause;


$strOrderBy = $_SESSION[$strTableName."_order"];
if(!$strOrderBy)
	$strOrderBy=$gstrOrderBy;
$strSQL.=" ".trim($strOrderBy);

$strSQLbak = $strSQL;
if($eventObj->exists("BeforeQueryPrint"))
	$eventObj->BeforeQueryPrint($strSQL,$strWhereClause,$strOrderBy, $pageObject);

//	Rebuild SQL if needed

if($strSQL!=$strSQLbak)
{
//	changed $strSQL - old style	
	$numrows=GetRowCount($strSQL);
}
else
{
	$strSQL = $gQuery->gSQLWhere($strWhereClause, $strHavingClause, $strSearchCriteria);
	$strSQL.=" ".trim($strOrderBy);
	
	$rowcount=false;
	if($eventObj->exists("ListGetRowCount"))
	{
		$masterKeysReq=array();
		for($i = 0; $i < count($pageObject->detailKeysByM); $i ++)
			$masterKeysReq[]=$_SESSION[$strTableName."_masterkey".($i + 1)];
			$rowcount=$eventObj->ListGetRowCount($pageObject->searchClauseObj,$_SESSION[$strTableName."_mastertable"],$masterKeysReq,$selected_recs, $pageObject);
	}
	if($rowcount!==false)
		$numrows=$rowcount;
	else
	{
		$numrows = $gQuery->gSQLRowCount($strWhereClause, $strHavingClause, $strSearchCriteria);
	}
}

LogInfo($strSQL);

$mypage=(integer)$_SESSION[$strTableName."_pagenumber"];
if(!$mypage)
	$mypage=1;

//	page size
$PageSize=(integer)$_SESSION[$strTableName."_pagesize"];
if(!$PageSize)
	$PageSize = $pageObject->pSet->getInitialPageSize();

if($PageSize<0)
	$all = 1;	
	
$recno = 1;
$records = 0;	
$maxpages = 1;
$pageindex = 1;
$pageno=1;

// build arrays for sort (to support old code in user-defined events)
if($eventObj->exists("ListQuery"))
{
	$arrFieldForSort = array();
	$arrHowFieldSort = array();
	require_once getabspath('classes/orderclause.php');
	$fieldList = unserialize($_SESSION[$strTableName."_orderFieldsList"]);
	for($i = 0; $i < count($fieldList); $i++)
	{
		$arrFieldForSort[] = $fieldList[$i]->fieldIndex; 
		$arrHowFieldSort[] = $fieldList[$i]->orderDirection; 
	}
}

if(!$all)
{	
	if($numrows)
	{
		$maxRecords = $numrows;
		$maxpages = ceil($maxRecords/$PageSize);
					
		if($mypage > $maxpages)
			$mypage = $maxpages;
		
		if($mypage < 1) 
			$mypage = 1;
		
		$maxrecs = $PageSize;
	}
	$listarray = false;
	if($eventObj->exists("ListQuery"))
		$listarray = $eventObj->ListQuery($pageObject->searchClauseObj, $arrFieldForSort, $arrHowFieldSort, 
			$_SESSION[$strTableName."_mastertable"], $masterKeysReq, $selected_recs, $PageSize, $mypage, $pageObject);
	if($listarray!==false)
		$rs = $listarray;
	else
	{
			if($numrows)
		{
			$strSQL.=" limit ".(($mypage-1)*$PageSize).",".$PageSize;
		}
		$rs = db_query($strSQL,$conn);
		db_pageseek($rs,$PageSize,$mypage);
	}
	
	//	hide colunm headers if needed
	$recordsonpage = $numrows-($mypage-1)*$PageSize;
	if($recordsonpage>$PageSize)
		$recordsonpage = $PageSize;
		
	$xt->assign("page_number",true);
	$xt->assign("maxpages",$maxpages);
	$xt->assign("pageno",$mypage);
}
else
{
	$listarray = false;
	if($eventObj->exists("ListQuery"))
		$listarray=$eventObj->ListQuery($pageObject->searchClauseObj, $arrFieldForSort, $arrHowFieldSort,
			$_SESSION[$strTableName."_mastertable"], $masterKeysReq, $selected_recs, $PageSize, $mypage, $pageObject);
	if($listarray!==false)
		$rs = $listarray;
	else
		$rs = db_query($strSQL,$conn);
	$recordsonpage = $numrows;
	$maxpages = ceil($recordsonpage/30);
	$xt->assign("page_number",true);
	$xt->assign("maxpages",$maxpages);
}


$fieldsArr = array();
$arr = array();
$arr['fName'] = "idMovie";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("idMovie");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "idFile";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("idFile");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "c00";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("c00");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "c01";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("c01");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "c02";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("c02");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "c03";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("c03");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "c04";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("c04");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "c05";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("c05");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "c06";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("c06");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "c07";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("c07");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "c08";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("c08");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "c09";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("c09");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "c10";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("c10");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "c11";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("c11");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "c12";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("c12");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "c13";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("c13");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "c14";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("c14");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "c15";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("c15");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "c16";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("c16");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "c18";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("c18");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "c19";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("c19");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "c20";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("c20");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "c21";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("c21");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "c22";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("c22");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "c23";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("c23");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "idSet";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("idSet");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "strFilename";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("strFilename");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "idPath";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("idPath");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "dateAdded";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("dateAdded");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "strPath";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("strPath");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "strGenre";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("strGenre");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "idGenre";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("idGenre");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "strSet";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("strSet");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "idSet1";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("idSet1");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "strTag";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("strTag");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "idTag";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("idTag");
$fieldsArr[] = $arr;
$pageObject->setGoogleMapsParams($fieldsArr);

$colsonpage=1;
if($colsonpage>$recordsonpage)
	$colsonpage=$recordsonpage;
if($colsonpage<1)
	$colsonpage=1;


//	fill $rowinfo array
	$pages = array();
	$rowinfo = array();
	$rowinfo["data"] = array();
	if($eventObj->exists("ListFetchArray"))
		$data = $eventObj->ListFetchArray($rs, $pageObject);
	else
		$data = $cipherer->DecryptFetchedArray($rs);

	while($data)
	{
		if($eventObj->exists("BeforeProcessRowPrint"))
		{
			if(!$eventObj->BeforeProcessRowPrint($data, $pageObject))
			{
				if($eventObj->exists("ListFetchArray"))
					$data = $eventObj->ListFetchArray($rs, $pageObject);
				else
					$data = $cipherer->DecryptFetchedArray($rs);
				continue;
			}
		}
		break;
	}
	
	while($data && ($all || $recno<=$PageSize))
	{
		$row = array();
		$row["grid_record"] = array();
		$row["grid_record"]["data"] = array();
		for($col=1;$data && ($all || $recno<=$PageSize) && $col<=1;$col++)
		{
			$record = array();
			$recno++;
			$records++;
			$keylink="";
			$keylink.="&key1=".htmlspecialchars(rawurlencode(@$data["idMovie"]));

//	idMovie - 
			$record["idMovie_value"] = $pageObject->showDBValue("idMovie", $data, $keylink);
			$record["idMovie_class"] = $pageObject->fieldClass("idMovie");
//	idFile - 
			$record["idFile_value"] = $pageObject->showDBValue("idFile", $data, $keylink);
			$record["idFile_class"] = $pageObject->fieldClass("idFile");
//	c00 - 
			$record["c00_value"] = $pageObject->showDBValue("c00", $data, $keylink);
			$record["c00_class"] = $pageObject->fieldClass("c00");
//	c01 - 
			$record["c01_value"] = $pageObject->showDBValue("c01", $data, $keylink);
			$record["c01_class"] = $pageObject->fieldClass("c01");
//	c02 - 
			$record["c02_value"] = $pageObject->showDBValue("c02", $data, $keylink);
			$record["c02_class"] = $pageObject->fieldClass("c02");
//	c03 - 
			$record["c03_value"] = $pageObject->showDBValue("c03", $data, $keylink);
			$record["c03_class"] = $pageObject->fieldClass("c03");
//	c04 - 
			$record["c04_value"] = $pageObject->showDBValue("c04", $data, $keylink);
			$record["c04_class"] = $pageObject->fieldClass("c04");
//	c05 - 
			$record["c05_value"] = $pageObject->showDBValue("c05", $data, $keylink);
			$record["c05_class"] = $pageObject->fieldClass("c05");
//	c06 - 
			$record["c06_value"] = $pageObject->showDBValue("c06", $data, $keylink);
			$record["c06_class"] = $pageObject->fieldClass("c06");
//	c07 - 
			$record["c07_value"] = $pageObject->showDBValue("c07", $data, $keylink);
			$record["c07_class"] = $pageObject->fieldClass("c07");
//	c08 - 
			$record["c08_value"] = $pageObject->showDBValue("c08", $data, $keylink);
			$record["c08_class"] = $pageObject->fieldClass("c08");
//	c09 - 
			$record["c09_value"] = $pageObject->showDBValue("c09", $data, $keylink);
			$record["c09_class"] = $pageObject->fieldClass("c09");
//	c10 - 
			$record["c10_value"] = $pageObject->showDBValue("c10", $data, $keylink);
			$record["c10_class"] = $pageObject->fieldClass("c10");
//	c11 - 
			$record["c11_value"] = $pageObject->showDBValue("c11", $data, $keylink);
			$record["c11_class"] = $pageObject->fieldClass("c11");
//	c12 - 
			$record["c12_value"] = $pageObject->showDBValue("c12", $data, $keylink);
			$record["c12_class"] = $pageObject->fieldClass("c12");
//	c13 - 
			$record["c13_value"] = $pageObject->showDBValue("c13", $data, $keylink);
			$record["c13_class"] = $pageObject->fieldClass("c13");
//	c14 - 
			$record["c14_value"] = $pageObject->showDBValue("c14", $data, $keylink);
			$record["c14_class"] = $pageObject->fieldClass("c14");
//	c15 - 
			$record["c15_value"] = $pageObject->showDBValue("c15", $data, $keylink);
			$record["c15_class"] = $pageObject->fieldClass("c15");
//	c16 - 
			$record["c16_value"] = $pageObject->showDBValue("c16", $data, $keylink);
			$record["c16_class"] = $pageObject->fieldClass("c16");
//	c18 - 
			$record["c18_value"] = $pageObject->showDBValue("c18", $data, $keylink);
			$record["c18_class"] = $pageObject->fieldClass("c18");
//	c19 - 
			$record["c19_value"] = $pageObject->showDBValue("c19", $data, $keylink);
			$record["c19_class"] = $pageObject->fieldClass("c19");
//	c20 - 
			$record["c20_value"] = $pageObject->showDBValue("c20", $data, $keylink);
			$record["c20_class"] = $pageObject->fieldClass("c20");
//	c21 - 
			$record["c21_value"] = $pageObject->showDBValue("c21", $data, $keylink);
			$record["c21_class"] = $pageObject->fieldClass("c21");
//	c22 - 
			$record["c22_value"] = $pageObject->showDBValue("c22", $data, $keylink);
			$record["c22_class"] = $pageObject->fieldClass("c22");
//	c23 - 
			$record["c23_value"] = $pageObject->showDBValue("c23", $data, $keylink);
			$record["c23_class"] = $pageObject->fieldClass("c23");
//	idSet - 
			$record["idSet_value"] = $pageObject->showDBValue("idSet", $data, $keylink);
			$record["idSet_class"] = $pageObject->fieldClass("idSet");
//	strFilename - 
			$record["strFilename_value"] = $pageObject->showDBValue("strFilename", $data, $keylink);
			$record["strFilename_class"] = $pageObject->fieldClass("strFilename");
//	idPath - 
			$record["idPath_value"] = $pageObject->showDBValue("idPath", $data, $keylink);
			$record["idPath_class"] = $pageObject->fieldClass("idPath");
//	dateAdded - 
			$record["dateAdded_value"] = $pageObject->showDBValue("dateAdded", $data, $keylink);
			$record["dateAdded_class"] = $pageObject->fieldClass("dateAdded");
//	strPath - 
			$record["strPath_value"] = $pageObject->showDBValue("strPath", $data, $keylink);
			$record["strPath_class"] = $pageObject->fieldClass("strPath");
//	strGenre - 
			$record["strGenre_value"] = $pageObject->showDBValue("strGenre", $data, $keylink);
			$record["strGenre_class"] = $pageObject->fieldClass("strGenre");
//	idGenre - 
			$record["idGenre_value"] = $pageObject->showDBValue("idGenre", $data, $keylink);
			$record["idGenre_class"] = $pageObject->fieldClass("idGenre");
//	strSet - 
			$record["strSet_value"] = $pageObject->showDBValue("strSet", $data, $keylink);
			$record["strSet_class"] = $pageObject->fieldClass("strSet");
//	idSet1 - 
			$record["idSet1_value"] = $pageObject->showDBValue("idSet1", $data, $keylink);
			$record["idSet1_class"] = $pageObject->fieldClass("idSet1");
//	strTag - 
			$record["strTag_value"] = $pageObject->showDBValue("strTag", $data, $keylink);
			$record["strTag_class"] = $pageObject->fieldClass("strTag");
//	idTag - 
			$record["idTag_value"] = $pageObject->showDBValue("idTag", $data, $keylink);
			$record["idTag_class"] = $pageObject->fieldClass("idTag");
			if($col<$colsonpage)
				$record["endrecord_block"] = true;
			$record["grid_recordheader"] = true;
			$record["grid_vrecord"] = true;
			
			if($eventObj->exists("BeforeMoveNextPrint"))
				$eventObj->BeforeMoveNextPrint($data,$row,$record, $pageObject);
				
			$row["grid_record"]["data"][] = $record;
			
			if($eventObj->exists("ListFetchArray"))
				$data = $eventObj->ListFetchArray($rs, $pageObject);
			else
				$data = $cipherer->DecryptFetchedArray($rs);
				
			while($data)
			{
				if($eventObj->exists("BeforeProcessRowPrint"))
				{
					if(!$eventObj->BeforeProcessRowPrint($data, $pageObject))
					{
						if($eventObj->exists("ListFetchArray"))
							$data = $eventObj->ListFetchArray($rs, $pageObject);
						else
							$data = $cipherer->DecryptFetchedArray($rs);
						continue;
					}
				}
				break;
			}
		}
		if($col <= $colsonpage)
		{
			$row["grid_record"]["data"][count($row["grid_record"]["data"])-1]["endrecord_block"] = false;
		}
		$row["grid_rowspace"]=true;
		$row["grid_recordspace"] = array("data"=>array());
		for($i=0;$i<$colsonpage*2-1;$i++)
			$row["grid_recordspace"]["data"][]=true;
		
		$rowinfo["data"][]=$row;
		
		if($all && $records>=30)
		{
			$page=array("grid_row" =>$rowinfo);
			$page["pageno"]=$pageindex;
			$pageindex++;
			$pages[] = $page;
			$records=0;
			$rowinfo=array();
		}
		
	}
	if(count($rowinfo))
	{
		$page=array("grid_row" =>$rowinfo);
		if($all)
			$page["pageno"]=$pageindex;
		$pages[] = $page;
	}
	
	for($i=0;$i<count($pages);$i++)
	{
	 	if($i<count($pages)-1)
			$pages[$i]["begin"]="<div name=page class=printpage>";
		else
		    $pages[$i]["begin"]="<div name=page>";
			
		$pages[$i]["end"]="</div>";
	}

	$page = array();
	$page["data"] = &$pages;
	$xt->assignbyref("page",$page);

	

$strSQL = $_SESSION[$strTableName."_sql"];

$isPdfView = false;
$hasEvents = false;
if ($pageObject->pSet->isUsebuttonHandlers() || $isPdfView || $hasEvents)
{
	$pageObject->body["begin"] .="<script type=\"text/javascript\" src=\"include/loadfirst.js\"></script>\r\n";
		$pageObject->body["begin"] .= "<script type=\"text/javascript\" src=\"include/lang/".getLangFileName(mlang_getcurrentlang()).".js\"></script>";
	
	$pageObject->fillSetCntrlMaps();
	$pageObject->body['end'] .= '<script>';
	$pageObject->body['end'] .= "window.controlsMap = ".my_json_encode($pageObject->controlsHTMLMap).";";
	$pageObject->body['end'] .= "window.viewControlsMap = ".my_json_encode($pageObject->viewControlsHTMLMap).";";
	$pageObject->body['end'] .= "window.settings = ".my_json_encode($pageObject->jsSettings).";";
	$pageObject->body['end'] .= '</script>';
		$pageObject->body["end"] .= "<script language=\"JavaScript\" src=\"include/runnerJS/RunnerAll.js\"></script>\r\n";
	$pageObject->addCommonJs();
}


if ($pageObject->pSet->isUsebuttonHandlers() || $isPdfView || $hasEvents)
	$pageObject->body["end"] .= "<script>".$pageObject->PrepareJS()."</script>";

$xt->assignbyref("body",$pageObject->body);
$xt->assign("grid_block",true);

$xt->assign("idMovie_fieldheadercolumn",true);
$xt->assign("idMovie_fieldheader",true);
$xt->assign("idMovie_fieldcolumn",true);
$xt->assign("idMovie_fieldfootercolumn",true);
$xt->assign("idFile_fieldheadercolumn",true);
$xt->assign("idFile_fieldheader",true);
$xt->assign("idFile_fieldcolumn",true);
$xt->assign("idFile_fieldfootercolumn",true);
$xt->assign("c00_fieldheadercolumn",true);
$xt->assign("c00_fieldheader",true);
$xt->assign("c00_fieldcolumn",true);
$xt->assign("c00_fieldfootercolumn",true);
$xt->assign("c01_fieldheadercolumn",true);
$xt->assign("c01_fieldheader",true);
$xt->assign("c01_fieldcolumn",true);
$xt->assign("c01_fieldfootercolumn",true);
$xt->assign("c02_fieldheadercolumn",true);
$xt->assign("c02_fieldheader",true);
$xt->assign("c02_fieldcolumn",true);
$xt->assign("c02_fieldfootercolumn",true);
$xt->assign("c03_fieldheadercolumn",true);
$xt->assign("c03_fieldheader",true);
$xt->assign("c03_fieldcolumn",true);
$xt->assign("c03_fieldfootercolumn",true);
$xt->assign("c04_fieldheadercolumn",true);
$xt->assign("c04_fieldheader",true);
$xt->assign("c04_fieldcolumn",true);
$xt->assign("c04_fieldfootercolumn",true);
$xt->assign("c05_fieldheadercolumn",true);
$xt->assign("c05_fieldheader",true);
$xt->assign("c05_fieldcolumn",true);
$xt->assign("c05_fieldfootercolumn",true);
$xt->assign("c06_fieldheadercolumn",true);
$xt->assign("c06_fieldheader",true);
$xt->assign("c06_fieldcolumn",true);
$xt->assign("c06_fieldfootercolumn",true);
$xt->assign("c07_fieldheadercolumn",true);
$xt->assign("c07_fieldheader",true);
$xt->assign("c07_fieldcolumn",true);
$xt->assign("c07_fieldfootercolumn",true);
$xt->assign("c08_fieldheadercolumn",true);
$xt->assign("c08_fieldheader",true);
$xt->assign("c08_fieldcolumn",true);
$xt->assign("c08_fieldfootercolumn",true);
$xt->assign("c09_fieldheadercolumn",true);
$xt->assign("c09_fieldheader",true);
$xt->assign("c09_fieldcolumn",true);
$xt->assign("c09_fieldfootercolumn",true);
$xt->assign("c10_fieldheadercolumn",true);
$xt->assign("c10_fieldheader",true);
$xt->assign("c10_fieldcolumn",true);
$xt->assign("c10_fieldfootercolumn",true);
$xt->assign("c11_fieldheadercolumn",true);
$xt->assign("c11_fieldheader",true);
$xt->assign("c11_fieldcolumn",true);
$xt->assign("c11_fieldfootercolumn",true);
$xt->assign("c12_fieldheadercolumn",true);
$xt->assign("c12_fieldheader",true);
$xt->assign("c12_fieldcolumn",true);
$xt->assign("c12_fieldfootercolumn",true);
$xt->assign("c13_fieldheadercolumn",true);
$xt->assign("c13_fieldheader",true);
$xt->assign("c13_fieldcolumn",true);
$xt->assign("c13_fieldfootercolumn",true);
$xt->assign("c14_fieldheadercolumn",true);
$xt->assign("c14_fieldheader",true);
$xt->assign("c14_fieldcolumn",true);
$xt->assign("c14_fieldfootercolumn",true);
$xt->assign("c15_fieldheadercolumn",true);
$xt->assign("c15_fieldheader",true);
$xt->assign("c15_fieldcolumn",true);
$xt->assign("c15_fieldfootercolumn",true);
$xt->assign("c16_fieldheadercolumn",true);
$xt->assign("c16_fieldheader",true);
$xt->assign("c16_fieldcolumn",true);
$xt->assign("c16_fieldfootercolumn",true);
$xt->assign("c18_fieldheadercolumn",true);
$xt->assign("c18_fieldheader",true);
$xt->assign("c18_fieldcolumn",true);
$xt->assign("c18_fieldfootercolumn",true);
$xt->assign("c19_fieldheadercolumn",true);
$xt->assign("c19_fieldheader",true);
$xt->assign("c19_fieldcolumn",true);
$xt->assign("c19_fieldfootercolumn",true);
$xt->assign("c20_fieldheadercolumn",true);
$xt->assign("c20_fieldheader",true);
$xt->assign("c20_fieldcolumn",true);
$xt->assign("c20_fieldfootercolumn",true);
$xt->assign("c21_fieldheadercolumn",true);
$xt->assign("c21_fieldheader",true);
$xt->assign("c21_fieldcolumn",true);
$xt->assign("c21_fieldfootercolumn",true);
$xt->assign("c22_fieldheadercolumn",true);
$xt->assign("c22_fieldheader",true);
$xt->assign("c22_fieldcolumn",true);
$xt->assign("c22_fieldfootercolumn",true);
$xt->assign("c23_fieldheadercolumn",true);
$xt->assign("c23_fieldheader",true);
$xt->assign("c23_fieldcolumn",true);
$xt->assign("c23_fieldfootercolumn",true);
$xt->assign("idSet_fieldheadercolumn",true);
$xt->assign("idSet_fieldheader",true);
$xt->assign("idSet_fieldcolumn",true);
$xt->assign("idSet_fieldfootercolumn",true);
$xt->assign("strFilename_fieldheadercolumn",true);
$xt->assign("strFilename_fieldheader",true);
$xt->assign("strFilename_fieldcolumn",true);
$xt->assign("strFilename_fieldfootercolumn",true);
$xt->assign("idPath_fieldheadercolumn",true);
$xt->assign("idPath_fieldheader",true);
$xt->assign("idPath_fieldcolumn",true);
$xt->assign("idPath_fieldfootercolumn",true);
$xt->assign("dateAdded_fieldheadercolumn",true);
$xt->assign("dateAdded_fieldheader",true);
$xt->assign("dateAdded_fieldcolumn",true);
$xt->assign("dateAdded_fieldfootercolumn",true);
$xt->assign("strPath_fieldheadercolumn",true);
$xt->assign("strPath_fieldheader",true);
$xt->assign("strPath_fieldcolumn",true);
$xt->assign("strPath_fieldfootercolumn",true);
$xt->assign("strGenre_fieldheadercolumn",true);
$xt->assign("strGenre_fieldheader",true);
$xt->assign("strGenre_fieldcolumn",true);
$xt->assign("strGenre_fieldfootercolumn",true);
$xt->assign("idGenre_fieldheadercolumn",true);
$xt->assign("idGenre_fieldheader",true);
$xt->assign("idGenre_fieldcolumn",true);
$xt->assign("idGenre_fieldfootercolumn",true);
$xt->assign("strSet_fieldheadercolumn",true);
$xt->assign("strSet_fieldheader",true);
$xt->assign("strSet_fieldcolumn",true);
$xt->assign("strSet_fieldfootercolumn",true);
$xt->assign("idSet1_fieldheadercolumn",true);
$xt->assign("idSet1_fieldheader",true);
$xt->assign("idSet1_fieldcolumn",true);
$xt->assign("idSet1_fieldfootercolumn",true);
$xt->assign("strTag_fieldheadercolumn",true);
$xt->assign("strTag_fieldheader",true);
$xt->assign("strTag_fieldcolumn",true);
$xt->assign("strTag_fieldfootercolumn",true);
$xt->assign("idTag_fieldheadercolumn",true);
$xt->assign("idTag_fieldheader",true);
$xt->assign("idTag_fieldcolumn",true);
$xt->assign("idTag_fieldfootercolumn",true);

	$record_header=array("data"=>array());
	$record_footer=array("data"=>array());
	for($i=0;$i<$colsonpage;$i++)
	{
		$rheader=array();
		$rfooter=array();
		if($i<$colsonpage-1)
		{
			$rheader["endrecordheader_block"]=true;
			$rfooter["endrecordheader_block"]=true;
		}
		$record_header["data"][]=$rheader;
		$record_footer["data"][]=$rfooter;
	}
	$xt->assignbyref("record_header",$record_header);
	$xt->assignbyref("record_footer",$record_footer);
	$xt->assign("grid_header",true);
	$xt->assign("grid_footer",true);

if($eventObj->exists("BeforeShowPrint"))
	$eventObj->BeforeShowPrint($xt,$pageObject->templatefile, $pageObject);

if(!postvalue("pdf"))
	$xt->display($pageObject->templatefile);
else
{
	$xt->load_template($pageObject->templatefile);
	$page = $xt->fetch_loaded();
	$pagewidth=postvalue("width")*1.05;
	$pageheight=postvalue("height")*1.05;
	$landscape=false;
		if($pagewidth>$pageheight)
		{
			$landscape=true;
			if($pagewidth/$pageheight<297/210)
				$pagewidth = 297/210*$pageheight;
		}
		else
		{
			if($pagewidth/$pageheight<210/297)
				$pagewidth = 210/297*$pageheight;
		}
}
?>
