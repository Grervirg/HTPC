<?php 
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");
include("include/dbcommon.php");
include("classes/searchclause.php");
session_cache_limiter("none");

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

$layout = new TLayout("export","FancyBlueWave","MobileBlueWave");
$layout->blocks["top"] = array();
$layout->containers["export"] = array();

$layout->containers["export"][] = array("name"=>"exportheader","block"=>"","substyle"=>2);


$layout->containers["export"][] = array("name"=>"exprange_header","block"=>"rangeheader_block","substyle"=>3);


$layout->containers["export"][] = array("name"=>"exprange","block"=>"range_block","substyle"=>1);


$layout->containers["export"][] = array("name"=>"expoutput_header","block"=>"","substyle"=>3);


$layout->containers["export"][] = array("name"=>"expoutput","block"=>"","substyle"=>1);


$layout->containers["export"][] = array("name"=>"expbuttons","block"=>"","substyle"=>2);


$layout->skins["export"] = "fields";
$layout->blocks["top"][] = "export";$page_layouts["Movies_export"] = $layout;


// Modify query: remove blob fields from fieldlist.
// Blob fields on an export page are shown using imager.php (for example).
// They don't need to be selected from DB in export.php itself.
//$gQuery->ReplaceFieldsWithDummies(GetBinaryFieldsIndices());

$cipherer = new RunnerCipherer($strTableName);

$strWhereClause = "";
$strHavingClause = "";
$strSearchCriteria = "and";
$selected_recs = array();
$options = "1";

header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 
include('include/xtempl.php');
include('classes/runnerpage.php');
$xt = new Xtempl();
$id = postvalue("id") != "" ? postvalue("id") : 1;

$phpVersion = (int)substr(phpversion(), 0, 1); 
if($phpVersion > 4)
{
	include("include/export_functions.php");
	$xt->assign("groupExcel", true);
}
else
	$xt->assign("excel", true);

//array of params for classes
$params = array("pageType" => PAGE_EXPORT, "id" => $id, "tName" => $strTableName);
$params["xt"] = &$xt;
if(!$eventObj->exists("ListGetRowCount") && !$eventObj->exists("ListQuery"))
	$params["needSearchClauseObj"] = false;
$pageObject = new RunnerPage($params);

//	Before Process event
if($eventObj->exists("BeforeProcessExport"))
	$eventObj->BeforeProcessExport($conn, $pageObject);

if (@$_REQUEST["a"]!="")
{
	$options = "";
	$sWhere = "1=0";	

//	process selection
	$selected_recs = array();
	if (@$_REQUEST["mdelete"])
	{
		foreach(@$_REQUEST["mdelete"] as $ind)
		{
			$keys=array();
			$keys["idMovie"] = refine($_REQUEST["mdelete1"][mdeleteIndex($ind)]);
			$selected_recs[] = $keys;
		}
	}
	elseif(@$_REQUEST["selection"])
	{
		foreach(@$_REQUEST["selection"] as $keyblock)
		{
			$arr=explode("&",refine($keyblock));
			if(count($arr)<1)
				continue;
			$keys = array();
			$keys["idMovie"] = urldecode($arr[0]);
			$selected_recs[] = $keys;
		}
	}

	foreach($selected_recs as $keys)
	{
		$sWhere = $sWhere . " or ";
		$sWhere.=KeyWhere($keys);
	}


	$strSQL = $gQuery->gSQLWhere($sWhere);
	$strWhereClause=$sWhere;
	
	$_SESSION[$strTableName."_SelectedSQL"] = $strSQL;
	$_SESSION[$strTableName."_SelectedWhere"] = $sWhere;
	$_SESSION[$strTableName."_SelectedRecords"] = $selected_recs;
}

if ($_SESSION[$strTableName."_SelectedSQL"]!="" && @$_REQUEST["records"]=="") 
{
	$strSQL = $_SESSION[$strTableName."_SelectedSQL"];
	$strWhereClause = @$_SESSION[$strTableName."_SelectedWhere"];
	$selected_recs = $_SESSION[$strTableName."_SelectedRecords"];
}
else
{
	$strWhereClause = @$_SESSION[$strTableName."_where"];
	$strHavingClause = @$_SESSION[$strTableName."_having"];
	$strSearchCriteria = @$_SESSION[$strTableName."_criteria"];
	$strSQL = $gQuery->gSQLWhere($strWhereClause, $strHavingClause, $strSearchCriteria);
}

