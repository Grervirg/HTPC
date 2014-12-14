<?php 
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

include("include/dbcommon.php");
include("include/Movies_variables.php");
include('include/xtempl.php');
include('classes/viewpage.php');
include("classes/searchclause.php");

add_nocache_headers();

//	check if logged in
if(!isLogged() || CheckPermissionsEvent($strTableName, 'S') && !CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search"))
{ 
	$_SESSION["MyURL"]=$_SERVER["SCRIPT_NAME"]."?".$_SERVER["QUERY_STRING"];
	header("Location: login.php?message=expired"); 
	return;
}

$layout = new TLayout("view2","FancyBlueWave","MobileBlueWave");
$layout->blocks["top"] = array();
$layout->skins["pdf"] = "empty";
$layout->blocks["top"][] = "pdf";
$layout->containers["view"] = array();

$layout->containers["view"][] = array("name"=>"viewheader","block"=>"","substyle"=>2);


$layout->containers["view"][] = array("name"=>"wrapper","block"=>"","substyle"=>1, "container"=>"fields");


$layout->containers["fields"] = array();

$layout->containers["fields"][] = array("name"=>"viewfields","block"=>"","substyle"=>1);


$layout->containers["fields"][] = array("name"=>"viewbuttons","block"=>"","substyle"=>2);


$layout->skins["fields"] = "fields";

$layout->skins["view"] = "1";
$layout->blocks["top"][] = "view";
$layout->skins["details"] = "empty";
$layout->blocks["top"][] = "details";$page_layouts["Movies_view"] = $layout;




//$cipherer = new RunnerCipherer($strTableName);
	
$xt = new Xtempl();

$query = $gQuery->Copy();

$filename = "";	
$message = "";
$key = array();
$next = array();
$prev = array();
$all = postvalue("all");
$pdf = postvalue("pdf");
$mypage = 1;

//Show view page as popUp or not
$inlineview = (postvalue("onFly") ? true : false);

//If show view as popUp, get parent Id
if($inlineview)
	$parId = postvalue("parId");
else
	$parId = 0;

//Set page id	
if(postvalue("id"))
	$id = postvalue("id");
else
	$id = 1;

//$isNeedSettings = true;//($inlineview && postvalue("isNeedSettings") == 'true') || (!$inlineview);	
	
// assign an id
$xt->assign("id",$id);

//array of params for classes
$params = array("pageType" => PAGE_VIEW, "id" => $id, "tName" => $strTableName);
$params["xt"] = &$xt;
$params["all"] = $all;

//Get array of tabs for edit page
$params['useTabsOnView'] = $gSettings->useTabsOnView();
if($params['useTabsOnView'])
	$params['arrViewTabs'] = $gSettings->getViewTabs();
$pageObject = new ViewPage($params);

// SearchClause class stuff
$pageObject->searchClauseObj->parseRequest();
$_SESSION[$strTableName.'_advsearch'] = serialize($pageObject->searchClauseObj);

// proccess big google maps

// add button events if exist
$pageObject->addButtonHandlers();

//For show detail tables on master page view
$dpParams = array();
if($pageObject->isShowDetailTables && !isMobile())
{
	$ids = $id;
	$pageObject->jsSettings['tableSettings'][$strTableName]['dpParams'] = array();
}

//	Before Process event
if($eventObj->exists("BeforeProcessView"))
	$eventObj->BeforeProcessView($conn, $pageObject);
	
//	read current values from the database
$data = $pageObject->getCurrentRecordInternal();

if (!sizeof($data)) {
	header("Location: Movies_list.php?a=return");
	exit();
}

$out = "";
$first = true;
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

$mainTableOwnerID = $pageObject->pSet->getTableOwnerIdField();
$ownerIdValue="";

$pageObject->setGoogleMapsParams($fieldsArr);

while($data)
{
	$xt->assign("show_key1", htmlspecialchars($pageObject->showDBValue("idMovie", $data)));

	$keylink="";
	$keylink.="&key1=".htmlspecialchars(rawurlencode(@$data["idMovie"]));

////////////////////////////////////////////
//idMovie - 
	
	$value = $pageObject->showDBValue("idMovie", $data, $keylink);
	if($mainTableOwnerID=="idMovie")
		$ownerIdValue=$value;
	$xt->assign("idMovie_value",$value);
	if(!$pageObject->isAppearOnTabs("idMovie"))
		$xt->assign("idMovie_fieldblock",true);
	else
		$xt->assign("idMovie_tabfieldblock",true);
////////////////////////////////////////////
//idFile - 
	
	$value = $pageObject->showDBValue("idFile", $data, $keylink);
	if($mainTableOwnerID=="idFile")
		$ownerIdValue=$value;
	$xt->assign("idFile_value",$value);
	if(!$pageObject->isAppearOnTabs("idFile"))
		$xt->assign("idFile_fieldblock",true);
	else
		$xt->assign("idFile_tabfieldblock",true);
////////////////////////////////////////////
//c00 - 
	
	$value = $pageObject->showDBValue("c00", $data, $keylink);
	if($mainTableOwnerID=="c00")
		$ownerIdValue=$value;
	$xt->assign("c00_value",$value);
	if(!$pageObject->isAppearOnTabs("c00"))
		$xt->assign("c00_fieldblock",true);
	else
		$xt->assign("c00_tabfieldblock",true);
////////////////////////////////////////////
//c01 - 
	
	$value = $pageObject->showDBValue("c01", $data, $keylink);
	if($mainTableOwnerID=="c01")
		$ownerIdValue=$value;
	$xt->assign("c01_value",$value);
	if(!$pageObject->isAppearOnTabs("c01"))
		$xt->assign("c01_fieldblock",true);
	else
		$xt->assign("c01_tabfieldblock",true);
////////////////////////////////////////////
//c02 - 
	
	$value = $pageObject->showDBValue("c02", $data, $keylink);
	if($mainTableOwnerID=="c02")
		$ownerIdValue=$value;
	$xt->assign("c02_value",$value);
	if(!$pageObject->isAppearOnTabs("c02"))
		$xt->assign("c02_fieldblock",true);
	else
		$xt->assign("c02_tabfieldblock",true);
////////////////////////////////////////////
//c03 - 
	
	$value = $pageObject->showDBValue("c03", $data, $keylink);
	if($mainTableOwnerID=="c03")
		$ownerIdValue=$value;
	$xt->assign("c03_value",$value);
	if(!$pageObject->isAppearOnTabs("c03"))
		$xt->assign("c03_fieldblock",true);
	else
		$xt->assign("c03_tabfieldblock",true);
////////////////////////////////////////////
//c04 - 
	
	$value = $pageObject->showDBValue("c04", $data, $keylink);
	if($mainTableOwnerID=="c04")
		$ownerIdValue=$value;
	$xt->assign("c04_value",$value);
	if(!$pageObject->isAppearOnTabs("c04"))
		$xt->assign("c04_fieldblock",true);
	else
		$xt->assign("c04_tabfieldblock",true);
////////////////////////////////////////////
//c05 - 
	
	$value = $pageObject->showDBValue("c05", $data, $keylink);
	if($mainTableOwnerID=="c05")
		$ownerIdValue=$value;
	$xt->assign("c05_value",$value);
	if(!$pageObject->isAppearOnTabs("c05"))
		$xt->assign("c05_fieldblock",true);
	else
		$xt->assign("c05_tabfieldblock",true);
////////////////////////////////////////////
//c06 - 
	
	$value = $pageObject->showDBValue("c06", $data, $keylink);
	if($mainTableOwnerID=="c06")
		$ownerIdValue=$value;
	$xt->assign("c06_value",$value);
	if(!$pageObject->isAppearOnTabs("c06"))
		$xt->assign("c06_fieldblock",true);
	else
		$xt->assign("c06_tabfieldblock",true);
////////////////////////////////////////////
//c07 - 
	
	$value = $pageObject->showDBValue("c07", $data, $keylink);
	if($mainTableOwnerID=="c07")
		$ownerIdValue=$value;
	$xt->assign("c07_value",$value);
	if(!$pageObject->isAppearOnTabs("c07"))
		$xt->assign("c07_fieldblock",true);
	else
		$xt->assign("c07_tabfieldblock",true);
////////////////////////////////////////////
//c08 - 
	
	$value = $pageObject->showDBValue("c08", $data, $keylink);
	if($mainTableOwnerID=="c08")
		$ownerIdValue=$value;
	$xt->assign("c08_value",$value);
	if(!$pageObject->isAppearOnTabs("c08"))
		$xt->assign("c08_fieldblock",true);
	else
		$xt->assign("c08_tabfieldblock",true);
////////////////////////////////////////////
//c09 - 
	
	$value = $pageObject->showDBValue("c09", $data, $keylink);
	if($mainTableOwnerID=="c09")
		$ownerIdValue=$value;
	$xt->assign("c09_value",$value);
	if(!$pageObject->isAppearOnTabs("c09"))
		$xt->assign("c09_fieldblock",true);
	else
		$xt->assign("c09_tabfieldblock",true);
////////////////////////////////////////////
//c10 - 
	
	$value = $pageObject->showDBValue("c10", $data, $keylink);
	if($mainTableOwnerID=="c10")
		$ownerIdValue=$value;
	$xt->assign("c10_value",$value);
	if(!$pageObject->isAppearOnTabs("c10"))
		$xt->assign("c10_fieldblock",true);
	else
		$xt->assign("c10_tabfieldblock",true);
////////////////////////////////////////////
//c11 - 
	
	$value = $pageObject->showDBValue("c11", $data, $keylink);
	if($mainTableOwnerID=="c11")
		$ownerIdValue=$value;
	$xt->assign("c11_value",$value);
	if(!$pageObject->isAppearOnTabs("c11"))
		$xt->assign("c11_fieldblock",true);
	else
		$xt->assign("c11_tabfieldblock",true);
////////////////////////////////////////////
//c12 - 
	
	$value = $pageObject->showDBValue("c12", $data, $keylink);
	if($mainTableOwnerID=="c12")
		$ownerIdValue=$value;
	$xt->assign("c12_value",$value);
	if(!$pageObject->isAppearOnTabs("c12"))
		$xt->assign("c12_fieldblock",true);
	else
		$xt->assign("c12_tabfieldblock",true);
////////////////////////////////////////////
//c13 - 
	
	$value = $pageObject->showDBValue("c13", $data, $keylink);
	if($mainTableOwnerID=="c13")
		$ownerIdValue=$value;
	$xt->assign("c13_value",$value);
	if(!$pageObject->isAppearOnTabs("c13"))
		$xt->assign("c13_fieldblock",true);
	else
		$xt->assign("c13_tabfieldblock",true);
////////////////////////////////////////////
//c14 - 
	
	$value = $pageObject->showDBValue("c14", $data, $keylink);
	if($mainTableOwnerID=="c14")
		$ownerIdValue=$value;
	$xt->assign("c14_value",$value);
	if(!$pageObject->isAppearOnTabs("c14"))
		$xt->assign("c14_fieldblock",true);
	else
		$xt->assign("c14_tabfieldblock",true);
////////////////////////////////////////////
//c15 - 
	
	$value = $pageObject->showDBValue("c15", $data, $keylink);
	if($mainTableOwnerID=="c15")
		$ownerIdValue=$value;
	$xt->assign("c15_value",$value);
	if(!$pageObject->isAppearOnTabs("c15"))
		$xt->assign("c15_fieldblock",true);
	else
		$xt->assign("c15_tabfieldblock",true);
////////////////////////////////////////////
//c16 - 
	
	$value = $pageObject->showDBValue("c16", $data, $keylink);
	if($mainTableOwnerID=="c16")
		$ownerIdValue=$value;
	$xt->assign("c16_value",$value);
	if(!$pageObject->isAppearOnTabs("c16"))
		$xt->assign("c16_fieldblock",true);
	else
		$xt->assign("c16_tabfieldblock",true);
////////////////////////////////////////////
//c18 - 
	
	$value = $pageObject->showDBValue("c18", $data, $keylink);
	if($mainTableOwnerID=="c18")
		$ownerIdValue=$value;
	$xt->assign("c18_value",$value);
	if(!$pageObject->isAppearOnTabs("c18"))
		$xt->assign("c18_fieldblock",true);
	else
		$xt->assign("c18_tabfieldblock",true);
////////////////////////////////////////////
//c19 - 
	
	$value = $pageObject->showDBValue("c19", $data, $keylink);
	if($mainTableOwnerID=="c19")
		$ownerIdValue=$value;
	$xt->assign("c19_value",$value);
	if(!$pageObject->isAppearOnTabs("c19"))
		$xt->assign("c19_fieldblock",true);
	else
		$xt->assign("c19_tabfieldblock",true);
////////////////////////////////////////////
//c20 - 
	
	$value = $pageObject->showDBValue("c20", $data, $keylink);
	if($mainTableOwnerID=="c20")
		$ownerIdValue=$value;
	$xt->assign("c20_value",$value);
	if(!$pageObject->isAppearOnTabs("c20"))
		$xt->assign("c20_fieldblock",true);
	else
		$xt->assign("c20_tabfieldblock",true);
////////////////////////////////////////////
//c21 - 
	
	$value = $pageObject->showDBValue("c21", $data, $keylink);
	if($mainTableOwnerID=="c21")
		$ownerIdValue=$value;
	$xt->assign("c21_value",$value);
	if(!$pageObject->isAppearOnTabs("c21"))
		$xt->assign("c21_fieldblock",true);
	else
		$xt->assign("c21_tabfieldblock",true);
////////////////////////////////////////////
//c22 - 
	
	$value = $pageObject->showDBValue("c22", $data, $keylink);
	if($mainTableOwnerID=="c22")
		$ownerIdValue=$value;
	$xt->assign("c22_value",$value);
	if(!$pageObject->isAppearOnTabs("c22"))
		$xt->assign("c22_fieldblock",true);
	else
		$xt->assign("c22_tabfieldblock",true);
////////////////////////////////////////////
//c23 - 
	
	$value = $pageObject->showDBValue("c23", $data, $keylink);
	if($mainTableOwnerID=="c23")
		$ownerIdValue=$value;
	$xt->assign("c23_value",$value);
	if(!$pageObject->isAppearOnTabs("c23"))
		$xt->assign("c23_fieldblock",true);
	else
		$xt->assign("c23_tabfieldblock",true);
////////////////////////////////////////////
//idSet - 
	
	$value = $pageObject->showDBValue("idSet", $data, $keylink);
	if($mainTableOwnerID=="idSet")
		$ownerIdValue=$value;
	$xt->assign("idSet_value",$value);
	if(!$pageObject->isAppearOnTabs("idSet"))
		$xt->assign("idSet_fieldblock",true);
	else
		$xt->assign("idSet_tabfieldblock",true);

/////////////////////////////////////////////////////////////
if($pageObject->isShowDetailTables && !isMobile())
{
	if(count($dpParams['ids']))
	{
		$xt->assign("detail_tables",true);
		include('classes/listpage.php');
		include('classes/listpage_embed.php');
		include('classes/listpage_dpinline.php');
	}
	
	$dControlsMap = array();
	$dViewControlsMap = array();
	
	for($d=0;$d<count($dpParams['ids']);$d++)
	{
		$options = array();
		//array of params for classes
		$options["mode"] = LIST_DETAILS;
		$options["pageType"] = PAGE_LIST;
		$options["masterPageType"] = PAGE_VIEW;
		$options["mainMasterPageType"] = PAGE_VIEW;
		$options['masterTable'] = "Movies";
		$options['firstTime'] = 1;
		
		$strTableName = $dpParams['strTableNames'][$d];
		include_once("include/".GetTableURL($strTableName)."_settings.php");
		if(!CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search"))
		{
			$strTableName = "Movies";
			continue;
		}
		
		$layout = GetPageLayout(GoodFieldName($strTableName), PAGE_LIST);
		if($layout)
		{
			$rtl = $xt->getReadingOrder() == 'RTL' ? 'RTL' : '';
			$xt->cssFiles[] = array("stylepath" => "styles/".$layout->style.'/style'.$rtl.".css"
				, "pagestylepath" => "pagestyles/".$layout->name.$rtl.".css");
			$xt->IEcssFiles[] = array("stylepathIE" => "styles/".$layout->style.'/styleIE'.".css");
		}
		
		$options['xt'] = new Xtempl();
		$options['id'] = $dpParams['ids'][$d];
		$options['flyId'] = $pageObject->genId()+1;
		$mkr = 1;
		foreach($mKeys[$strTableName] as $mk)
			$options['masterKeysReq'][$mkr++] = $data[$mk];

		$listPageObject = ListPage::createListPage($strTableName, $options);
		
		// prepare code
		$listPageObject->prepareForBuildPage();
		
		// show page
		if($listPageObject->permis[$strTableName]['search'] && $listPageObject->rowsFound)
		{
			//set page events
			foreach($listPageObject->eventsObject->events as $event => $name)
				$listPageObject->xt->assign_event($event, $listPageObject->eventsObject, $event, array());
			
			//add detail settings to master settings
			$listPageObject->addControlsJSAndCSS();
			$listPageObject->fillSetCntrlMaps();
			$pageObject->jsSettings['tableSettings'][$strTableName]	= $listPageObject->jsSettings['tableSettings'][$strTableName];
			$dControlsMap[$strTableName] = $listPageObject->controlsMap;
			$dViewControlsMap[$strTableName] = $listPageObject->viewControlsMap;
			foreach($listPageObject->jsSettings['global']['shortTNames'] as $keySet=>$val)
			{
				if(!array_key_exists($keySet,$pageObject->settingsMap["globalSettings"]['shortTNames']))
					$pageObject->settingsMap["globalSettings"]['shortTNames'][$keySet] = $val;
			}
			
			//Add detail's js files to master's files
			$pageObject->copyAllJSFiles($listPageObject->grabAllJSFiles());
			
			//Add detail's css files to master's files
			$pageObject->copyAllCSSFiles($listPageObject->grabAllCSSFiles());
		
			$xtParams = array("method"=>'showPage', "params"=> false);
			$xtParams['object'] = $listPageObject;
			$xt->assign("displayDetailTable_".GoodFieldName($listPageObject->tName), $xtParams);
		
			$pageObject->controlsMap['dpTablesParams'][] = array('tName'=>$strTableName, 'id'=>$options['id']);
		}
	}
	$pageObject->controlsMap['dControlsMap'] = $dControlsMap;
	$pageObject->viewControlsMap['dViewControlsMap'] = $dViewControlsMap; 
	$strTableName = "Movies";
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Begin prepare for Next Prev button
if(!@$_SESSION[$strTableName."_noNextPrev"] && !$inlineview && !$pdf)
{
	$pageObject->getNextPrevRecordKeys($data,"Search",$next,$prev);
}
//End prepare for Next Prev button
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


if ($pageObject->googleMapCfg['isUseGoogleMap'])
{
	$pageObject->initGmaps();
}

$pageObject->addCommonJs();

//fill tab groups name and sections name to controls
$pageObject->fillCntrlTabGroups();

if(!$inlineview)
{
	$pageObject->body["begin"].="<script type=\"text/javascript\" src=\"include/loadfirst.js\"></script>\r\n";
		$pageObject->body["begin"].= "<script type=\"text/javascript\" src=\"include/lang/".getLangFileName(mlang_getcurrentlang()).".js\"></script>";		
	
	$pageObject->jsSettings['tableSettings'][$strTableName]["keys"] = $pageObject->jsKeys;
	$pageObject->jsSettings['tableSettings'][$strTableName]['keyFields'] = $pageObject->keyFields;
	$pageObject->jsSettings['tableSettings'][$strTableName]["prevKeys"] = $prev;
	$pageObject->jsSettings['tableSettings'][$strTableName]["nextKeys"] = $next; 
	
	// assign body end
	$pageObject->body['end'] = array();
	$pageObject->body['end']["method"] = "assignBodyEnd";
	$pageObject->body['end']["object"] = &$pageObject;
	
	$xt->assign("body",$pageObject->body);
	$xt->assign("flybody",true);
}
else
{
	$xt->assign("footer",false);
	$xt->assign("header",false);
	$xt->assign("flybody",$pageObject->body);
	$xt->assign("body",true);
	$xt->assign("pdflink_block",false);
	
	$pageObject->fillSetCntrlMaps();
	
	$returnJSON['controlsMap'] = $pageObject->controlsHTMLMap;
	$returnJSON['viewControlsMap'] = $pageObject->viewControlsHTMLMap;
	$returnJSON['settings'] = $pageObject->jsSettings;
}
$xt->assign("style_block",true);
$xt->assign("stylefiles_block",true);

$editlink="";
$editkeys=array();
	$editkeys["editid1"]=postvalue("editid1");
foreach($editkeys as $key=>$val)
{
	if($editlink)
		$editlink.="&";
	$editlink.=$key."=".$val;
}
$xt->assign("editlink_attrs","id=\"editLink".$id."\" name=\"editLink".$id."\" onclick=\"window.location.href='Movies_edit.php?".$editlink."'\"");

$strPerm = GetUserPermissions($strTableName);
if(CheckSecurity($ownerIdValue,"Edit") && !$inlineview && strpos($strPerm, "E")!==false)
	$xt->assign("edit_button",true);
else
	$xt->assign("edit_button",false);

if(!$pdf && !$all && !$inlineview)
{
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Begin show Next Prev button
	$nextlink=$prevlink="";
	if(count($next))
	{
		$xt->assign("next_button",true);
	 		$nextlink .="editid1=".htmlspecialchars(rawurlencode($next[1-1]));
		$xt->assign("nextbutton_attrs","id=\"nextButton".$id."\"");
	}
	else 
		$xt->assign("next_button",false);
	if(count($prev))
	{
		$xt->assign("prev_button",true);
			$prevlink .="editid1=".htmlspecialchars(rawurlencode($prev[1-1]));
		$xt->assign("prevbutton_attrs","id=\"prevButton".$id."\"");
	}
	else 
		$xt->assign("prev_button",false);
//End show Next Prev button
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	$xt->assign("back_button",true);
	$xt->assign("backbutton_attrs","id=\"backButton".$id."\"");
}

$oldtemplatefile = $pageObject->templatefile;

if(!$all)
{
	if($eventObj->exists("BeforeShowView"))
	{
		$templatefile = $pageObject->templatefile;
		$eventObj->BeforeShowView($xt,$templatefile,$data, $pageObject);
		$pageObject->templatefile = $templatefile;
	}
	if(!$pdf)
	{
		if(!$inlineview)
			$xt->display($pageObject->templatefile);
		else{
				$xt->load_template($pageObject->templatefile);
				$returnJSON['html'] = $xt->fetch_loaded('style_block').$xt->fetch_loaded('body');
				if(count($pageObject->includes_css))
					$returnJSON['CSSFiles'] = array_unique($pageObject->includes_css);
				if(count($pageObject->includes_cssIE))
					$returnJSON['CSSFilesIE'] = array_unique($pageObject->includes_cssIE);				
				$returnJSON['idStartFrom'] = $id+1;
				$returnJSON["additionalJS"] = $pageObject->grabAllJsFiles();
				echo (my_json_encode($returnJSON)); 
			}
	}
	break;
}
}


?>
