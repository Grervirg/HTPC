<?php 
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

include("include/dbcommon.php");
include("include/Movies_variables.php");
include('include/xtempl.php');
include('classes/editpage.php');
include("classes/searchclause.php");

add_nocache_headers();

global $globalEvents;

//	check if logged in
if(!isLogged() || CheckPermissionsEvent($strTableName, 'E') && !CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Edit"))
{ 
	$_SESSION["MyURL"]=$_SERVER["SCRIPT_NAME"]."?".$_SERVER["QUERY_STRING"];
	header("Location: login.php?message=expired");
	return;
}

$layout = new TLayout("edit2","FancyBlueWave","MobileBlueWave");
$layout->blocks["top"] = array();
$layout->containers["edit"] = array();

$layout->containers["edit"][] = array("name"=>"editheader","block"=>"","substyle"=>2);


$layout->containers["edit"][] = array("name"=>"message","block"=>"message_block","substyle"=>1);


$layout->containers["edit"][] = array("name"=>"wrapper","block"=>"","substyle"=>1, "container"=>"fields");


$layout->containers["fields"] = array();

$layout->containers["fields"][] = array("name"=>"editfields","block"=>"","substyle"=>1);


$layout->containers["fields"][] = array("name"=>"legend","block"=>"legend","substyle"=>3);


$layout->containers["fields"][] = array("name"=>"editbuttons","block"=>"","substyle"=>2);


$layout->skins["fields"] = "fields";

$layout->skins["edit"] = "1";
$layout->blocks["top"][] = "edit";
$layout->skins["details"] = "empty";
$layout->blocks["top"][] = "details";$page_layouts["Movies_edit"] = $layout;




if ((sizeof($_POST)==0) && (postvalue('ferror')) && (!postvalue("editid1"))){
	$returnJSON['success'] = false;
	$returnJSON['message'] = "Error occurred";
	$returnJSON['fatalError'] = true;
	echo "<textarea>".htmlspecialchars(my_json_encode($returnJSON))."</textarea>";
	exit();
}
else if ((sizeof($_POST)==0) && (postvalue('ferror')) && (postvalue("editid1"))){
	if (postvalue('fly')){
		echo -1;
		exit();
	}
	else {
		$_SESSION["message_edit"] = "<< "."Error occurred"." >>";
	}
}
/////////////////////////////////////////////////////////////
//init variables
/////////////////////////////////////////////////////////////
if(postvalue("editType")=="inline")
	$inlineedit = EDIT_INLINE;
elseif(postvalue("editType")==EDIT_POPUP)
	$inlineedit = EDIT_POPUP;
else
	$inlineedit = EDIT_SIMPLE;

$id = postvalue("id");
if(intval($id)==0)
	$id = 1;

$flyId = $id+1;
$xt = new Xtempl();

// assign an id
$xt->assign("id",$id);

$templatefile = ($inlineedit == EDIT_INLINE) ? "Movies_inline_edit.htm" : "Movies_edit.htm";

//array of params for classes
$params = array("pageType" => PAGE_EDIT,"id" => $id);


$params['tName'] = $strTableName;
$params['xt'] = &$xt;
$params['mode'] = $inlineedit;
$params['includes_js'] = $includes_js;
$params['includes_jsreq'] = $includes_jsreq;
$params['includes_css'] = $includes_css;
$params['locale_info'] = $locale_info;
$params['templatefile'] = $templatefile;
$params['pageEditLikeInline'] = ($inlineedit == EDIT_INLINE);
//Get array of tabs for edit page
$params['useTabsOnEdit'] = $gSettings->useTabsOnEdit();
if($params['useTabsOnEdit'])
	$params['arrEditTabs'] = $gSettings->getEditTabs();

$pageObject = new EditPage($params);

//	For ajax request 
if($_REQUEST["action"]!="")
{
	if($pageObject->lockingObj)
	{
		$arrkeys = explode("&",refine($_REQUEST["keys"]));
		foreach($arrkeys as $ind=>$val)
			$arrkeys[$ind]=urldecode($val);
		
		if($_REQUEST["action"]=="unlock")
		{
			$pageObject->lockingObj->UnlockRecord($strTableName,$arrkeys,$_REQUEST["sid"]);
			exit();	
		}
		else if($_REQUEST["action"]=="lockadmin" && (IsAdmin() || $_SESSION["AccessLevel"] == ACCESS_LEVEL_ADMINGROUP))
		{
			$pageObject->lockingObj->UnlockAdmin($strTableName,$arrkeys,$_REQUEST["startEdit"]=="yes");
			if($_REQUEST["startEdit"]=="no")
				echo "unlock";
			else if($_REQUEST["startEdit"]=="yes")
				echo "lock";
			exit();	
		}
		else if($_REQUEST["action"]=="confirm")
		{
			if(!$pageObject->lockingObj->ConfirmLock($strTableName,$arrkeys,$message));
				echo $message;
			exit();	
		}
	}
	else
		exit();
}

$filename = $status = $message = $mesClass = $usermessage = $strWhereClause = $bodyonload = "";
$showValues = $showRawValues = $showFields = $showDetailKeys = $key = $next = $prev = array();
$HaveData = $enableCtrlsForEditing = true;
$error_happened = $readevalues = $IsSaved = false;

$auditObj = GetAuditObject($strTableName);

// SearchClause class stuff
$pageObject->searchClauseObj->parseRequest();
$_SESSION[$strTableName.'_advsearch'] = serialize($pageObject->searchClauseObj);

//Get detail table keys	
$detailKeys = $pageObject->detailKeysByM;


if($pageObject->lockingObj)
{
	$system_attrs = "style='display:none;'";
	$system_message = "";
}

if ($inlineedit!=EDIT_INLINE)
{
	// add button events if exist
	$pageObject->addButtonHandlers();
}

$url_page = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1,12);

//	Before Process event
if($eventObj->exists("BeforeProcessEdit"))
	$eventObj->BeforeProcessEdit($conn, $pageObject);

$keys = array();
$skeys = "";
$savedKeys = array();
$keys["idMovie"] = urldecode(postvalue("editid1"));
$savedKeys["idMovie"] = urldecode(postvalue("editid1"));
$skeys.= rawurlencode(postvalue("editid1"))."&";

$pageObject->setKeys($keys);

if($skeys!="")
	$skeys = substr($skeys,0,-1);

//For show detail tables on master page edit
if($inlineedit!=EDIT_INLINE)
{
	$dpParams = array();
	if($pageObject->isShowDetailTables && !isMobile())
	{
		$ids = $id;
		$pageObject->jsSettings['tableSettings'][$strTableName]['dpParams'] = array('tableNames'=>$dpParams['strTableNames'], 'ids'=>$dpParams['ids']);
	}
}
/////////////////////////////////////////////////////////////
//	process entered data, read and save
/////////////////////////////////////////////////////////////

// proccess captcha
if ($inlineedit!=EDIT_INLINE)
	if($pageObject->captchaExists())
		$pageObject->doCaptchaCode();