$mypage = 1;
if(@$_REQUEST["type"])
{
//	order by
	$strOrderBy = $_SESSION[$strTableName."_order"];
	if(!$strOrderBy)
		$strOrderBy = $gstrOrderBy;
	$strSQL.=" ".trim($strOrderBy);

	$strSQLbak = $strSQL;
	if($eventObj->exists("BeforeQueryExport"))
		$eventObj->BeforeQueryExport($strSQL,$strWhereClause,$strOrderBy, $pageObject);
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
				$masterKeysReq[] = $_SESSION[$strTableName."_masterkey".($i + 1)];
			$rowcount = $eventObj->ListGetRowCount($pageObject->searchClauseObj,$_SESSION[$strTableName."_mastertable"],$masterKeysReq,$selected_recs, $pageObject);
		}
		if($rowcount !== false)
			$numrows = $rowcount;
		else
			$numrows = $gQuery->gSQLRowCount($strWhereClause,$strHavingClause,$strSearchCriteria);
	}
	LogInfo($strSQL);

//	 Pagination:

	$nPageSize = 0;
	if(@$_REQUEST["records"]=="page" && $numrows)
	{
		$mypage = (integer)@$_SESSION[$strTableName."_pagenumber"];
		$nPageSize = (integer)@$_SESSION[$strTableName."_pagesize"];
		
		if(!$nPageSize)
			$nPageSize = $gSettings->getInitialPageSize();
				
		if($nPageSize<0)
			$nPageSize = 0;
			
		if($nPageSize>0)
		{
			if($numrows<=($mypage-1)*$nPageSize)
				$mypage = ceil($numrows/$nPageSize);
		
			if(!$mypage)
				$mypage = 1;
			
					$strSQL.=" limit ".(($mypage-1)*$nPageSize).",".$nPageSize;
		}
	}
	$listarray = false;
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
		$listarray = $eventObj->ListQuery($pageObject->searchClauseObj, $arrFieldForSort, $arrHowFieldSort,
			$_SESSION[$strTableName."_mastertable"], $masterKeysReq, $selected_recs, $nPageSize, $mypage, $pageObject);
	}
	if($listarray!==false)
		$rs = $listarray;
	elseif($nPageSize>0)
	{
					$rs = db_query($strSQL,$conn);
	}
	else
		$rs = db_query($strSQL,$conn);

	if(!ini_get("safe_mode"))
		set_time_limit(300);
	
	if(substr(@$_REQUEST["type"],0,5)=="excel")
	{
//	remove grouping
		$locale_info["LOCALE_SGROUPING"]="0";
		$locale_info["LOCALE_SMONGROUPING"]="0";
				if($phpVersion > 4)
			ExportToExcel($cipherer, $pageObject);
		else
			ExportToExcel_old($cipherer);
	}
	else if(@$_REQUEST["type"]=="word")
	{
		ExportToWord($cipherer);
	}
	else if(@$_REQUEST["type"]=="xml")
	{
		ExportToXML($cipherer);
	}
	else if(@$_REQUEST["type"]=="csv")
	{
		$locale_info["LOCALE_SGROUPING"]="0";
		$locale_info["LOCALE_SDECIMAL"]=".";
		$locale_info["LOCALE_SMONGROUPING"]="0";
		$locale_info["LOCALE_SMONDECIMALSEP"]=".";
		ExportToCSV($cipherer);
	}
	db_close($conn);
	return;
}

// add button events if exist
$pageObject->addButtonHandlers();

if($options)
{
	$xt->assign("rangeheader_block",true);
	$xt->assign("range_block",true);
}

$xt->assign("exportlink_attrs", 'id="saveButton'.$pageObject->id.'"');

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

$pageObject->body["end"] .= "<script>".$pageObject->PrepareJS()."</script>";
$xt->assignbyref("body",$pageObject->body);

$xt->display("Movies_export.htm");

