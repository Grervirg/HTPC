<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

include("include/dbcommon.php");
include("classes/searchclause.php");

add_nocache_headers();

include("include/seasonview_variables.php");

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
$layout->blocks["top"][] = "pdf";$page_layouts["seasonview_print"] = $layout;


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
			$selected_recs[]=$keys;
		}
	}
	elseif(@$_REQUEST["selection"])
	{
		foreach(@$_REQUEST["selection"] as $keyblock)
		{
			$arr=explode("&",refine($keyblock));
			if(count($arr)<0)
				continue;
			$keys=array();
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
$arr['fName'] = "idSeason";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("idSeason");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "idShow";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("idShow");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "season";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("season");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "strPath";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("strPath");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "showTitle";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("showTitle");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "plot";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("plot");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "premiered";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("premiered");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "genre";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("genre");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "strStudio";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("strStudio");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "mpaa";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("mpaa");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "episodes";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("episodes");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "playCount";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("playCount");
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

//	idSeason - 
			$record["idSeason_value"] = $pageObject->showDBValue("idSeason", $data, $keylink);
			$record["idSeason_class"] = $pageObject->fieldClass("idSeason");
//	idShow - 
			$record["idShow_value"] = $pageObject->showDBValue("idShow", $data, $keylink);
			$record["idShow_class"] = $pageObject->fieldClass("idShow");
//	season - 
			$record["season_value"] = $pageObject->showDBValue("season", $data, $keylink);
			$record["season_class"] = $pageObject->fieldClass("season");
//	strPath - 
			$record["strPath_value"] = $pageObject->showDBValue("strPath", $data, $keylink);
			$record["strPath_class"] = $pageObject->fieldClass("strPath");
//	showTitle - 
			$record["showTitle_value"] = $pageObject->showDBValue("showTitle", $data, $keylink);
			$record["showTitle_class"] = $pageObject->fieldClass("showTitle");
//	plot - 
			$record["plot_value"] = $pageObject->showDBValue("plot", $data, $keylink);
			$record["plot_class"] = $pageObject->fieldClass("plot");
//	premiered - 
			$record["premiered_value"] = $pageObject->showDBValue("premiered", $data, $keylink);
			$record["premiered_class"] = $pageObject->fieldClass("premiered");
//	genre - 
			$record["genre_value"] = $pageObject->showDBValue("genre", $data, $keylink);
			$record["genre_class"] = $pageObject->fieldClass("genre");
//	strStudio - 
			$record["strStudio_value"] = $pageObject->showDBValue("strStudio", $data, $keylink);
			$record["strStudio_class"] = $pageObject->fieldClass("strStudio");
//	mpaa - 
			$record["mpaa_value"] = $pageObject->showDBValue("mpaa", $data, $keylink);
			$record["mpaa_class"] = $pageObject->fieldClass("mpaa");
//	episodes - 
			$record["episodes_value"] = $pageObject->showDBValue("episodes", $data, $keylink);
			$record["episodes_class"] = $pageObject->fieldClass("episodes");
//	playCount - 
			$record["playCount_value"] = $pageObject->showDBValue("playCount", $data, $keylink);
			$record["playCount_class"] = $pageObject->fieldClass("playCount");
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

$xt->assign("idSeason_fieldheadercolumn",true);
$xt->assign("idSeason_fieldheader",true);
$xt->assign("idSeason_fieldcolumn",true);
$xt->assign("idSeason_fieldfootercolumn",true);
$xt->assign("idShow_fieldheadercolumn",true);
$xt->assign("idShow_fieldheader",true);
$xt->assign("idShow_fieldcolumn",true);
$xt->assign("idShow_fieldfootercolumn",true);
$xt->assign("season_fieldheadercolumn",true);
$xt->assign("season_fieldheader",true);
$xt->assign("season_fieldcolumn",true);
$xt->assign("season_fieldfootercolumn",true);
$xt->assign("strPath_fieldheadercolumn",true);
$xt->assign("strPath_fieldheader",true);
$xt->assign("strPath_fieldcolumn",true);
$xt->assign("strPath_fieldfootercolumn",true);
$xt->assign("showTitle_fieldheadercolumn",true);
$xt->assign("showTitle_fieldheader",true);
$xt->assign("showTitle_fieldcolumn",true);
$xt->assign("showTitle_fieldfootercolumn",true);
$xt->assign("plot_fieldheadercolumn",true);
$xt->assign("plot_fieldheader",true);
$xt->assign("plot_fieldcolumn",true);
$xt->assign("plot_fieldfootercolumn",true);
$xt->assign("premiered_fieldheadercolumn",true);
$xt->assign("premiered_fieldheader",true);
$xt->assign("premiered_fieldcolumn",true);
$xt->assign("premiered_fieldfootercolumn",true);
$xt->assign("genre_fieldheadercolumn",true);
$xt->assign("genre_fieldheader",true);
$xt->assign("genre_fieldcolumn",true);
$xt->assign("genre_fieldfootercolumn",true);
$xt->assign("strStudio_fieldheadercolumn",true);
$xt->assign("strStudio_fieldheader",true);
$xt->assign("strStudio_fieldcolumn",true);
$xt->assign("strStudio_fieldfootercolumn",true);
$xt->assign("mpaa_fieldheadercolumn",true);
$xt->assign("mpaa_fieldheader",true);
$xt->assign("mpaa_fieldcolumn",true);
$xt->assign("mpaa_fieldfootercolumn",true);
$xt->assign("episodes_fieldheadercolumn",true);
$xt->assign("episodes_fieldheader",true);
$xt->assign("episodes_fieldcolumn",true);
$xt->assign("episodes_fieldfootercolumn",true);
$xt->assign("playCount_fieldheadercolumn",true);
$xt->assign("playCount_fieldheader",true);
$xt->assign("playCount_fieldcolumn",true);
$xt->assign("playCount_fieldfootercolumn",true);

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