if(@$_POST["a"] == "edited")
{
	$strWhereClause = whereAdd($strWhereClause,KeyWhere($keys));
		$oldValuesRead = false;	
	if($eventObj->exists("AfterEdit") || $eventObj->exists("BeforeEdit") || $auditObj || isTableGeoUpdatable($pageObject->cipherer->pSet)
		|| $globalEvents->exists("IsRecordEditable", $strTableName))
	{
		//	read old values
		$rsold = db_query($gQuery->gSQLWhere($strWhereClause), $conn);
		$dataold = $pageObject->cipherer->DecryptFetchedArray($rsold);
		$oldValuesRead = true;
	}
	if($globalEvents->exists("IsRecordEditable", $strTableName))
	{
		if(!$globalEvents->IsRecordEditable($dataold, true, $strTableName))
			return SecurityRedirect($inlineedit);
	}
	$evalues = $efilename_values = $blobfields = array();
	

//	processing idMovie - begin
	$condition = 1;

	if($condition)
	{
		$control_idMovie = $pageObject->getControl("idMovie", $id);
		$control_idMovie->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		//	update key value
		if($control_idMovie->getWebValue()!==false)
			$keys["idMovie"] = $control_idMovie->getWebValue();
	}
//	processing idMovie - end
//	processing idFile - begin
	$condition = 1;

	if($condition)
	{
		$control_idFile = $pageObject->getControl("idFile", $id);
		$control_idFile->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing idFile - end
//	processing c00 - begin
	$condition = 1;

	if($condition)
	{
		$control_c00 = $pageObject->getControl("c00", $id);
		$control_c00->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing c00 - end
//	processing c01 - begin
	$condition = 1;

	if($condition)
	{
		$control_c01 = $pageObject->getControl("c01", $id);
		$control_c01->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing c01 - end
//	processing c02 - begin
	$condition = 1;

	if($condition)
	{
		$control_c02 = $pageObject->getControl("c02", $id);
		$control_c02->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing c02 - end
//	processing c03 - begin
	$condition = 1;

	if($condition)
	{
		$control_c03 = $pageObject->getControl("c03", $id);
		$control_c03->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing c03 - end
//	processing c04 - begin
	$condition = 1;

	if($condition)
	{
		$control_c04 = $pageObject->getControl("c04", $id);
		$control_c04->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing c04 - end
//	processing c05 - begin
	$condition = 1;

	if($condition)
	{
		$control_c05 = $pageObject->getControl("c05", $id);
		$control_c05->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing c05 - end
//	processing c06 - begin
	$condition = 1;

	if($condition)
	{
		$control_c06 = $pageObject->getControl("c06", $id);
		$control_c06->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing c06 - end
//	processing c07 - begin
	$condition = 1;

	if($condition)
	{
		$control_c07 = $pageObject->getControl("c07", $id);
		$control_c07->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing c07 - end
//	processing c08 - begin
	$condition = 1;

	if($condition)
	{
		$control_c08 = $pageObject->getControl("c08", $id);
		$control_c08->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing c08 - end
//	processing c09 - begin
	$condition = 1;

	if($condition)
	{
		$control_c09 = $pageObject->getControl("c09", $id);
		$control_c09->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing c09 - end
//	processing c10 - begin
	$condition = 1;

	if($condition)
	{
		$control_c10 = $pageObject->getControl("c10", $id);
		$control_c10->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing c10 - end
//	processing c11 - begin
	$condition = 1;

	if($condition)
	{
		$control_c11 = $pageObject->getControl("c11", $id);
		$control_c11->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing c11 - end
//	processing c12 - begin
	$condition = 1;

	if($condition)
	{
		$control_c12 = $pageObject->getControl("c12", $id);
		$control_c12->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing c12 - end
//	processing c13 - begin
	$condition = 1;

	if($condition)
	{
		$control_c13 = $pageObject->getControl("c13", $id);
		$control_c13->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing c13 - end
//	processing c14 - begin
	$condition = 1;

	if($condition)
	{
		$control_c14 = $pageObject->getControl("c14", $id);
		$control_c14->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing c14 - end
//	processing c15 - begin
	$condition = 1;

	if($condition)
	{
		$control_c15 = $pageObject->getControl("c15", $id);
		$control_c15->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing c15 - end
//	processing c16 - begin
	$condition = 1;

	if($condition)
	{
		$control_c16 = $pageObject->getControl("c16", $id);
		$control_c16->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing c16 - end
//	processing c18 - begin
	$condition = 1;

	if($condition)
	{
		$control_c18 = $pageObject->getControl("c18", $id);
		$control_c18->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing c18 - end
//	processing c19 - begin
	$condition = 1;

	if($condition)
	{
		$control_c19 = $pageObject->getControl("c19", $id);
		$control_c19->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing c19 - end
//	processing c20 - begin
	$condition = 1;

	if($condition)
	{
		$control_c20 = $pageObject->getControl("c20", $id);
		$control_c20->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing c20 - end
//	processing c21 - begin
	$condition = 1;

	if($condition)
	{
		$control_c21 = $pageObject->getControl("c21", $id);
		$control_c21->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing c21 - end
//	processing c22 - begin
	$condition = 1;

	if($condition)
	{
		$control_c22 = $pageObject->getControl("c22", $id);
		$control_c22->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing c22 - end
//	processing c23 - begin
	$condition = 1;

	if($condition)
	{
		$control_c23 = $pageObject->getControl("c23", $id);
		$control_c23->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing c23 - end
//	processing idSet - begin
	$condition = 1;

	if($condition)
	{
		$control_idSet = $pageObject->getControl("idSet", $id);
		$control_idSet->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing idSet - end
//	processing strFilename - begin
	$condition = 1;

	if($condition)
	{
		$control_strFilename = $pageObject->getControl("strFilename", $id);
		$control_strFilename->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing strFilename - end
//	processing idPath - begin
	$condition = 1;

	if($condition)
	{
		$control_idPath = $pageObject->getControl("idPath", $id);
		$control_idPath->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing idPath - end
//	processing dateAdded - begin
	$condition = 1;

	if($condition)
	{
		$control_dateAdded = $pageObject->getControl("dateAdded", $id);
		$control_dateAdded->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing dateAdded - end
//	processing strPath - begin
	$condition = 1;

	if($condition)
	{
		$control_strPath = $pageObject->getControl("strPath", $id);
		$control_strPath->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing strPath - end
//	processing strGenre - begin
	$condition = 1;

	if($condition)
	{
		$control_strGenre = $pageObject->getControl("strGenre", $id);
		$control_strGenre->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing strGenre - end
//	processing idGenre - begin
	$condition = 1;

	if($condition)
	{
		$control_idGenre = $pageObject->getControl("idGenre", $id);
		$control_idGenre->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing idGenre - end
//	processing strSet - begin
	$condition = 1;

	if($condition)
	{
		$control_strSet = $pageObject->getControl("strSet", $id);
		$control_strSet->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing strSet - end
//	processing idSet1 - begin
	$condition = 1;

	if($condition)
	{
		$control_idSet1 = $pageObject->getControl("idSet1", $id);
		$control_idSet1->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing idSet1 - end
//	processing strTag - begin
	$condition = 1;

	if($condition)
	{
		$control_strTag = $pageObject->getControl("strTag", $id);
		$control_strTag->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing strTag - end
//	processing idTag - begin
	$condition = 1;

	if($condition)
	{
		$control_idTag = $pageObject->getControl("idTag", $id);
		$control_idTag->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing idTag - end

	foreach($efilename_values as $ekey=>$value)
		$evalues[$ekey] = $value;
		
	if($pageObject->lockingObj)
	{
		$lockmessage = "";
		if(!$pageObject->lockingObj->ConfirmLock($strTableName,$savedKeys,$lockmessage))
		{
			$enableCtrlsForEditing = false;
			$system_attrs = "style='display:block;'";
			if($inlineedit == EDIT_INLINE)
			{
				if(IsAdmin() || $_SESSION["AccessLevel"] == ACCESS_LEVEL_ADMINGROUP)
					$lockmessage = $pageObject->lockingObj->GetLockInfo($strTableName,$savedKeys,false,$id);
				
				$returnJSON['success'] = false;
				$returnJSON['message'] = $lockmessage;
				$returnJSON['enableCtrls'] = $enableCtrlsForEditing;
				$returnJSON['confirmTime'] = $pageObject->lockingObj->ConfirmTime;
				echo "<textarea>".htmlspecialchars(my_json_encode($returnJSON))."</textarea>";
				exit();
			}
			else
			{
				if(IsAdmin() || $_SESSION["AccessLevel"] == ACCESS_LEVEL_ADMINGROUP)
					$system_message = $pageObject->lockingObj->GetLockInfo($strTableName,$savedKeys,true,$id);
				else
					$system_message = $lockmessage;
			}
			$status = "DECLINED";
			$readevalues = true;
		}
	}
	
	if($readevalues==false)
	{
	//	do event
		$retval = true;
		if($eventObj->exists("BeforeEdit"))
			$retval=$eventObj->BeforeEdit($evalues,$strWhereClause,$dataold,$keys,$usermessage,(bool)$inlineedit, $pageObject);
	
		if($retval && $pageObject->isCaptchaOk)
		{		
			if($inlineedit!=EDIT_INLINE)
				$_SESSION[$strTableName."_count_captcha"] = $_SESSION[$strTableName."_count_captcha"]+1;
		
			//set updated lat-lng values for all map fileds with 'UpdateLatLng' ticked	
            if(isTableGeoUpdatable($pageObject->cipherer->pSet)) {			
				setUpdatedLatLng($evalues, $pageObject->cipherer->pSet, $dataold);
			}	
			
			if(DoUpdateRecord($strOriginalTableName,$evalues,$blobfields,$strWhereClause,$id,$pageObject, $pageObject->cipherer))
			{
				$IsSaved = true;

			// Give possibility to all edit controls to clean their data				
			//	processing idMovie - begin
							$condition = 1;
			
				if($condition)
				{
					$control_idMovie->afterSuccessfulSave();
				}
	//	processing idMovie - end
			//	processing idFile - begin
							$condition = 1;
			
				if($condition)
				{
					$control_idFile->afterSuccessfulSave();
				}
	//	processing idFile - end
			//	processing c00 - begin
							$condition = 1;
			
				if($condition)
				{
					$control_c00->afterSuccessfulSave();
				}
	//	processing c00 - end
			//	processing c01 - begin
							$condition = 1;
			
				if($condition)
				{
					$control_c01->afterSuccessfulSave();
				}
	//	processing c01 - end
			//	processing c02 - begin
							$condition = 1;
			
				if($condition)
				{
					$control_c02->afterSuccessfulSave();
				}
	//	processing c02 - end
			//	processing c03 - begin
							$condition = 1;
			
				if($condition)
				{
					$control_c03->afterSuccessfulSave();
				}
	//	processing c03 - end
			//	processing c04 - begin
							$condition = 1;
			
				if($condition)
				{
					$control_c04->afterSuccessfulSave();
				}
	//	processing c04 - end
			//	processing c05 - begin
							$condition = 1;
			
				if($condition)
				{
					$control_c05->afterSuccessfulSave();
				}
	//	processing c05 - end
			//	processing c06 - begin
							$condition = 1;
			
				if($condition)
				{
					$control_c06->afterSuccessfulSave();
				}
	//	processing c06 - end
			//	processing c07 - begin
							$condition = 1;
			
				if($condition)
				{
					$control_c07->afterSuccessfulSave();
				}
	//	processing c07 - end
			//	processing c08 - begin
							$condition = 1;
			
				if($condition)
				{
					$control_c08->afterSuccessfulSave();
				}
	//	processing c08 - end
			//	processing c09 - begin
							$condition = 1;
			
				if($condition)
				{
					$control_c09->afterSuccessfulSave();
				}
	//	processing c09 - end
			//	processing c10 - begin
							$condition = 1;
			
				if($condition)
				{
					$control_c10->afterSuccessfulSave();
				}
	//	processing c10 - end
			//	processing c11 - begin
							$condition = 1;
			
				if($condition)
				{
					$control_c11->afterSuccessfulSave();
				}
	//	processing c11 - end
			//	processing c12 - begin
							$condition = 1;
			
				if($condition)
				{
					$control_c12->afterSuccessfulSave();
				}
	//	processing c12 - end
			//	processing c13 - begin
							$condition = 1;
			
				if($condition)
				{
					$control_c13->afterSuccessfulSave();
				}
	//	processing c13 - end
			//	processing c14 - begin
							$condition = 1;
			
				if($condition)
				{
					$control_c14->afterSuccessfulSave();
				}
	//	processing c14 - end
			//	processing c15 - begin
							$condition = 1;
			
				if($condition)
				{
					$control_c15->afterSuccessfulSave();
				}
	//	processing c15 - end
			//	processing c16 - begin
							$condition = 1;
			
				if($condition)
				{
					$control_c16->afterSuccessfulSave();
				}
	//	processing c16 - end
			//	processing c18 - begin
							$condition = 1;
			
				if($condition)
				{
					$control_c18->afterSuccessfulSave();
				}
	//	processing c18 - end
			//	processing c19 - begin
							$condition = 1;
			
				if($condition)
				{
					$control_c19->afterSuccessfulSave();
				}
	//	processing c19 - end
			//	processing c20 - begin
							$condition = 1;
			
				if($condition)
				{
					$control_c20->afterSuccessfulSave();
				}
	//	processing c20 - end
			//	processing c21 - begin
							$condition = 1;
			
				if($condition)
				{
					$control_c21->afterSuccessfulSave();
				}
	//	processing c21 - end
			//	processing c22 - begin
							$condition = 1;
			
				if($condition)
				{
					$control_c22->afterSuccessfulSave();
				}
	//	processing c22 - end
			//	processing c23 - begin
							$condition = 1;
			
				if($condition)
				{
					$control_c23->afterSuccessfulSave();
				}
	//	processing c23 - end
			//	processing idSet - begin
							$condition = 1;
			
				if($condition)
				{
					$control_idSet->afterSuccessfulSave();
				}
	//	processing idSet - end
			//	processing strFilename - begin
							$condition = 1;
			
				if($condition)
				{
					$control_strFilename->afterSuccessfulSave();
				}
	//	processing strFilename - end
			//	processing idPath - begin
							$condition = 1;
			
				if($condition)
				{
					$control_idPath->afterSuccessfulSave();
				}
	//	processing idPath - end
			//	processing dateAdded - begin
							$condition = 1;
			
				if($condition)
				{
					$control_dateAdded->afterSuccessfulSave();
				}
	//	processing dateAdded - end
			//	processing strPath - begin
							$condition = 1;
			
				if($condition)
				{
					$control_strPath->afterSuccessfulSave();
				}
	//	processing strPath - end
			//	processing strGenre - begin
							$condition = 1;
			
				if($condition)
				{
					$control_strGenre->afterSuccessfulSave();
				}
	//	processing strGenre - end
			//	processing idGenre - begin
							$condition = 1;
			
				if($condition)
				{
					$control_idGenre->afterSuccessfulSave();
				}
	//	processing idGenre - end
			//	processing strSet - begin
							$condition = 1;
			
				if($condition)
				{
					$control_strSet->afterSuccessfulSave();
				}
	//	processing strSet - end
			//	processing idSet1 - begin
							$condition = 1;
			
				if($condition)
				{
					$control_idSet1->afterSuccessfulSave();
				}
	//	processing idSet1 - end
			//	processing strTag - begin
							$condition = 1;
			
				if($condition)
				{
					$control_strTag->afterSuccessfulSave();
				}
	//	processing strTag - end
			//	processing idTag - begin
							$condition = 1;
			
				if($condition)
				{
					$control_idTag->afterSuccessfulSave();
				}
	//	processing idTag - end
				
				//	after edit event
				if($pageObject->lockingObj && $inlineedit == EDIT_INLINE)
					$pageObject->lockingObj->UnlockRecord($strTableName,$savedKeys,"");
				if($auditObj || $eventObj->exists("AfterEdit"))
				{
					foreach($dataold as $idx=>$val)
					{
						if(!array_key_exists($idx,$evalues))
							$evalues[$idx] = $val;
					}
				}

				if($auditObj)
					$auditObj->LogEdit($strTableName,$evalues,$dataold,$keys);
				if($eventObj->exists("AfterEdit"))
					$eventObj->AfterEdit($evalues,KeyWhere($keys),$dataold,$keys,(bool)$inlineedit, $pageObject);
							
				$mesClass = "mes_ok";
			}
			elseif($inlineedit!=EDIT_INLINE)
				$mesClass = "mes_not";	
		}
		else
		{
			$message = $usermessage;
			$readevalues = true;
			$status = "DECLINED";
		}
	}
	if($readevalues)
		$keys = $savedKeys;
}
//else
{
	/////////////////////////
	//Locking recors
	/////////////////////////

	if($pageObject->lockingObj)
	{
		$enableCtrlsForEditing = $pageObject->lockingObj->LockRecord($strTableName,$keys);
		if(!$enableCtrlsForEditing)
		{
			if($inlineedit == EDIT_INLINE)
			{
				if(IsAdmin() || $_SESSION["AccessLevel"] == ACCESS_LEVEL_ADMINGROUP)
					$lockmessage = $pageObject->lockingObj->GetLockInfo($strTableName,$keys,false,$id);
				else
					$lockmessage = $pageObject->lockingObj->LockUser;
				$returnJSON['success'] = false;
				$returnJSON['message'] = $lockmessage;
				$returnJSON['enableCtrls'] = $enableCtrlsForEditing;
				$returnJSON['confirmTime'] = $pageObject->lockingObj->ConfirmTime;
				echo my_json_encode($returnJSON);
				exit();
			}
			
			$system_attrs = "style='display:block;'";
			$system_message = $pageObject->lockingObj->LockUser;
			
			if(IsAdmin() || $_SESSION["AccessLevel"] == ACCESS_LEVEL_ADMINGROUP)
			{
				$rb = $pageObject->lockingObj->GetLockInfo($strTableName,$keys,true,$id);
				if($rb!="")
					$system_message = $rb;
			}
		}
	}
}

if($pageObject->lockingObj && $inlineedit!=EDIT_INLINE)
	$pageObject->body["begin"] .='<div class="runner-locking" '.$system_attrs.'>'.$system_message.'</div>';

if($message)
	$message = "<div class='message ".$mesClass."'>".$message."</div>";

// PRG rule, to avoid POSTDATA resend
if ($IsSaved && no_output_done() && $inlineedit == EDIT_SIMPLE)
{
	// saving message
	$_SESSION["message_edit"] = ($message ? $message : "");
	// key get query
	$keyGetQ = "";
		$keyGetQ.="editid1=".rawurldecode($keys["idMovie"])."&";
	// cut last &
	$keyGetQ = substr($keyGetQ, 0, strlen($keyGetQ)-1);	
	// redirect
	header("Location: Movies_".$pageObject->getPageType().".php?".$keyGetQ);
	// turned on output buffering, so we need to stop script
	exit();
}
// for PRG rule, to avoid POSTDATA resend. Saving mess in session
if ($inlineedit == EDIT_SIMPLE && isset($_SESSION["message_edit"]))
{
	$message = $_SESSION["message_edit"];
	unset($_SESSION["message_edit"]);
}


$pageObject->setKeys($keys);
$pageObject->readEditValues = $readevalues;
if($readevalues)
	$pageObject->editValues = $evalues;

//	read current values from the database
$data = $pageObject->getCurrentRecordInternal();
if(!$data)
{
	if($inlineedit == EDIT_SIMPLE)
	{
		header("Location: Movies_list.php?a=return");
		exit();
	}
	else
		$data = array();
}

if($globalEvents->exists("IsRecordEditable", $strTableName))
{
	if(!$globalEvents->IsRecordEditable($data, true, $strTableName) && $inlineedit != EDIT_INLINE)
	{
		return SecurityRedirect($inlineedit);
	}
}


//global variable use in BuildEditControl function
//	show readonly fields

if($readevalues)
{
	$data["idMovie"] = $evalues["idMovie"];
	$data["idFile"] = $evalues["idFile"];
	$data["c00"] = $evalues["c00"];
	$data["c01"] = $evalues["c01"];
	$data["c02"] = $evalues["c02"];
	$data["c03"] = $evalues["c03"];
	$data["c04"] = $evalues["c04"];
	$data["c05"] = $evalues["c05"];
	$data["c06"] = $evalues["c06"];
	$data["c07"] = $evalues["c07"];
	$data["c08"] = $evalues["c08"];
	$data["c09"] = $evalues["c09"];
	$data["c10"] = $evalues["c10"];
	$data["c11"] = $evalues["c11"];
	$data["c12"] = $evalues["c12"];
	$data["c13"] = $evalues["c13"];
	$data["c14"] = $evalues["c14"];
	$data["c15"] = $evalues["c15"];
	$data["c16"] = $evalues["c16"];
	$data["c18"] = $evalues["c18"];
	$data["c19"] = $evalues["c19"];
	$data["c20"] = $evalues["c20"];
	$data["c21"] = $evalues["c21"];
	$data["c22"] = $evalues["c22"];
	$data["c23"] = $evalues["c23"];
	$data["idSet"] = $evalues["idSet"];
	$data["strFilename"] = $evalues["strFilename"];
	$data["idPath"] = $evalues["idPath"];
	$data["dateAdded"] = $evalues["dateAdded"];
	$data["strPath"] = $evalues["strPath"];
	$data["strGenre"] = $evalues["strGenre"];
	$data["idGenre"] = $evalues["idGenre"];
	$data["strSet"] = $evalues["strSet"];
	$data["idSet1"] = $evalues["idSet1"];
	$data["strTag"] = $evalues["strTag"];
	$data["idTag"] = $evalues["idTag"];
}

/////////////////////////////////////////////////////////////
//	assign values to $xt class, prepare page for displaying
/////////////////////////////////////////////////////////////
//Basic includes js files
$includes = "";
//javascript code
	
if($inlineedit != EDIT_INLINE)
{
	if($inlineedit == EDIT_SIMPLE)
	{
		$includes.= "<script language=\"JavaScript\" src=\"include/loadfirst.js\"></script>\r\n";
				$includes.="<script type=\"text/javascript\" src=\"include/lang/".getLangFileName(mlang_getcurrentlang()).".js\"></script>";
		
		if (!isMobile())
			$includes.= "<div id=\"search_suggest".$id."\"></div>\r\n";
			
		$pageObject->body["begin"].= $includes;
	}	

	if(!$pageObject->isAppearOnTabs("idMovie"))
		$xt->assign("idMovie_fieldblock",true);
	else
		$xt->assign("idMovie_tabfieldblock",true);
	$xt->assign("idMovie_label",true);
	if(isEnableSection508())
		$xt->assign_section("idMovie_label","<label for=\"".GetInputElementId("idMovie", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("idFile"))
		$xt->assign("idFile_fieldblock",true);
	else
		$xt->assign("idFile_tabfieldblock",true);
	$xt->assign("idFile_label",true);
	if(isEnableSection508())
		$xt->assign_section("idFile_label","<label for=\"".GetInputElementId("idFile", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("c00"))
		$xt->assign("c00_fieldblock",true);
	else
		$xt->assign("c00_tabfieldblock",true);
	$xt->assign("c00_label",true);
	if(isEnableSection508())
		$xt->assign_section("c00_label","<label for=\"".GetInputElementId("c00", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("c01"))
		$xt->assign("c01_fieldblock",true);
	else
		$xt->assign("c01_tabfieldblock",true);
	$xt->assign("c01_label",true);
	if(isEnableSection508())
		$xt->assign_section("c01_label","<label for=\"".GetInputElementId("c01", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("c02"))
		$xt->assign("c02_fieldblock",true);
	else
		$xt->assign("c02_tabfieldblock",true);
	$xt->assign("c02_label",true);
	if(isEnableSection508())
		$xt->assign_section("c02_label","<label for=\"".GetInputElementId("c02", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("c03"))
		$xt->assign("c03_fieldblock",true);
	else
		$xt->assign("c03_tabfieldblock",true);
	$xt->assign("c03_label",true);
	if(isEnableSection508())
		$xt->assign_section("c03_label","<label for=\"".GetInputElementId("c03", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("c04"))
		$xt->assign("c04_fieldblock",true);
	else
		$xt->assign("c04_tabfieldblock",true);
	$xt->assign("c04_label",true);
	if(isEnableSection508())
		$xt->assign_section("c04_label","<label for=\"".GetInputElementId("c04", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("c05"))
		$xt->assign("c05_fieldblock",true);
	else
		$xt->assign("c05_tabfieldblock",true);
	$xt->assign("c05_label",true);
	if(isEnableSection508())
		$xt->assign_section("c05_label","<label for=\"".GetInputElementId("c05", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("c06"))
		$xt->assign("c06_fieldblock",true);
	else
		$xt->assign("c06_tabfieldblock",true);
	$xt->assign("c06_label",true);
	if(isEnableSection508())
		$xt->assign_section("c06_label","<label for=\"".GetInputElementId("c06", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("c07"))
		$xt->assign("c07_fieldblock",true);
	else
		$xt->assign("c07_tabfieldblock",true);
	$xt->assign("c07_label",true);
	if(isEnableSection508())
		$xt->assign_section("c07_label","<label for=\"".GetInputElementId("c07", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("c08"))
		$xt->assign("c08_fieldblock",true);
	else
		$xt->assign("c08_tabfieldblock",true);
	$xt->assign("c08_label",true);
	if(isEnableSection508())
		$xt->assign_section("c08_label","<label for=\"".GetInputElementId("c08", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("c09"))
		$xt->assign("c09_fieldblock",true);
	else
		$xt->assign("c09_tabfieldblock",true);
	$xt->assign("c09_label",true);
	if(isEnableSection508())
		$xt->assign_section("c09_label","<label for=\"".GetInputElementId("c09", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("c10"))
		$xt->assign("c10_fieldblock",true);
	else
		$xt->assign("c10_tabfieldblock",true);
	$xt->assign("c10_label",true);
	if(isEnableSection508())
		$xt->assign_section("c10_label","<label for=\"".GetInputElementId("c10", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("c11"))
		$xt->assign("c11_fieldblock",true);
	else
		$xt->assign("c11_tabfieldblock",true);
	$xt->assign("c11_label",true);
	if(isEnableSection508())
		$xt->assign_section("c11_label","<label for=\"".GetInputElementId("c11", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("c12"))
		$xt->assign("c12_fieldblock",true);
	else
		$xt->assign("c12_tabfieldblock",true);
	$xt->assign("c12_label",true);
	if(isEnableSection508())
		$xt->assign_section("c12_label","<label for=\"".GetInputElementId("c12", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("c13"))
		$xt->assign("c13_fieldblock",true);
	else
		$xt->assign("c13_tabfieldblock",true);
	$xt->assign("c13_label",true);
	if(isEnableSection508())
		$xt->assign_section("c13_label","<label for=\"".GetInputElementId("c13", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("c14"))
		$xt->assign("c14_fieldblock",true);
	else
		$xt->assign("c14_tabfieldblock",true);
	$xt->assign("c14_label",true);
	if(isEnableSection508())
		$xt->assign_section("c14_label","<label for=\"".GetInputElementId("c14", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("c15"))
		$xt->assign("c15_fieldblock",true);
	else
		$xt->assign("c15_tabfieldblock",true);
	$xt->assign("c15_label",true);
	if(isEnableSection508())
		$xt->assign_section("c15_label","<label for=\"".GetInputElementId("c15", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("c16"))
		$xt->assign("c16_fieldblock",true);
	else
		$xt->assign("c16_tabfieldblock",true);
	$xt->assign("c16_label",true);
	if(isEnableSection508())
		$xt->assign_section("c16_label","<label for=\"".GetInputElementId("c16", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("c18"))
		$xt->assign("c18_fieldblock",true);
	else
		$xt->assign("c18_tabfieldblock",true);
	$xt->assign("c18_label",true);
	if(isEnableSection508())
		$xt->assign_section("c18_label","<label for=\"".GetInputElementId("c18", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("c19"))
		$xt->assign("c19_fieldblock",true);
	else
		$xt->assign("c19_tabfieldblock",true);
	$xt->assign("c19_label",true);
	if(isEnableSection508())
		$xt->assign_section("c19_label","<label for=\"".GetInputElementId("c19", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("c20"))
		$xt->assign("c20_fieldblock",true);
	else
		$xt->assign("c20_tabfieldblock",true);
	$xt->assign("c20_label",true);
	if(isEnableSection508())
		$xt->assign_section("c20_label","<label for=\"".GetInputElementId("c20", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("c21"))
		$xt->assign("c21_fieldblock",true);
	else
		$xt->assign("c21_tabfieldblock",true);
	$xt->assign("c21_label",true);
	if(isEnableSection508())
		$xt->assign_section("c21_label","<label for=\"".GetInputElementId("c21", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("c22"))
		$xt->assign("c22_fieldblock",true);
	else
		$xt->assign("c22_tabfieldblock",true);
	$xt->assign("c22_label",true);
	if(isEnableSection508())
		$xt->assign_section("c22_label","<label for=\"".GetInputElementId("c22", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("c23"))
		$xt->assign("c23_fieldblock",true);
	else
		$xt->assign("c23_tabfieldblock",true);
	$xt->assign("c23_label",true);
	if(isEnableSection508())
		$xt->assign_section("c23_label","<label for=\"".GetInputElementId("c23", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("idSet"))
		$xt->assign("idSet_fieldblock",true);
	else
		$xt->assign("idSet_tabfieldblock",true);
	$xt->assign("idSet_label",true);
	if(isEnableSection508())
		$xt->assign_section("idSet_label","<label for=\"".GetInputElementId("idSet", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("strFilename"))
		$xt->assign("strFilename_fieldblock",true);
	else
		$xt->assign("strFilename_tabfieldblock",true);
	$xt->assign("strFilename_label",true);
	if(isEnableSection508())
		$xt->assign_section("strFilename_label","<label for=\"".GetInputElementId("strFilename", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("idPath"))
		$xt->assign("idPath_fieldblock",true);
	else
		$xt->assign("idPath_tabfieldblock",true);
	$xt->assign("idPath_label",true);
	if(isEnableSection508())
		$xt->assign_section("idPath_label","<label for=\"".GetInputElementId("idPath", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("dateAdded"))
		$xt->assign("dateAdded_fieldblock",true);
	else
		$xt->assign("dateAdded_tabfieldblock",true);
	$xt->assign("dateAdded_label",true);
	if(isEnableSection508())
		$xt->assign_section("dateAdded_label","<label for=\"".GetInputElementId("dateAdded", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("strPath"))
		$xt->assign("strPath_fieldblock",true);
	else
		$xt->assign("strPath_tabfieldblock",true);
	$xt->assign("strPath_label",true);
	if(isEnableSection508())
		$xt->assign_section("strPath_label","<label for=\"".GetInputElementId("strPath", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("strGenre"))
		$xt->assign("strGenre_fieldblock",true);
	else
		$xt->assign("strGenre_tabfieldblock",true);
	$xt->assign("strGenre_label",true);
	if(isEnableSection508())
		$xt->assign_section("strGenre_label","<label for=\"".GetInputElementId("strGenre", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("idGenre"))
		$xt->assign("idGenre_fieldblock",true);
	else
		$xt->assign("idGenre_tabfieldblock",true);
	$xt->assign("idGenre_label",true);
	if(isEnableSection508())
		$xt->assign_section("idGenre_label","<label for=\"".GetInputElementId("idGenre", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("strSet"))
		$xt->assign("strSet_fieldblock",true);
	else
		$xt->assign("strSet_tabfieldblock",true);
	$xt->assign("strSet_label",true);
	if(isEnableSection508())
		$xt->assign_section("strSet_label","<label for=\"".GetInputElementId("strSet", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("idSet1"))
		$xt->assign("idSet1_fieldblock",true);
	else
		$xt->assign("idSet1_tabfieldblock",true);
	$xt->assign("idSet1_label",true);
	if(isEnableSection508())
		$xt->assign_section("idSet1_label","<label for=\"".GetInputElementId("idSet1", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("strTag"))
		$xt->assign("strTag_fieldblock",true);
	else
		$xt->assign("strTag_tabfieldblock",true);
	$xt->assign("strTag_label",true);
	if(isEnableSection508())
		$xt->assign_section("strTag_label","<label for=\"".GetInputElementId("strTag", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("idTag"))
		$xt->assign("idTag_fieldblock",true);
	else
		$xt->assign("idTag_tabfieldblock",true);
	$xt->assign("idTag_label",true);
	if(isEnableSection508())
		$xt->assign_section("idTag_label","<label for=\"".GetInputElementId("idTag", $id, PAGE_EDIT)."\">","</label>");
		

	$xt->assign("show_key1", htmlspecialchars($pageObject->showDBValue("idMovie", $data)));
	//$xt->assign('editForm',true);
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Begin Next Prev button
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////    
	if(!@$_SESSION[$strTableName."_noNextPrev"] && $inlineedit == EDIT_SIMPLE)
	{
		$next = array();
		$prev = array();
		$pageObject->getNextPrevRecordKeys($data,"Edit",$next,$prev);
	}
	$nextlink = $prevlink = "";
	if(count($next))
	{
		$xt->assign("next_button",true);
				$nextlink.= "editid1=".htmlspecialchars(rawurlencode($next[1-1]));
		$xt->assign("nextbutton_attrs","id=\"nextButton".$id."\" align=\"absmiddle\"");
	}
	else 
		$xt->assign("next_button",false);
	if(count($prev))
	{
		$xt->assign("prev_button",true);
				$prevlink.= "editid1=".htmlspecialchars(rawurlencode($prev[1-1]));
		$xt->assign("prevbutton_attrs","id=\"prevButton".$id."\" align=\"absmiddle\"");
	}
	else 
		$xt->assign("prev_button",false);
	$xt->assign("resetbutton_attrs",'id="resetButton'.$id.'"');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//End Next Prev button
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////    
	if($inlineedit == EDIT_SIMPLE)
	{
		$xt->assign("back_button",true);
		$xt->assign("backbutton_attrs","id=\"backButton".$id."\"");
	}
	// onmouseover event, for changing focus. Needed to proper submit form
	//$onmouseover = "this.focus();";
	//$onmouseover = 'onmouseover="'.$onmouseover.'"';
	
	$xt->assign("save_button",true);
	if(!$enableCtrlsForEditing)
		$xt->assign("savebutton_attrs", "id=\"saveButton".$id."\" type=\"disabled\" ");
	else
		$xt->assign("savebutton_attrs", "id=\"saveButton".$id."\"");
		
	$xt->assign("reset_button",true);

}

$xt->assign("message_block",true);
$xt->assign("message",$message);
if(!strlen($message))
{
	$xt->displayBrickHidden("message");
}
/////////////////////////////////////////////////////////////
//process readonly and auto-update fields
/////////////////////////////////////////////////////////////

/////////////////////////////////////////////////////////////
//	return new data to the List page or report an error
/////////////////////////////////////////////////////////////
if (postvalue("a")=="edited" && ($inlineedit == EDIT_INLINE || $inlineedit == EDIT_POPUP))
{
	if(!$data)
	{
		$data = $evalues;
		$HaveData = false;
	}
	//Preparation   view values

//	detail tables

	$keylink = "";
	$keylink.= "&key1=".htmlspecialchars(rawurlencode(@$data["idMovie"]));


//	idMovie - 
	$value = $pageObject->showDBValue("idMovie", $data, $keylink);
	$showValues["idMovie"] = $value;
	$showFields[] = "idMovie";
		$showRawValues["idMovie"] = substr($data["idMovie"],0,100);

//	idFile - 
	$value = $pageObject->showDBValue("idFile", $data, $keylink);
	$showValues["idFile"] = $value;
	$showFields[] = "idFile";
		$showRawValues["idFile"] = substr($data["idFile"],0,100);

//	c00 - 
	$value = $pageObject->showDBValue("c00", $data, $keylink);
	$showValues["c00"] = $value;
	$showFields[] = "c00";
		$showRawValues["c00"] = substr($data["c00"],0,100);

//	c01 - 
	$value = $pageObject->showDBValue("c01", $data, $keylink);
	$showValues["c01"] = $value;
	$showFields[] = "c01";
		$showRawValues["c01"] = substr($data["c01"],0,100);

//	c02 - 
	$value = $pageObject->showDBValue("c02", $data, $keylink);
	$showValues["c02"] = $value;
	$showFields[] = "c02";
		$showRawValues["c02"] = substr($data["c02"],0,100);

//	c03 - 
	$value = $pageObject->showDBValue("c03", $data, $keylink);
	$showValues["c03"] = $value;
	$showFields[] = "c03";
		$showRawValues["c03"] = substr($data["c03"],0,100);

//	c04 - 
	$value = $pageObject->showDBValue("c04", $data, $keylink);
	$showValues["c04"] = $value;
	$showFields[] = "c04";
		$showRawValues["c04"] = substr($data["c04"],0,100);

//	c05 - 
	$value = $pageObject->showDBValue("c05", $data, $keylink);
	$showValues["c05"] = $value;
	$showFields[] = "c05";
		$showRawValues["c05"] = substr($data["c05"],0,100);

//	c06 - 
	$value = $pageObject->showDBValue("c06", $data, $keylink);
	$showValues["c06"] = $value;
	$showFields[] = "c06";
		$showRawValues["c06"] = substr($data["c06"],0,100);

//	c07 - 
	$value = $pageObject->showDBValue("c07", $data, $keylink);
	$showValues["c07"] = $value;
	$showFields[] = "c07";
		$showRawValues["c07"] = substr($data["c07"],0,100);

//	c08 - 
	$value = $pageObject->showDBValue("c08", $data, $keylink);
	$showValues["c08"] = $value;
	$showFields[] = "c08";
		$showRawValues["c08"] = substr($data["c08"],0,100);

//	c09 - 
	$value = $pageObject->showDBValue("c09", $data, $keylink);
	$showValues["c09"] = $value;
	$showFields[] = "c09";
		$showRawValues["c09"] = substr($data["c09"],0,100);

//	c10 - 
	$value = $pageObject->showDBValue("c10", $data, $keylink);
	$showValues["c10"] = $value;
	$showFields[] = "c10";
		$showRawValues["c10"] = substr($data["c10"],0,100);

//	c11 - 
	$value = $pageObject->showDBValue("c11", $data, $keylink);
	$showValues["c11"] = $value;
	$showFields[] = "c11";
		$showRawValues["c11"] = substr($data["c11"],0,100);

//	c12 - 
	$value = $pageObject->showDBValue("c12", $data, $keylink);
	$showValues["c12"] = $value;
	$showFields[] = "c12";
		$showRawValues["c12"] = substr($data["c12"],0,100);

//	c13 - 
	$value = $pageObject->showDBValue("c13", $data, $keylink);
	$showValues["c13"] = $value;
	$showFields[] = "c13";
		$showRawValues["c13"] = substr($data["c13"],0,100);

//	c14 - 
	$value = $pageObject->showDBValue("c14", $data, $keylink);
	$showValues["c14"] = $value;
	$showFields[] = "c14";
		$showRawValues["c14"] = substr($data["c14"],0,100);

//	c15 - 
	$value = $pageObject->showDBValue("c15", $data, $keylink);
	$showValues["c15"] = $value;
	$showFields[] = "c15";
		$showRawValues["c15"] = substr($data["c15"],0,100);

//	c16 - 
	$value = $pageObject->showDBValue("c16", $data, $keylink);
	$showValues["c16"] = $value;
	$showFields[] = "c16";
		$showRawValues["c16"] = substr($data["c16"],0,100);

//	c17 - 
	$value = $pageObject->showDBValue("c17", $data, $keylink);
	$showValues["c17"] = $value;
	$showFields[] = "c17";
		$showRawValues["c17"] = substr($data["c17"],0,100);

//	c18 - 
	$value = $pageObject->showDBValue("c18", $data, $keylink);
	$showValues["c18"] = $value;
	$showFields[] = "c18";
		$showRawValues["c18"] = substr($data["c18"],0,100);

//	c19 - 
	$value = $pageObject->showDBValue("c19", $data, $keylink);
	$showValues["c19"] = $value;
	$showFields[] = "c19";
		$showRawValues["c19"] = substr($data["c19"],0,100);

//	c20 - 
	$value = $pageObject->showDBValue("c20", $data, $keylink);
	$showValues["c20"] = $value;
	$showFields[] = "c20";
		$showRawValues["c20"] = substr($data["c20"],0,100);

//	c21 - 
	$value = $pageObject->showDBValue("c21", $data, $keylink);
	$showValues["c21"] = $value;
	$showFields[] = "c21";
		$showRawValues["c21"] = substr($data["c21"],0,100);

//	c22 - 
	$value = $pageObject->showDBValue("c22", $data, $keylink);
	$showValues["c22"] = $value;
	$showFields[] = "c22";
		$showRawValues["c22"] = substr($data["c22"],0,100);

//	c23 - 
	$value = $pageObject->showDBValue("c23", $data, $keylink);
	$showValues["c23"] = $value;
	$showFields[] = "c23";
		$showRawValues["c23"] = substr($data["c23"],0,100);

//	idSet - 
	$value = $pageObject->showDBValue("idSet", $data, $keylink);
	$showValues["idSet"] = $value;
	$showFields[] = "idSet";
		$showRawValues["idSet"] = substr($data["idSet"],0,100);

//	strFilename - 
	$value = $pageObject->showDBValue("strFilename", $data, $keylink);
	$showValues["strFilename"] = $value;
	$showFields[] = "strFilename";
		$showRawValues["strFilename"] = substr($data["strFilename"],0,100);

//	idPath - 
	$value = $pageObject->showDBValue("idPath", $data, $keylink);
	$showValues["idPath"] = $value;
	$showFields[] = "idPath";
		$showRawValues["idPath"] = substr($data["idPath"],0,100);

//	dateAdded - 
	$value = $pageObject->showDBValue("dateAdded", $data, $keylink);
	$showValues["dateAdded"] = $value;
	$showFields[] = "dateAdded";
		$showRawValues["dateAdded"] = substr($data["dateAdded"],0,100);

//	strPath - 
	$value = $pageObject->showDBValue("strPath", $data, $keylink);
	$showValues["strPath"] = $value;
	$showFields[] = "strPath";
		$showRawValues["strPath"] = substr($data["strPath"],0,100);

//	strGenre - 
	$value = $pageObject->showDBValue("strGenre", $data, $keylink);
	$showValues["strGenre"] = $value;
	$showFields[] = "strGenre";
		$showRawValues["strGenre"] = substr($data["strGenre"],0,100);

//	idGenre - 
	$value = $pageObject->showDBValue("idGenre", $data, $keylink);
	$showValues["idGenre"] = $value;
	$showFields[] = "idGenre";
		$showRawValues["idGenre"] = substr($data["idGenre"],0,100);

//	strSet - 
	$value = $pageObject->showDBValue("strSet", $data, $keylink);
	$showValues["strSet"] = $value;
	$showFields[] = "strSet";
		$showRawValues["strSet"] = substr($data["strSet"],0,100);

//	idSet1 - 
	$value = $pageObject->showDBValue("idSet1", $data, $keylink);
	$showValues["idSet1"] = $value;
	$showFields[] = "idSet1";
		$showRawValues["idSet1"] = substr($data["idSet1"],0,100);

//	idMovie1 - 
	$value = $pageObject->showDBValue("idMovie1", $data, $keylink);
	$showValues["idMovie1"] = $value;
	$showFields[] = "idMovie1";
		$showRawValues["idMovie1"] = substr($data["idMovie1"],0,100);

//	idGenre1 - 
	$value = $pageObject->showDBValue("idGenre1", $data, $keylink);
	$showValues["idGenre1"] = $value;
	$showFields[] = "idGenre1";
		$showRawValues["idGenre1"] = substr($data["idGenre1"],0,100);

//	strTag - 
	$value = $pageObject->showDBValue("strTag", $data, $keylink);
	$showValues["strTag"] = $value;
	$showFields[] = "strTag";
		$showRawValues["strTag"] = substr($data["strTag"],0,100);

//	idTag - 
	$value = $pageObject->showDBValue("idTag", $data, $keylink);
	$showValues["idTag"] = $value;
	$showFields[] = "idTag";
		$showRawValues["idTag"] = substr($data["idTag"],0,100);
/////////////////////////////////////////////////////////////
//	start inline output
/////////////////////////////////////////////////////////////
	
	if($IsSaved)
	{
		if($pageObject->lockingObj)
			$pageObject->lockingObj->UnlockRecord($strTableName,$keys,"");
		
		$returnJSON['success'] = true;
		$returnJSON['keys'] = $pageObject->jsKeys;
		$returnJSON['keyFields'] = $pageObject->keyFields;
		$returnJSON['vals'] = $showValues;
		$returnJSON['fields'] = $showFields;
		$returnJSON['rawVals'] = $showRawValues;
		$returnJSON['detKeys'] = $showDetailKeys;
		$returnJSON['userMess'] = $usermessage;
		$returnJSON['hrefs'] = $pageObject->buildDetailGridLinks($showDetailKeys);
		
		if($inlineedit==EDIT_POPUP && isset($_SESSION[$strTableName."_count_captcha"]) || $_SESSION[$strTableName."_count_captcha"]>0 || $_SESSION[$strTableName."_count_captcha"]<5)
			$returnJSON['hideCaptcha'] = true;
			
		if($globalEvents->exists("IsRecordEditable", $strTableName))
		{
			if(!$globalEvents->IsRecordEditable($showRawValues, true, $strTableName))
				$returnJSON['nonEditable'] = true;
		}
	}
	else
	{
		$returnJSON['success'] = false;
		$returnJSON['message'] = $message;
		
		if($pageObject->lockingObj)
			$returnJSON['lockMessage'] = $system_message;
		
		if($inlineedit == EDIT_POPUP && !$pageObject->isCaptchaOk)
			$returnJSON['captcha'] = false;
	}
	echo "<textarea>".htmlspecialchars(my_json_encode($returnJSON))."</textarea>";
	exit();
} 
/////////////////////////////////////////////////////////////
//	prepare Edit Controls
/////////////////////////////////////////////////////////////
//	validation stuff
$regex = '';
$regexmessage = '';
$regextype = '';
$control = array();

foreach($pageObject->editFields as $fName)
{
	$gfName = GoodFieldName($fName);
	$controls = array('controls'=>array());
	if (!$detailKeys || !in_array($fName, $detailKeys))
	{
		$control[$gfName] = array();
		$control[$gfName]["func"]="xt_buildeditcontrol";
		$control[$gfName]["params"] = array();
		$control[$gfName]["params"]["id"] = $id;
		$control[$gfName]["params"]["ptype"] = PAGE_EDIT;
		$control[$gfName]["params"]["field"] = $fName;
		if(!IsNumberType($pageObject->pSet->getFieldType($fName)) || is_null(@$data[$fName]))
			$control[$gfName]["params"]["value"] = @$data[$fName];
		else
		{
			$control[$gfName]["params"]["value"] = str_replace(".",$locale_info["LOCALE_SDECIMAL"],@$data[$fName]);
		}
		$control[$gfName]["params"]["pageObj"] = $pageObject;
		
		//	Begin Add validation
		$arrValidate = $pageObject->pSet->getValidation($fName);
		$control[$gfName]["params"]["validate"] = $arrValidate;
		//	End Add validation	
		$additionalCtrlParams = array();
		$additionalCtrlParams["disabled"] = !$enableCtrlsForEditing;
		$control[$gfName]["params"]["additionalCtrlParams"] = $additionalCtrlParams;
	}
	$controls["controls"]['ctrlInd'] = 0;
	$controls["controls"]['id'] = $id;
	$controls["controls"]['fieldName'] = $fName;
	
	if($inlineedit == EDIT_INLINE)
	{
		if(!$detailKeys || !in_array($fName, $detailKeys))
			$control[$gfName]["params"]["mode"]="inline_edit";
		$controls["controls"]['mode'] = "inline_edit";
	}
	else{
			if (!$detailKeys || !in_array($fName, $detailKeys))
				$control[$gfName]["params"]["mode"] = "edit";
			$controls["controls"]['mode'] = "edit";
		}
																																					
	if(!$detailKeys || !in_array($fName, $detailKeys))
		$xt->assignbyref($gfName."_editcontrol",$control[$gfName]);
	elseif($detailKeys && in_array($fName, $detailKeys))
		$controls["controls"]['value'] = @$data[$fName];
		
	// category control field
	$strCategoryControl = $pageObject->isDependOnField($fName);
	
	if($strCategoryControl!==false && in_array($strCategoryControl, $pageObject->editFields))
		$vals = array($fName => @$data[$fName],$strCategoryControl => @$data[$strCategoryControl]);
	else
		$vals = array($fName => @$data[$fName]);
		
	$preload = $pageObject->fillPreload($fName, $vals);
	if($preload!==false)
		$controls["controls"]['preloadData'] = $preload;
	
	$pageObject->fillControlsMap($controls);
	
	//fill field tool tips
	$pageObject->fillFieldToolTips($fName);
	
	// fill special settings for timepicker
	if($pageObject->pSet->getEditFormat($fName) == 'Time')	
		$pageObject->fillTimePickSettings($fName, $data[$fName]);
	
	if($pageObject->pSet->getViewFormat($fName) == FORMAT_MAP)	
		$pageObject->googleMapCfg['isUseGoogleMap'] = true;
		
	if($detailKeys && in_array($fName, $detailKeys) && array_key_exists($fName, $data))
	{
		$value = $pageObject->showDBValue($fName, $data);
		
		$xt->assign($gfName."_editcontrol",$value);
	}
}
//fill tab groups name and sections name to controls
$pageObject->fillCntrlTabGroups();

$pageObject->jsSettings['tableSettings'][$strTableName]["keys"] = $pageObject->jsKeys;
$pageObject->jsSettings['tableSettings'][$strTableName]['keyFields'] = $pageObject->keyFields;
$pageObject->jsSettings['tableSettings'][$strTableName]["prevKeys"] = $prev;
$pageObject->jsSettings['tableSettings'][$strTableName]["nextKeys"] = $next; 
if($pageObject->lockingObj)
{
	$pageObject->jsSettings['tableSettings'][$strTableName]["sKeys"] = $skeys;
	$pageObject->jsSettings['tableSettings'][$strTableName]["enableCtrls"] = $enableCtrlsForEditing;
	$pageObject->jsSettings['tableSettings'][$strTableName]["confirmTime"] = $pageObject->lockingObj->ConfirmTime;
}

/////////////////////////////////////////////////////////////
if($pageObject->isShowDetailTables && $inlineedit!=EDIT_INLINE && !isMobile())
{
	if(count($dpParams['ids']))
	{
		include('classes/listpage.php');
		include('classes/listpage_embed.php');
		include('classes/listpage_dpinline.php');
		$xt->assign("detail_tables",true);	
	}
	
	$dControlsMap = array();
	$dViewControlsMap = array();
	$flyId = $ids+1;
	
	for($d=0;$d<count($dpParams['ids']);$d++)
	{
		$options = array();
		//array of params for classes
		$options["mode"] = LIST_DETAILS;
		$options["pageType"] = PAGE_LIST;
		$options["masterPageType"] = PAGE_EDIT;
		$options["mainMasterPageType"] = PAGE_EDIT;
		$options['masterTable'] = "Movies";
		$options['firstTime'] = 1;
		
		$strTableName = $dpParams['strTableNames'][$d];
		
		if(!CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search")){
			$strTableName = "Movies";
			continue;
		}
		
		include_once("include/".GetTableURL($strTableName)."_settings.php");
		
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
		$options['flyId'] = $flyId++;
		$masterKeys = array();
		$mkr = 1;
		
		foreach($mKeys[$strTableName] as $mk){
			$options['masterKeysReq'][$mkr] = $data[$mk];
			$masterKeys['masterKey'.$mkr] = $data[$mk];
			$mkr++;
		}
		
		$listPageObject = ListPage::createListPage($strTableName, $options);
		
		// prepare code
		$listPageObject->prepareForBuildPage();
		
		// show page
		if($listPageObject->isDispGrid())
		{
			//set page events
			foreach($listPageObject->eventsObject->events as $event => $name)
				$listPageObject->xt->assign_event($event, $listPageObject->eventsObject, $event, array());
			
			//add detail settings to master settings
			$listPageObject->addControlsJSAndCSS();
			$listPageObject->fillSetCntrlMaps();
			
			$pageObject->jsSettings['tableSettings'][$strTableName]	= $listPageObject->jsSettings['tableSettings'][$strTableName];
			
			foreach($listPageObject->jsSettings["global"]["shortTNames"] as $tName => $shortTName){
				$pageObject->settingsMap["globalSettings"]["shortTNames"][$tName] = $shortTName;
			}
			
			$dControlsMap[$strTableName] = $listPageObject->controlsMap;
			$dControlsMap[$strTableName]['masterKeys'] = $masterKeys;
			$dViewControlsMap[$strTableName] = $listPageObject->viewControlsMap;
			
			//Add detail's js files to master's files
			$pageObject->copyAllJSFiles($listPageObject->grabAllJSFiles());
			
			//Add detail's css files to master's files
			$pageObject->copyAllCSSFiles($listPageObject->grabAllCSSFiles());
			
			$xtParams = array("method"=>'showPage', "params"=> false);
			$xtParams['object'] = $listPageObject;
			$xt->assign("displayDetailTable_".GoodFieldName($listPageObject->tName), $xtParams);
			
			$pageObject->controlsMap['dpTablesParams'][] = array('tName'=>$strTableName, 'id'=>$options['id']);
		}
		$flyId = $listPageObject->recId+1;
	}
	$pageObject->controlsMap['dControlsMap'] = $dControlsMap;
	$pageObject->viewControlsMap['dViewControlsMap'] = $dViewControlsMap; 
	$strTableName = "Movies";
}
/////////////////////////////////////////////////////////////
//fill jsSettings and ControlsHTMLMap
$pageObject->flyId = $flyId;
$pageObject->fillSetCntrlMaps();

$pageObject->addCommonJs();

//For mobile version in apple device

if($inlineedit == EDIT_SIMPLE)
{
	// assign body end
	$pageObject->body['end'] = array();
	$pageObject->body['end']["method"] = "assignBodyEnd";
	$pageObject->body['end']["object"] = &$pageObject;
	$xt->assign("body", $pageObject->body);
	$xt->assign("flybody",true);
}

if($inlineedit == EDIT_POPUP){
	$xt->assign("footer",false);
	$xt->assign("header",false);
	$xt->assign("body",$pageObject->body);
}

$xt->assign("style_block",true);

$pageObject->xt->assign("legend", true);

$viewlink = "";
$viewkeys = array();
	$viewkeys["editid1"] = postvalue("editid1");
foreach($viewkeys as $key => $val)
{
	if($viewlink)
		$viewlink.="&";
	$viewlink.=$key."=".$val;
}
$xt->assign("viewlink_attrs","id=\"viewButton".$id."\" name=\"viewButton".$id."\" onclick=\"window.location.href='Movies_view.php?".$viewlink."'\"");
if(CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search") && $inlineedit == EDIT_SIMPLE)
	$xt->assign("view_button",true);
else
	$xt->assign("view_button",false);

/////////////////////////////////////////////////////////////
//display the page
/////////////////////////////////////////////////////////////
if($eventObj->exists("BeforeShowEdit"))
	$eventObj->BeforeShowEdit($xt,$templatefile,$data, $pageObject);

if($inlineedit != EDIT_SIMPLE)
{
	$returnJSON['controlsMap'] = $pageObject->controlsHTMLMap;
	$returnJSON['viewControlsMap'] = $pageObject->viewControlsHTMLMap;
	$returnJSON['settings'] = $pageObject->jsSettings;	
}
	
if($inlineedit == EDIT_POPUP || $inlineedit == EDIT_INLINE)
{
	if($globalEvents->exists("IsRecordEditable", $strTableName))
	{
		if(!$globalEvents->IsRecordEditable($data, true, $strTableName))
			return SecurityRedirect($inlineedit);
	}
}
if($inlineedit == EDIT_POPUP)
{
	$xt->load_template($templatefile);
	$returnJSON['html'] = $xt->fetch_loaded('style_block').$xt->fetch_loaded('body');
	if(count($pageObject->includes_css))
		$returnJSON['CSSFiles'] = array_unique($pageObject->includes_css);
	if(count($pageObject->includes_cssIE))
		$returnJSON['CSSFilesIE'] = array_unique($pageObject->includes_cssIE);
	$returnJSON["additionalJS"] = $pageObject->grabAllJsFiles();
	$returnJSON['idStartFrom'] = $flyId + 1;
	echo (my_json_encode($returnJSON)); 
}
elseif($inlineedit == EDIT_INLINE)
{
	$xt->load_template($templatefile);
	$returnJSON["html"] = array();
	foreach($pageObject->editFields as $fName)
	{
		if($detailKeys && in_array($fName, $detailKeys))
			continue;
		$returnJSON["html"][$fName] = $xt->fetchVar(GoodFieldName($fName)."_editcontrol");
	}
	$returnJSON["additionalJS"] = $pageObject->grabAllJsFiles();
	$returnJSON["additionalCSS"] = $pageObject->grabAllCSSFiles();
	echo (my_json_encode($returnJSON)); 
}
else
	$xt->display($templatefile);
	
function SecurityRedirect($inlineedit)
{
	if($inlineedit == EDIT_INLINE)
	{
		echo my_json_encode(array("success" => false, "message" => "The record is not editable"));
		return;
	}
	
	$_SESSION["MyURL"]=$_SERVER["SCRIPT_NAME"]."?".$_SERVER["QUERY_STRING"];
	header("Location: menu.php?message=expired");	
}
?>