function ExportToExcel_old($cipherer)
{
	global $cCharset;
	header("Content-Type: application/vnd.ms-excel");
	header("Content-Disposition: attachment;Filename=Movies.xls");

	echo "<html>";
	echo "<html xmlns:o=\"urn:schemas-microsoft-com:office:office\" xmlns:x=\"urn:schemas-microsoft-com:office:excel\" xmlns=\"http://www.w3.org/TR/REC-html40\">";
	
	echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=".$cCharset."\">";
	echo "<body>";
	echo "<table border=1>";

	WriteTableData($cipherer);

	echo "</table>";
	echo "</body>";
	echo "</html>";
}

function ExportToWord($cipherer)
{
	global $cCharset;
	header("Content-Type: application/vnd.ms-word");
	header("Content-Disposition: attachment;Filename=Movies.doc");

	echo "<html>";
	echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=".$cCharset."\">";
	echo "<body>";
	echo "<table border=1>";

	WriteTableData($cipherer);

	echo "</table>";
	echo "</body>";
	echo "</html>";
}

function ExportToXML($cipherer)
{
	global $nPageSize,$rs,$strTableName,$conn,$eventObj, $pageObject;
	header("Content-Type: text/xml");
	header("Content-Disposition: attachment;Filename=Movies.xml");
	if($eventObj->exists("ListFetchArray"))
		$row = $eventObj->ListFetchArray($rs, $pageObject);
	else
		$row = $cipherer->DecryptFetchedArray($rs);	
	//if(!$row)
	//	return;
		
	global $cCharset;
	
	echo "<?xml version=\"1.0\" encoding=\"".$cCharset."\" standalone=\"yes\"?>\r\n";
	echo "<table>\r\n";
	$i = 0;
	$pageObject->viewControls->forExport = "xml";
	while((!$nPageSize || $i<$nPageSize) && $row)
	{
		$values = array();
			$values["idMovie"] = $pageObject->showDBValue("idMovie", $row);
			$values["idFile"] = $pageObject->showDBValue("idFile", $row);
			$values["c00"] = $pageObject->showDBValue("c00", $row);
			$values["c01"] = $pageObject->showDBValue("c01", $row);
			$values["c02"] = $pageObject->showDBValue("c02", $row);
			$values["c03"] = $pageObject->showDBValue("c03", $row);
			$values["c04"] = $pageObject->showDBValue("c04", $row);
			$values["c05"] = $pageObject->showDBValue("c05", $row);
			$values["c06"] = $pageObject->showDBValue("c06", $row);
			$values["c07"] = $pageObject->showDBValue("c07", $row);
			$values["c08"] = $pageObject->showDBValue("c08", $row);
			$values["c09"] = $pageObject->showDBValue("c09", $row);
			$values["c10"] = $pageObject->showDBValue("c10", $row);
			$values["c11"] = $pageObject->showDBValue("c11", $row);
			$values["c12"] = $pageObject->showDBValue("c12", $row);
			$values["c13"] = $pageObject->showDBValue("c13", $row);
			$values["c14"] = $pageObject->showDBValue("c14", $row);
			$values["c15"] = $pageObject->showDBValue("c15", $row);
			$values["c16"] = $pageObject->showDBValue("c16", $row);
			$values["c18"] = $pageObject->showDBValue("c18", $row);
			$values["c19"] = $pageObject->showDBValue("c19", $row);
			$values["c20"] = $pageObject->showDBValue("c20", $row);
			$values["c21"] = $pageObject->showDBValue("c21", $row);
			$values["c22"] = $pageObject->showDBValue("c22", $row);
			$values["c23"] = $pageObject->showDBValue("c23", $row);
			$values["idSet"] = $pageObject->showDBValue("idSet", $row);
		
		$eventRes = true;
		if ($eventObj->exists('BeforeOut'))
			$eventRes = $eventObj->BeforeOut($row, $values, $pageObject);
		
		if ($eventRes)
		{
			$i++;
			echo "<row>\r\n";
			foreach ($values as $fName => $val)
			{
				$field = htmlspecialchars(XMLNameEncode($fName));
				echo "<".$field.">";
				echo $values[$fName];
				echo "</".$field.">\r\n";
			}
			echo "</row>\r\n";
		}
		
		
		if($eventObj->exists("ListFetchArray"))
			$row = $eventObj->ListFetchArray($rs, $pageObject);
		else
			$row = $cipherer->DecryptFetchedArray($rs);
	}
	echo "</table>\r\n";
}

function ExportToCSV($cipherer)
{
	global $rs,$nPageSize,$strTableName,$conn,$eventObj, $pageObject;
	header("Content-Type: application/csv");
	header("Content-Disposition: attachment;Filename=Movies.csv");
	
	if($eventObj->exists("ListFetchArray"))
		$row = $eventObj->ListFetchArray($rs, $pageObject);
	else
		$row = $cipherer->DecryptFetchedArray($rs);

// write header
	$outstr = "";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"idMovie\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"idFile\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"c00\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"c01\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"c02\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"c03\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"c04\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"c05\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"c06\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"c07\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"c08\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"c09\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"c10\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"c11\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"c12\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"c13\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"c14\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"c15\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"c16\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"c18\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"c19\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"c20\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"c21\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"c22\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"c23\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"idSet\"";
	echo $outstr;
	echo "\r\n";

// write data rows
	$iNumberOfRows = 0;
	$pageObject->viewControls->forExport = "csv";
	while((!$nPageSize || $iNumberOfRows < $nPageSize) && $row)
	{
		$values = array();
			$values["idMovie"] = $pageObject->getViewControl("idMovie")->showDBValue($row, "");
			$values["idFile"] = $pageObject->getViewControl("idFile")->showDBValue($row, "");
			$values["c00"] = $pageObject->getViewControl("c00")->showDBValue($row, "");
			$values["c01"] = $pageObject->getViewControl("c01")->showDBValue($row, "");
			$values["c02"] = $pageObject->getViewControl("c02")->showDBValue($row, "");
			$values["c03"] = $pageObject->getViewControl("c03")->showDBValue($row, "");
			$values["c04"] = $pageObject->getViewControl("c04")->showDBValue($row, "");
			$values["c05"] = $pageObject->getViewControl("c05")->showDBValue($row, "");
			$values["c06"] = $pageObject->getViewControl("c06")->showDBValue($row, "");
			$values["c07"] = $pageObject->getViewControl("c07")->showDBValue($row, "");
			$values["c08"] = $pageObject->getViewControl("c08")->showDBValue($row, "");
			$values["c09"] = $pageObject->getViewControl("c09")->showDBValue($row, "");
			$values["c10"] = $pageObject->getViewControl("c10")->showDBValue($row, "");
			$values["c11"] = $pageObject->getViewControl("c11")->showDBValue($row, "");
			$values["c12"] = $pageObject->getViewControl("c12")->showDBValue($row, "");
			$values["c13"] = $pageObject->getViewControl("c13")->showDBValue($row, "");
			$values["c14"] = $pageObject->getViewControl("c14")->showDBValue($row, "");
			$values["c15"] = $pageObject->getViewControl("c15")->showDBValue($row, "");
			$values["c16"] = $pageObject->getViewControl("c16")->showDBValue($row, "");
			$values["c18"] = $pageObject->getViewControl("c18")->showDBValue($row, "");
			$values["c19"] = $pageObject->getViewControl("c19")->showDBValue($row, "");
			$values["c20"] = $pageObject->getViewControl("c20")->showDBValue($row, "");
			$values["c21"] = $pageObject->getViewControl("c21")->showDBValue($row, "");
			$values["c22"] = $pageObject->getViewControl("c22")->showDBValue($row, "");
			$values["c23"] = $pageObject->getViewControl("c23")->showDBValue($row, "");
			$values["idSet"] = $pageObject->getViewControl("idSet")->showDBValue($row, "");

		$eventRes = true;
		if ($eventObj->exists('BeforeOut'))
		{
			$eventRes = $eventObj->BeforeOut($row,$values, $pageObject);
		}
		if ($eventRes)
		{
			$outstr="";
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["idMovie"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["idFile"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["c00"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["c01"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["c02"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["c03"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["c04"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["c05"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["c06"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["c07"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["c08"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["c09"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["c10"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["c11"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["c12"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["c13"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["c14"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["c15"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["c16"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["c18"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["c19"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["c20"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["c21"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["c22"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["c23"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["idSet"]).'"';
			echo $outstr;
		}
		
		$iNumberOfRows++;
		if($eventObj->exists("ListFetchArray"))
			$row = $eventObj->ListFetchArray($rs, $pageObject);
		else
			$row = $cipherer->DecryptFetchedArray($rs);
			
		if(((!$nPageSize || $iNumberOfRows<$nPageSize) && $row) && $eventRes)
			echo "\r\n";
	}
}

function WriteTableData($cipherer)
{
	global $rs,$nPageSize,$strTableName,$conn,$eventObj, $pageObject;
	
	if($eventObj->exists("ListFetchArray"))
		$row = $eventObj->ListFetchArray($rs, $pageObject);
	else
		$row = $cipherer->DecryptFetchedArray($rs);
//	if(!$row)
//		return;
// write header
	echo "<tr>";
	if($_REQUEST["type"]=="excel")
	{
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Id Movie").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Id File").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Movie Name").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Plot").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Outline").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Tagline").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("votes").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Rating").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Writers").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Year").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Thumbnails").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Imdb ID").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Sorting Title").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Runtime").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("MPAA Rating").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("IMDB Rating").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Genre").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Director").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Original Title").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Studio").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Trailer").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("FanArt").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Country").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Path").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Pathid").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Id Set").'</td>';	
	}
	else
	{
		echo "<td>"."Id Movie"."</td>";
		echo "<td>"."Id File"."</td>";
		echo "<td>"."Movie Name"."</td>";
		echo "<td>"."Plot"."</td>";
		echo "<td>"."Outline"."</td>";
		echo "<td>"."Tagline"."</td>";
		echo "<td>"."votes"."</td>";
		echo "<td>"."Rating"."</td>";
		echo "<td>"."Writers"."</td>";
		echo "<td>"."Year"."</td>";
		echo "<td>"."Thumbnails"."</td>";
		echo "<td>"."Imdb ID"."</td>";
		echo "<td>"."Sorting Title"."</td>";
		echo "<td>"."Runtime"."</td>";
		echo "<td>"."MPAA Rating"."</td>";
		echo "<td>"."IMDB Rating"."</td>";
		echo "<td>"."Genre"."</td>";
		echo "<td>"."Director"."</td>";
		echo "<td>"."Original Title"."</td>";
		echo "<td>"."Studio"."</td>";
		echo "<td>"."Trailer"."</td>";
		echo "<td>"."FanArt"."</td>";
		echo "<td>"."Country"."</td>";
		echo "<td>"."Path"."</td>";
		echo "<td>"."Pathid"."</td>";
		echo "<td>"."Id Set"."</td>";
	}
	echo "</tr>";
	
// write data rows
	$iNumberOfRows = 0;
	$pageObject->viewControls->forExport = "export";
	while((!$nPageSize || $iNumberOfRows<$nPageSize) && $row)
	{
		countTotals($totals, $totalsFields, $row);
		
		$values = array();
	
					$values["idMovie"] = $pageObject->getViewControl("idMovie")->showDBValue($row, "");
					$values["idFile"] = $pageObject->getViewControl("idFile")->showDBValue($row, "");
					$values["c00"] = $pageObject->getViewControl("c00")->showDBValue($row, "");
					$values["c01"] = $pageObject->getViewControl("c01")->showDBValue($row, "");
					$values["c02"] = $pageObject->getViewControl("c02")->showDBValue($row, "");
					$values["c03"] = $pageObject->getViewControl("c03")->showDBValue($row, "");
					$values["c04"] = $pageObject->getViewControl("c04")->showDBValue($row, "");
					$values["c05"] = $pageObject->getViewControl("c05")->showDBValue($row, "");
					$values["c06"] = $pageObject->getViewControl("c06")->showDBValue($row, "");
					$values["c07"] = $pageObject->getViewControl("c07")->showDBValue($row, "");
					$values["c08"] = $pageObject->getViewControl("c08")->showDBValue($row, "");
					$values["c09"] = $pageObject->getViewControl("c09")->showDBValue($row, "");
					$values["c10"] = $pageObject->getViewControl("c10")->showDBValue($row, "");
					$values["c11"] = $pageObject->getViewControl("c11")->showDBValue($row, "");
					$values["c12"] = $pageObject->getViewControl("c12")->showDBValue($row, "");
					$values["c13"] = $pageObject->getViewControl("c13")->showDBValue($row, "");
					$values["c14"] = $pageObject->getViewControl("c14")->showDBValue($row, "");
					$values["c15"] = $pageObject->getViewControl("c15")->showDBValue($row, "");
					$values["c16"] = $pageObject->getViewControl("c16")->showDBValue($row, "");
					$values["c18"] = $pageObject->getViewControl("c18")->showDBValue($row, "");
					$values["c19"] = $pageObject->getViewControl("c19")->showDBValue($row, "");
					$values["c20"] = $pageObject->getViewControl("c20")->showDBValue($row, "");
					$values["c21"] = $pageObject->getViewControl("c21")->showDBValue($row, "");
					$values["c22"] = $pageObject->getViewControl("c22")->showDBValue($row, "");
					$values["c23"] = $pageObject->getViewControl("c23")->showDBValue($row, "");
					$values["idSet"] = $pageObject->getViewControl("idSet")->showDBValue($row, "");
		
		$eventRes = true;
		if ($eventObj->exists('BeforeOut'))
		{
			$eventRes = $eventObj->BeforeOut($row, $values, $pageObject);
		}
		if ($eventRes)
		{
			$iNumberOfRows++;
			echo "<tr>";
		
							echo '<td>';
			
									echo $values["idMovie"];
			echo '</td>';
							echo '<td>';
			
									echo $values["idFile"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["c00"]);
					else
						echo $values["c00"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["c01"]);
					else
						echo $values["c01"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["c02"]);
					else
						echo $values["c02"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["c03"]);
					else
						echo $values["c03"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["c04"]);
					else
						echo $values["c04"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["c05"]);
					else
						echo $values["c05"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["c06"]);
					else
						echo $values["c06"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["c07"]);
					else
						echo $values["c07"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["c08"]);
					else
						echo $values["c08"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["c09"]);
					else
						echo $values["c09"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["c10"]);
					else
						echo $values["c10"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["c11"]);
					else
						echo $values["c11"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["c12"]);
					else
						echo $values["c12"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["c13"]);
					else
						echo $values["c13"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["c14"]);
					else
						echo $values["c14"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["c15"]);
					else
						echo $values["c15"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["c16"]);
					else
						echo $values["c16"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["c18"]);
					else
						echo $values["c18"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["c19"]);
					else
						echo $values["c19"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["c20"]);
					else
						echo $values["c20"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["c21"]);
					else
						echo $values["c21"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["c22"]);
					else
						echo $values["c22"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["c23"]);
					else
						echo $values["c23"];
			echo '</td>';
							echo '<td>';
			
									echo $values["idSet"];
			echo '</td>';
			echo "</tr>";
		}
		
		
		if($eventObj->exists("ListFetchArray"))
			$row = $eventObj->ListFetchArray($rs, $pageObject);
		else
			$row = $cipherer->DecryptFetchedArray($rs);
	}
	
}

function XMLNameEncode($strValue)
{
	$search = array(" ","#","'","/","\\","(",")",",","[");
	$ret = str_replace($search,"",$strValue);
	$search = array("]","+","\"","-","_","|","}","{","=");
	$ret = str_replace($search,"",$ret);
	return $ret;
}

function PrepareForExcel($ret)
{
	//$ret = htmlspecialchars($str); commented for bug #6823
	if (substr($ret,0,1)== "=") 
		$ret = "&#61;".substr($ret,1);
	return $ret;

}

function countTotals(&$totals, $totalsFields, $data)
{
	for($i = 0; $i < count($totalsFields); $i ++) 
	{
		if($totalsFields[$i]['totalsType'] == 'COUNT') 
			$totals[$totalsFields[$i]['fName']]["value"] += ($data[$totalsFields[$i]['fName']]!= "");
		else if($totalsFields[$i]['viewFormat'] == "Time") 
		{
			$time = GetTotalsForTime($data[$totalsFields[$i]['fName']]);
			$totals[$totalsFields[$i]['fName']]["value"] += $time[2]+$time[1]*60 + $time[0]*3600;
		} 
		else 
			$totals[$totalsFields[$i]['fName']]["value"] += ($data[$totalsFields[$i]['fName']]+ 0);
		
		if($totalsFields[$i]['totalsType'] == 'AVERAGE')
		{
			if(!is_null($data[$totalsFields[$i]['fName']]) && $data[$totalsFields[$i]['fName']]!=="")
				$totals[$totalsFields[$i]['fName']]['numRows']++;
		}
	}
}
?>
