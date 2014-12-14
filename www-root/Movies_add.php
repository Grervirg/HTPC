<?php 
include("include/dbcommon.php");

@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

add_nocache_headers();
include("include/Movies_variables.php");
include('include/xtempl.php');
include('classes/addpage.php');

global $globalEvents;

//	check if logged in
if(!isLogged() || CheckPermissionsEvent($strTableName, 'A') && !CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Add"))
{ 
	$_SESSION["MyURL"]=$_SERVER["SCRIPT_NAME"]."?".$_SERVER["QUERY_STRING"];
	
	header("Location: login.php?message=expired"); 
	return;
}

if ((sizeof($_POST)==0) && (postvalue('ferror'))){
	if (postvalue("inline")){
		$returnJSON['success'] = false;
		$returnJSON['message'] = "Error occurred";
		$returnJSON['fatalError'] = true;
		echo "<textarea>".htmlspecialchars(my_json_encode($returnJSON))."</textarea>";
		exit();
	}
	else if (postvalue("fly")){
		echo -1;
		exit();
	}
	else {
		$_SESSION["message_add"] = "<< "."Error occurred"." >>";
	}
}

$layout = new TLayout("add2","FancyBlueWave","MobileBlueWave");
$layout->blocks["top"] = array();
$layout->containers["add"] = array();

$layout->containers["add"][] = array("name"=>"addheader","block"=>"","substyle"=>2);


$layout->containers["add"][] = array("name"=>"message","block"=>"message_block","substyle"=>1);


$layout->containers["add"][] = array("name"=>"wrapper","block"=>"","substyle"=>1, "container"=>"fields");


$layout->containers["fields"] = array();

$layout->containers["fields"][] = array("name"=>"addfields","block"=>"","substyle"=>1);


$layout->containers["fields"][] = array("name"=>"legend","block"=>"legend","substyle"=>3);


$layout->containers["fields"][] = array("name"=>"addbuttons","block"=>"","substyle"=>2);


$layout->skins["fields"] = "fields";

$layout->skins["add"] = "1";
$layout->blocks["top"][] = "add";
$layout->skins["details"] = "empty";
$layout->blocks["top"][] = "details";$page_layouts["Movies_add"] = $layout;



$filename = "";
$status = "";
$message = "";
$mesClass = "";
$usermessage = "";
$error_happened = false;
$readavalues = false;

$keys = array();
$showValues = array();
$showRawValues = array();
$showFields = array();
$showDetailKeys = array();
$IsSaved = false;
$HaveData = true;
$popUpSave = false;

$sessionPrefix = $strTableName;

$onFly = false;
if(postvalue("onFly"))
	$onFly = true;

if(@$_REQUEST["editType"]=="inline")
	$inlineadd = ADD_INLINE;
elseif(@$_REQUEST["editType"]==ADD_POPUP)
{
	$inlineadd = ADD_POPUP;
	if(@$_POST["a"]=="added" && postvalue("field")=="" && postvalue("category")=="")
		$popUpSave = true;	
}
elseif(@$_REQUEST["editType"]==ADD_MASTER)
	$inlineadd = ADD_MASTER;
elseif($onFly)
{
	$inlineadd = ADD_ONTHEFLY;
	$sessionPrefix = $strTableName."_add";
}
else
	$inlineadd = ADD_SIMPLE;

if($inlineadd == ADD_INLINE)
	$templatefile = "Movies_inline_add.htm";
else
	$templatefile = "Movies_add.htm";

$id = postvalue("id");
if(intval($id)==0)
	$id = 1;

//If undefined session value for mastet table, but exist post value master table, than take second
//It may be happen only when use dpInline mode on page add
if(!@$_SESSION[$sessionPrefix."_mastertable"] && postvalue("mastertable"))
	$_SESSION[$sessionPrefix."_mastertable"] = postvalue("mastertable");
	
$xt = new Xtempl();
	
// assign an id
$xt->assign("id",$id);
	
$auditObj = GetAuditObject($strTableName);

//array of params for classes
$params = array("pageType" => PAGE_ADD,"id" => $id,"mode" => $inlineadd);


$params['xt'] = &$xt;
$params['tName'] = $strTableName;
$params['includes_js'] = $includes_js;
$params['locale_info'] = $locale_info;
$params['includes_css'] = $includes_css;
$params['useTabsOnAdd'] = $gSettings->useTabsOnAdd();
$params['templatefile'] = $templatefile;
$params['includes_jsreq'] = $includes_jsreq;
$params['pageAddLikeInline'] = ($inlineadd==ADD_INLINE);
$params['needSearchClauseObj'] = false;
$params['strOriginalTableName'] = $strOriginalTableName;

if($params['useTabsOnAdd'])
	$params['arrAddTabs'] = $gSettings->getAddTabs();
	
$pageObject = new AddPage($params);

if(isset($_REQUEST['afteradd'])){
		header('Location: Movies_add.php');
	if($eventObj->exists("AfterAdd") && isset($_SESSION['after_add_data'][$_REQUEST['afteradd']])){
	
		$data = $_SESSION['after_add_data'][$_REQUEST['afteradd']];
		$eventObj->AfterAdd($data['avalues'], $data['keys'],$data['inlineadd'], $pageObject);
	
	}
	unset($_SESSION['after_add_data'][$_REQUEST['afteradd']]);
	
	foreach (is_array($_SESSION['after_add_data']) ? $_SESSION['after_add_data'] : array() as $k=>$v){
		if (!is_array($v) or !array_key_exists('time',$v)) {
			unset($_SESSION['after_add_data'][$k]);
			continue;
		}
		if ($v['time'] < time() - 3600){
			unset($_SESSION['after_add_data'][$k]);
		}
	}
		exit;
}

//Get detail table keys	
$detailKeys = $pageObject->detailKeysByM;

//Array of fields, which appear on add page
$addFields = $pageObject->getFieldsByPageType();

// add button events if exist
if ($inlineadd==ADD_SIMPLE || $inlineadd == ADD_ONTHEFLY)
	$pageObject->addButtonHandlers();

$url_page=substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1,12);

//For show detail tables on master page add
if($inlineadd==ADD_SIMPLE || $inlineadd==ADD_MASTER || $inlineadd==ADD_POPUP)
{
	$dpParams = array();
	if($pageObject->isShowDetailTables  && !isMobile())
	{
		$ids = $id;
		$countDetailsIsShow = 0;
		$pageObject->jsSettings['tableSettings'][$strTableName]['isShowDetails'] = $countDetailsIsShow > 0 ? true : false;
		$pageObject->jsSettings['tableSettings'][$strTableName]['dpParams'] = array('tableNames'=>$dpParams['strTableNames'], 'ids'=>$dpParams['ids']);
	}
}

//	Before Process event
if($eventObj->exists("BeforeProcessAdd"))
	$eventObj->BeforeProcessAdd($conn, $pageObject);

// proccess captcha
if ($inlineadd==ADD_SIMPLE || $inlineadd==ADD_MASTER || $inlineadd==ADD_POPUP)
	if($pageObject->captchaExists())
		$pageObject->doCaptchaCode();
	
// insert new record if we have to
if(@$_POST["a"]=="added")
{
	$afilename_values=array();
	$avalues=array();
	$blobfields=array();
//	processing idMovie - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_idMovie = $pageObject->getControl("idMovie", $id);
		$control_idMovie->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing idMovie - end
//	processing idFile - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_idFile = $pageObject->getControl("idFile", $id);
		$control_idFile->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing idFile - end
//	processing c00 - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_c00 = $pageObject->getControl("c00", $id);
		$control_c00->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing c00 - end
//	processing c01 - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_c01 = $pageObject->getControl("c01", $id);
		$control_c01->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing c01 - end
//	processing c02 - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_c02 = $pageObject->getControl("c02", $id);
		$control_c02->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing c02 - end
//	processing c03 - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_c03 = $pageObject->getControl("c03", $id);
		$control_c03->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing c03 - end
//	processing c04 - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_c04 = $pageObject->getControl("c04", $id);
		$control_c04->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing c04 - end
//	processing c05 - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_c05 = $pageObject->getControl("c05", $id);
		$control_c05->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing c05 - end
//	processing c06 - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_c06 = $pageObject->getControl("c06", $id);
		$control_c06->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing c06 - end
//	processing c07 - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_c07 = $pageObject->getControl("c07", $id);
		$control_c07->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing c07 - end
//	processing c08 - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_c08 = $pageObject->getControl("c08", $id);
		$control_c08->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing c08 - end
//	processing c09 - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_c09 = $pageObject->getControl("c09", $id);
		$control_c09->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing c09 - end
//	processing c10 - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_c10 = $pageObject->getControl("c10", $id);
		$control_c10->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing c10 - end
//	processing c11 - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_c11 = $pageObject->getControl("c11", $id);
		$control_c11->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing c11 - end
//	processing c12 - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_c12 = $pageObject->getControl("c12", $id);
		$control_c12->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing c12 - end
//	processing c13 - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_c13 = $pageObject->getControl("c13", $id);
		$control_c13->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing c13 - end
//	processing c14 - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_c14 = $pageObject->getControl("c14", $id);
		$control_c14->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing c14 - end
//	processing c15 - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_c15 = $pageObject->getControl("c15", $id);
		$control_c15->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing c15 - end
//	processing c16 - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_c16 = $pageObject->getControl("c16", $id);
		$control_c16->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing c16 - end
//	processing c18 - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_c18 = $pageObject->getControl("c18", $id);
		$control_c18->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing c18 - end
//	processing c19 - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_c19 = $pageObject->getControl("c19", $id);
		$control_c19->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing c19 - end
//	processing c20 - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_c20 = $pageObject->getControl("c20", $id);
		$control_c20->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing c20 - end
//	processing c21 - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_c21 = $pageObject->getControl("c21", $id);
		$control_c21->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing c21 - end
//	processing c22 - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_c22 = $pageObject->getControl("c22", $id);
		$control_c22->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing c22 - end
//	processing c23 - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_c23 = $pageObject->getControl("c23", $id);
		$control_c23->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing c23 - end
//	processing idSet - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_idSet = $pageObject->getControl("idSet", $id);
		$control_idSet->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing idSet - end




	$failed_inline_add=false;
//	add filenames to values
	foreach($afilename_values as $akey=>$value)
		$avalues[$akey]=$value;
	
//	before Add event
	$retval = true;
	if($eventObj->exists("BeforeAdd"))
		$retval = $eventObj->BeforeAdd($avalues,$usermessage,(bool)$inlineadd, $pageObject);
	if($retval && $pageObject->isCaptchaOk)
	{
		//add or set updated lat-lng values for all map fileds with 'UpdateLatLng' ticked
		setUpdatedLatLng($avalues, $pageObject->cipherer->pSet);
		
		$_SESSION[$strTableName."_count_captcha"] = $_SESSION[$strTableName."_count_captcha"]+1;
		if(DoInsertRecord($strOriginalTableName,$avalues,$blobfields,$id,$pageObject, $pageObject->cipherer))
		{
			$IsSaved=true;
//	after edit event
			if($auditObj || $eventObj->exists("AfterAdd"))
			{
				foreach($keys as $idx=>$val)
					$avalues[$idx]=$val;
			}
			
			if($auditObj)
				$auditObj->LogAdd($strTableName,$avalues,$keys);
				
// Give possibility to all edit controls to clean their data				
//	processing idMovie - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_idMovie->afterSuccessfulSave();
			}
//	processing idMovie - end
//	processing idFile - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_idFile->afterSuccessfulSave();
			}
//	processing idFile - end
//	processing c00 - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_c00->afterSuccessfulSave();
			}
//	processing c00 - end
//	processing c01 - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_c01->afterSuccessfulSave();
			}
//	processing c01 - end
//	processing c02 - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_c02->afterSuccessfulSave();
			}
//	processing c02 - end
//	processing c03 - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_c03->afterSuccessfulSave();
			}
//	processing c03 - end
//	processing c04 - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_c04->afterSuccessfulSave();
			}
//	processing c04 - end
//	processing c05 - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_c05->afterSuccessfulSave();
			}
//	processing c05 - end
//	processing c06 - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_c06->afterSuccessfulSave();
			}
//	processing c06 - end
//	processing c07 - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_c07->afterSuccessfulSave();
			}
//	processing c07 - end
//	processing c08 - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_c08->afterSuccessfulSave();
			}
//	processing c08 - end
//	processing c09 - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_c09->afterSuccessfulSave();
			}
//	processing c09 - end
//	processing c10 - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_c10->afterSuccessfulSave();
			}
//	processing c10 - end
//	processing c11 - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_c11->afterSuccessfulSave();
			}
//	processing c11 - end
//	processing c12 - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_c12->afterSuccessfulSave();
			}
//	processing c12 - end
//	processing c13 - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_c13->afterSuccessfulSave();
			}
//	processing c13 - end
//	processing c14 - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_c14->afterSuccessfulSave();
			}
//	processing c14 - end
//	processing c15 - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_c15->afterSuccessfulSave();
			}
//	processing c15 - end
//	processing c16 - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_c16->afterSuccessfulSave();
			}
//	processing c16 - end
//	processing c18 - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_c18->afterSuccessfulSave();
			}
//	processing c18 - end
//	processing c19 - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_c19->afterSuccessfulSave();
			}
//	processing c19 - end
//	processing c20 - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_c20->afterSuccessfulSave();
			}
//	processing c20 - end
//	processing c21 - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_c21->afterSuccessfulSave();
			}
//	processing c21 - end
//	processing c22 - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_c22->afterSuccessfulSave();
			}
//	processing c22 - end
//	processing c23 - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_c23->afterSuccessfulSave();
			}
//	processing c23 - end
//	processing idSet - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_idSet->afterSuccessfulSave();
			}
//	processing idSet - end

			$afterAdd_id = '';	
			if($eventObj->exists("AfterAdd") && $inlineadd!=ADD_MASTER){
				$eventObj->AfterAdd($avalues,$keys,(bool)$inlineadd, $pageObject);
			} else if ($eventObj->exists("AfterAdd") && $inlineadd==ADD_MASTER){
				if($onFly)
					$eventObj->AfterAdd($avalues,$keys,(bool)$inlineadd, $pageObject);
				else{
					$afterAdd_id = generatePassword(20);	
				
					$_SESSION['after_add_data'][$afterAdd_id] = array(
						'avalues'=>$avalues,
						'keys'=>$keys,
						'inlineadd'=>(bool)$inlineadd,
						'time' => time()
					);	
				}
			}
				
			if($inlineadd==ADD_SIMPLE || $inlineadd==ADD_MASTER)
			{
				$permis = array();
				$keylink = "";$k = 0;
				foreach($keys as $idx=>$val)
				{
					if($k!=0)
						$keylink .="&";
					$keylink .="editid".(++$k)."=".htmlspecialchars(rawurlencode(@$val));
				}
				$permis = $pageObject->getPermissions();				
				if (count($keys))
				{
					$message .="</br>";
					if($pageObject->pSet->hasEditPage() && $permis['edit'])
						$message .='&nbsp;<a href=\'Movies_edit.php?'.$keylink.'\'>'."Edit".'</a>&nbsp;';
					if($pageObject->pSet->hasViewPage() && $permis['search'])
						$message .='&nbsp;<a href=\'Movies_view.php?'.$keylink.'\'>'."View".'</a>&nbsp;';
				}
				$mesClass = "mes_ok";	
			}
		}
		elseif($inlineadd!=ADD_INLINE)
			$mesClass = "mes_not";	
	}
	else
	{
		$message = $usermessage;
		$status = "DECLINED";
		$readavalues = true;
	}
}
if($message)
	$message = "<div class='message ".$mesClass."'>".$message."</div>";

// PRG rule, to avoid POSTDATA resend
if (no_output_done() && $inlineadd==ADD_SIMPLE && $IsSaved)
{
	// saving message
	$_SESSION["message_add"] = ($message ? $message : "");
	// redirect
	header("Location: Movies_".$pageObject->getPageType().".php");
	// turned on output buffering, so we need to stop script
	exit();
}

if($inlineadd==ADD_MASTER && $IsSaved)
	$_SESSION["message_add"] = ($message ? $message : "");
	
// for PRG rule, to avoid POSTDATA resend. Saving mess in session
if($inlineadd==ADD_SIMPLE && isset($_SESSION["message_add"]))
{
	$message = $_SESSION["message_add"];
	unset($_SESSION["message_add"]);
}

$defvalues=array();

//	copy record
if(array_key_exists("copyid1",$_REQUEST) || array_key_exists("editid1",$_REQUEST))
{
	$copykeys=array();
	if(array_key_exists("copyid1",$_REQUEST))
	{
		$copykeys["idMovie"]=postvalue("copyid1");
	}
	else
	{
		$copykeys["idMovie"]=postvalue("editid1");
	}
	$strWhere=KeyWhere($copykeys);
	$strSQL = $gQuery->gSQLWhere($strWhere);

	LogInfo($strSQL);
	$rs = db_query($strSQL,$conn);
	$defvalues = $pageObject->cipherer->DecryptFetchedArray($rs);
	if(!$defvalues)
		$defvalues=array();
//	clear key fields
	$defvalues["idMovie"]="";
//call CopyOnLoad event
	if($eventObj->exists("CopyOnLoad"))
		$eventObj->CopyOnLoad($defvalues,$strWhere, $pageObject);
}
else
{
}



if($readavalues)
{
	$defvalues["idMovie"]=@$avalues["idMovie"];
	$defvalues["idFile"]=@$avalues["idFile"];
	$defvalues["c00"]=@$avalues["c00"];
	$defvalues["c01"]=@$avalues["c01"];
	$defvalues["c02"]=@$avalues["c02"];
	$defvalues["c03"]=@$avalues["c03"];
	$defvalues["c04"]=@$avalues["c04"];
	$defvalues["c05"]=@$avalues["c05"];
	$defvalues["c06"]=@$avalues["c06"];
	$defvalues["c07"]=@$avalues["c07"];
	$defvalues["c08"]=@$avalues["c08"];
	$defvalues["c09"]=@$avalues["c09"];
	$defvalues["c10"]=@$avalues["c10"];
	$defvalues["c11"]=@$avalues["c11"];
	$defvalues["c12"]=@$avalues["c12"];
	$defvalues["c13"]=@$avalues["c13"];
	$defvalues["c14"]=@$avalues["c14"];
	$defvalues["c15"]=@$avalues["c15"];
	$defvalues["c16"]=@$avalues["c16"];
	$defvalues["c18"]=@$avalues["c18"];
	$defvalues["c19"]=@$avalues["c19"];
	$defvalues["c20"]=@$avalues["c20"];
	$defvalues["c21"]=@$avalues["c21"];
	$defvalues["c22"]=@$avalues["c22"];
	$defvalues["c23"]=@$avalues["c23"];
	$defvalues["idSet"]=@$avalues["idSet"];
}

if($eventObj->exists("ProcessValuesAdd"))
	$eventObj->ProcessValuesAdd($defvalues, $pageObject);


//for basic files
$includes="";

if($inlineadd!=ADD_INLINE)
{
	if($inlineadd!=ADD_ONTHEFLY && $inlineadd!=ADD_POPUP)
	{
		$includes .="<script language=\"JavaScript\" src=\"include/loadfirst.js\"></script>\r\n";
				$includes.="<script type=\"text/javascript\" src=\"include/lang/".getLangFileName(mlang_getcurrentlang()).".js\"></script>";
		if (!isMobile())
			$includes.="<div id=\"search_suggest\"></div>\r\n";
	}
	
	if(!$pageObject->isAppearOnTabs("idMovie"))
		$xt->assign("idMovie_fieldblock",true);
	else
		$xt->assign("idMovie_tabfieldblock",true);
	$xt->assign("idMovie_label",true);
	if(isEnableSection508())
		$xt->assign_section("idMovie_label","<label for=\"".GetInputElementId("idMovie", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("idFile"))
		$xt->assign("idFile_fieldblock",true);
	else
		$xt->assign("idFile_tabfieldblock",true);
	$xt->assign("idFile_label",true);
	if(isEnableSection508())
		$xt->assign_section("idFile_label","<label for=\"".GetInputElementId("idFile", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("c00"))
		$xt->assign("c00_fieldblock",true);
	else
		$xt->assign("c00_tabfieldblock",true);
	$xt->assign("c00_label",true);
	if(isEnableSection508())
		$xt->assign_section("c00_label","<label for=\"".GetInputElementId("c00", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("c01"))
		$xt->assign("c01_fieldblock",true);
	else
		$xt->assign("c01_tabfieldblock",true);
	$xt->assign("c01_label",true);
	if(isEnableSection508())
		$xt->assign_section("c01_label","<label for=\"".GetInputElementId("c01", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("c02"))
		$xt->assign("c02_fieldblock",true);
	else
		$xt->assign("c02_tabfieldblock",true);
	$xt->assign("c02_label",true);
	if(isEnableSection508())
		$xt->assign_section("c02_label","<label for=\"".GetInputElementId("c02", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("c03"))
		$xt->assign("c03_fieldblock",true);
	else
		$xt->assign("c03_tabfieldblock",true);
	$xt->assign("c03_label",true);
	if(isEnableSection508())
		$xt->assign_section("c03_label","<label for=\"".GetInputElementId("c03", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("c04"))
		$xt->assign("c04_fieldblock",true);
	else
		$xt->assign("c04_tabfieldblock",true);
	$xt->assign("c04_label",true);
	if(isEnableSection508())
		$xt->assign_section("c04_label","<label for=\"".GetInputElementId("c04", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("c05"))
		$xt->assign("c05_fieldblock",true);
	else
		$xt->assign("c05_tabfieldblock",true);
	$xt->assign("c05_label",true);
	if(isEnableSection508())
		$xt->assign_section("c05_label","<label for=\"".GetInputElementId("c05", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("c06"))
		$xt->assign("c06_fieldblock",true);
	else
		$xt->assign("c06_tabfieldblock",true);
	$xt->assign("c06_label",true);
	if(isEnableSection508())
		$xt->assign_section("c06_label","<label for=\"".GetInputElementId("c06", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("c07"))
		$xt->assign("c07_fieldblock",true);
	else
		$xt->assign("c07_tabfieldblock",true);
	$xt->assign("c07_label",true);
	if(isEnableSection508())
		$xt->assign_section("c07_label","<label for=\"".GetInputElementId("c07", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("c08"))
		$xt->assign("c08_fieldblock",true);
	else
		$xt->assign("c08_tabfieldblock",true);
	$xt->assign("c08_label",true);
	if(isEnableSection508())
		$xt->assign_section("c08_label","<label for=\"".GetInputElementId("c08", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("c09"))
		$xt->assign("c09_fieldblock",true);
	else
		$xt->assign("c09_tabfieldblock",true);
	$xt->assign("c09_label",true);
	if(isEnableSection508())
		$xt->assign_section("c09_label","<label for=\"".GetInputElementId("c09", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("c10"))
		$xt->assign("c10_fieldblock",true);
	else
		$xt->assign("c10_tabfieldblock",true);
	$xt->assign("c10_label",true);
	if(isEnableSection508())
		$xt->assign_section("c10_label","<label for=\"".GetInputElementId("c10", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("c11"))
		$xt->assign("c11_fieldblock",true);
	else
		$xt->assign("c11_tabfieldblock",true);
	$xt->assign("c11_label",true);
	if(isEnableSection508())
		$xt->assign_section("c11_label","<label for=\"".GetInputElementId("c11", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("c12"))
		$xt->assign("c12_fieldblock",true);
	else
		$xt->assign("c12_tabfieldblock",true);
	$xt->assign("c12_label",true);
	if(isEnableSection508())
		$xt->assign_section("c12_label","<label for=\"".GetInputElementId("c12", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("c13"))
		$xt->assign("c13_fieldblock",true);
	else
		$xt->assign("c13_tabfieldblock",true);
	$xt->assign("c13_label",true);
	if(isEnableSection508())
		$xt->assign_section("c13_label","<label for=\"".GetInputElementId("c13", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("c14"))
		$xt->assign("c14_fieldblock",true);
	else
		$xt->assign("c14_tabfieldblock",true);
	$xt->assign("c14_label",true);
	if(isEnableSection508())
		$xt->assign_section("c14_label","<label for=\"".GetInputElementId("c14", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("c15"))
		$xt->assign("c15_fieldblock",true);
	else
		$xt->assign("c15_tabfieldblock",true);
	$xt->assign("c15_label",true);
	if(isEnableSection508())
		$xt->assign_section("c15_label","<label for=\"".GetInputElementId("c15", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("c16"))
		$xt->assign("c16_fieldblock",true);
	else
		$xt->assign("c16_tabfieldblock",true);
	$xt->assign("c16_label",true);
	if(isEnableSection508())
		$xt->assign_section("c16_label","<label for=\"".GetInputElementId("c16", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("c18"))
		$xt->assign("c18_fieldblock",true);
	else
		$xt->assign("c18_tabfieldblock",true);
	$xt->assign("c18_label",true);
	if(isEnableSection508())
		$xt->assign_section("c18_label","<label for=\"".GetInputElementId("c18", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("c19"))
		$xt->assign("c19_fieldblock",true);
	else
		$xt->assign("c19_tabfieldblock",true);
	$xt->assign("c19_label",true);
	if(isEnableSection508())
		$xt->assign_section("c19_label","<label for=\"".GetInputElementId("c19", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("c20"))
		$xt->assign("c20_fieldblock",true);
	else
		$xt->assign("c20_tabfieldblock",true);
	$xt->assign("c20_label",true);
	if(isEnableSection508())
		$xt->assign_section("c20_label","<label for=\"".GetInputElementId("c20", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("c21"))
		$xt->assign("c21_fieldblock",true);
	else
		$xt->assign("c21_tabfieldblock",true);
	$xt->assign("c21_label",true);
	if(isEnableSection508())
		$xt->assign_section("c21_label","<label for=\"".GetInputElementId("c21", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("c22"))
		$xt->assign("c22_fieldblock",true);
	else
		$xt->assign("c22_tabfieldblock",true);
	$xt->assign("c22_label",true);
	if(isEnableSection508())
		$xt->assign_section("c22_label","<label for=\"".GetInputElementId("c22", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("c23"))
		$xt->assign("c23_fieldblock",true);
	else
		$xt->assign("c23_tabfieldblock",true);
	$xt->assign("c23_label",true);
	if(isEnableSection508())
		$xt->assign_section("c23_label","<label for=\"".GetInputElementId("c23", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("idSet"))
		$xt->assign("idSet_fieldblock",true);
	else
		$xt->assign("idSet_tabfieldblock",true);
	$xt->assign("idSet_label",true);
	if(isEnableSection508())
		$xt->assign_section("idSet_label","<label for=\"".GetInputElementId("idSet", $id, PAGE_ADD)."\">","</label>");
	
	
	
	if($inlineadd!=ADD_ONTHEFLY && $inlineadd!=ADD_POPUP)
	{
		$pageObject->body["begin"] .= $includes;
				$xt->assign("backbutton_attrs","id=\"backButton".$id."\"");
		$xt->assign("back_button",true);
	}
	else
	{		
		$xt->assign("cancelbutton_attrs", "id=\"cancelButton".$id."\"");
		$xt->assign("cancel_button",true);
		$xt->assign("header","");
	}
	$xt->assign("save_button",true);
}
$xt->assign("savebutton_attrs","id=\"saveButton".$id."\"");
$xt->assign("message_block",true);
$xt->assign("message",$message);
if(!strlen($message))
{
	$xt->displayBrickHidden("message");
}

//	show readonly fields
$linkdata="";

$i = 0;
$jsKeys = array();
$keyFields = array();
foreach($keys as $field=>$value)
{
	$keyFields[$i] = $field;
	$jsKeys[$i++] = $value;
}

if(@$_POST["a"]=="added" && $inlineadd==ADD_ONTHEFLY)
{
	if( !$error_happened && $status!="DECLINED")
	{
		$addedData = GetAddedDataLookupQuery($pageObject, $keys, false);
		$data =& $addedData[0];	
		
		if($data)
		{
			$respData = array($addedData[1]["linkField"] => @$data[$addedData[1]["linkFieldIndex"]], $addedData[1]["displayField"] => @$data[$addedData[1]["displayFieldIndex"]]);
		}
		else
		{
			$respData = array($addedData[1]["linkField"] => @$avalues[$addedData[1]["linkField"]], $addedData[1]["displayField"] => @$avalues[$addedData[1]["displayField"]]);
		}		
		$returnJSON['success'] = true;
		$returnJSON['keys'] = $jsKeys;
		$returnJSON['keyFields'] = $keyFields;
		$returnJSON['vals'] = $respData;
		$returnJSON['fields'] = $showFields;
	}
	else
	{
		$returnJSON['success'] = false;
		$returnJSON['message'] = $message;
	}
	echo "<textarea>".htmlspecialchars(my_json_encode($returnJSON))."</textarea>";
	exit();
}

if(@$_POST["a"]=="added" && ($inlineadd == ADD_INLINE || $inlineadd == ADD_MASTER || $inlineadd==ADD_POPUP)) 
{
	//Preparation   view values
	//	get current values and show edit controls
	$dispFieldAlias = "";
	$data=0;
	$linkAndDispVals = array();
	if(count($keys))
	{
		$where=KeyWhere($keys);
			
		$forLookup = postvalue('forLookup');
		if ($forLookup)
		{
			$addedData = GetAddedDataLookupQuery($pageObject, $keys, true);
			$data =& $addedData[0];
			$linkAndDispVals = array('linkField' => $addedData[0][$addedData[1]["linkField"]], 'displayField' => $addedData[0][$addedData[1]["displayField"]]);
		}
		else
		{
			$strSQL = $gQuery->gSQLWhere_having_fromQuery('', $where, '');		
		
			LogInfo($strSQL);
			$rs=db_query($strSQL,$conn);
			$data = $pageObject->cipherer->DecryptFetchedArray($rs);
		}
	}
	if(!$data)
	{
		$data=$avalues;
		$HaveData=false;
	}
	//check if correct values added

	$keylink="";
	$keylink.="&key1=".htmlspecialchars(rawurlencode(@$data["idMovie"]));
	
////////////////////////////////////////////
//	idMovie
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("idMovie", $data, $keylink);
		$showValues["idMovie"] = $value;
		$showFields[] = "idMovie";
	}	
//	idFile
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("idFile", $data, $keylink);
		$showValues["idFile"] = $value;
		$showFields[] = "idFile";
	}	
//	c00
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("c00", $data, $keylink);
		$showValues["c00"] = $value;
		$showFields[] = "c00";
	}	
//	c01
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("c01", $data, $keylink);
		$showValues["c01"] = $value;
		$showFields[] = "c01";
	}	
//	c02
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("c02", $data, $keylink);
		$showValues["c02"] = $value;
		$showFields[] = "c02";
	}	
//	c03
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("c03", $data, $keylink);
		$showValues["c03"] = $value;
		$showFields[] = "c03";
	}	
//	c04
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("c04", $data, $keylink);
		$showValues["c04"] = $value;
		$showFields[] = "c04";
	}	
//	c05
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("c05", $data, $keylink);
		$showValues["c05"] = $value;
		$showFields[] = "c05";
	}	
//	c06
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("c06", $data, $keylink);
		$showValues["c06"] = $value;
		$showFields[] = "c06";
	}	
//	c07
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("c07", $data, $keylink);
		$showValues["c07"] = $value;
		$showFields[] = "c07";
	}	
//	c08
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("c08", $data, $keylink);
		$showValues["c08"] = $value;
		$showFields[] = "c08";
	}	
//	c09
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("c09", $data, $keylink);
		$showValues["c09"] = $value;
		$showFields[] = "c09";
	}	
//	c10
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("c10", $data, $keylink);
		$showValues["c10"] = $value;
		$showFields[] = "c10";
	}	
//	c11
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("c11", $data, $keylink);
		$showValues["c11"] = $value;
		$showFields[] = "c11";
	}	
//	c12
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("c12", $data, $keylink);
		$showValues["c12"] = $value;
		$showFields[] = "c12";
	}	
//	c13
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("c13", $data, $keylink);
		$showValues["c13"] = $value;
		$showFields[] = "c13";
	}	
//	c14
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("c14", $data, $keylink);
		$showValues["c14"] = $value;
		$showFields[] = "c14";
	}	
//	c15
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("c15", $data, $keylink);
		$showValues["c15"] = $value;
		$showFields[] = "c15";
	}	
//	c16
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("c16", $data, $keylink);
		$showValues["c16"] = $value;
		$showFields[] = "c16";
	}	
//	c18
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("c18", $data, $keylink);
		$showValues["c18"] = $value;
		$showFields[] = "c18";
	}	
//	c19
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("c19", $data, $keylink);
		$showValues["c19"] = $value;
		$showFields[] = "c19";
	}	
//	c20
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("c20", $data, $keylink);
		$showValues["c20"] = $value;
		$showFields[] = "c20";
	}	
//	c21
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("c21", $data, $keylink);
		$showValues["c21"] = $value;
		$showFields[] = "c21";
	}	
//	c22
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("c22", $data, $keylink);
		$showValues["c22"] = $value;
		$showFields[] = "c22";
	}	
//	c23
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("c23", $data, $keylink);
		$showValues["c23"] = $value;
		$showFields[] = "c23";
	}	
//	idSet
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("idSet", $data, $keylink);
		$showValues["idSet"] = $value;
		$showFields[] = "idSet";
	}	
		$showRawValues["idMovie"] = substr($data["idMovie"],0,100);
		$showRawValues["idFile"] = substr($data["idFile"],0,100);
		$showRawValues["c00"] = substr($data["c00"],0,100);
		$showRawValues["c01"] = substr($data["c01"],0,100);
		$showRawValues["c02"] = substr($data["c02"],0,100);
		$showRawValues["c03"] = substr($data["c03"],0,100);
		$showRawValues["c04"] = substr($data["c04"],0,100);
		$showRawValues["c05"] = substr($data["c05"],0,100);
		$showRawValues["c06"] = substr($data["c06"],0,100);
		$showRawValues["c07"] = substr($data["c07"],0,100);
		$showRawValues["c08"] = substr($data["c08"],0,100);
		$showRawValues["c09"] = substr($data["c09"],0,100);
		$showRawValues["c10"] = substr($data["c10"],0,100);
		$showRawValues["c11"] = substr($data["c11"],0,100);
		$showRawValues["c12"] = substr($data["c12"],0,100);
		$showRawValues["c13"] = substr($data["c13"],0,100);
		$showRawValues["c14"] = substr($data["c14"],0,100);
		$showRawValues["c15"] = substr($data["c15"],0,100);
		$showRawValues["c16"] = substr($data["c16"],0,100);
		$showRawValues["c17"] = substr($data["c17"],0,100);
		$showRawValues["c18"] = substr($data["c18"],0,100);
		$showRawValues["c19"] = substr($data["c19"],0,100);
		$showRawValues["c20"] = substr($data["c20"],0,100);
		$showRawValues["c21"] = substr($data["c21"],0,100);
		$showRawValues["c22"] = substr($data["c22"],0,100);
		$showRawValues["c23"] = substr($data["c23"],0,100);
		$showRawValues["idSet"] = substr($data["idSet"],0,100);
	
	// for custom expression for display field
	if ($dispFieldAlias)
	{
		$showValues[] = $data[$dispFieldAlias];	
		$showFields[] = $dispFieldAlias;
		$showRawValues[] = substr($data[$dispFieldAlias],0,100);
	}
	
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_POPUP)
	{	
		if($IsSaved && count($showValues))
		{
			$returnJSON['success'] = true;
			if($HaveData){
				$returnJSON['noKeys'] = false;
			}else{
				$returnJSON['noKeys'] = true;
			}
			
			$returnJSON['keys'] = $jsKeys;
			$returnJSON['keyFields'] = $keyFields;
			$returnJSON['vals'] = $showValues;
			$returnJSON['fields'] = $showFields;
			$returnJSON['rawVals'] = $showRawValues;
			$returnJSON['detKeys'] = $showDetailKeys;
			$returnJSON['userMess'] = $usermessage;
			$returnJSON['hrefs'] = $pageObject->buildDetailGridLinks($showDetailKeys);
			// add link and display value if list page is lookup with search
			if(array_key_exists('linkField', $linkAndDispVals))
			{
				$returnJSON['linkValue'] = $linkAndDispVals['linkField'];
				$returnJSON['displayValue'] = $linkAndDispVals['displayField'];
			}
			if($globalEvents->exists("IsRecordEditable", $strTableName))
			{ 
				if(!$globalEvents->IsRecordEditable($showRawValues, true, $strTableName))
					$returnJSON['nonEditable'] = true;
			}
			
			if($inlineadd==ADD_POPUP && isset($_SESSION[$strTableName."_count_captcha"]) || $_SESSION[$strTableName."_count_captcha"]>0 || $_SESSION[$strTableName."_count_captcha"]<5)
				$returnJSON['hideCaptcha'] = true;
		}
		else
		{
			$returnJSON['success'] = false;
			$returnJSON['message'] = $message;
			if(!$pageObject->isCaptchaOk)
				$returnJSON['captcha'] = false;
		}
		echo "<textarea>".htmlspecialchars(my_json_encode($returnJSON))."</textarea>";
		exit();
	}
} 

/////////////////////////////////////////////////////////////
if($inlineadd==ADD_MASTER)
{
	$respJSON = array();
	if(($_POST["a"]=="added" && $IsSaved))
	{
		$respJSON['afterAddId'] = $afterAdd_id;
		$respJSON['success'] = true;
		$respJSON['fields'] = $showFields;
		$respJSON['vals'] = $showValues;
		if($onFly){
			if($HaveData)
				$respJSON['noKeys'] = false;
			else
				$respJSON['noKeys'] = true;
			$respJSON['keys'] = $jsKeys;
			$respJSON['keyFields'] = $keyFields;
			$respJSON['rawVals'] = $showRawValues;
			$respJSON['detKeys'] = $showDetailKeys;
			$respJSON['userMess'] = $usermessage;
			$respJSON['hrefs'] = $pageObject->buildDetailGridLinks($showDetailKeys);
			if($globalEvents->exists("IsRecordEditable", $strTableName))
			{
				if(!$globalEvents->IsRecordEditable($showRawValues, true, $strTableName))
					$respJSON['nonEditable'] = true;
			}
		}
		$respJSON['mKeys'] = array();
		for($i=0;$i<count($dpParams['ids']);$i++)
		{
			$data=0;
			if(count($keys))
			{
				$where=KeyWhere($keys);
							$strSQL = $gQuery->gSQLWhere($where);
				LogInfo($strSQL);
				$rs = db_query($strSQL,$conn);
				$data = $pageObject->cipherer->DecryptFetchedArray($rs);
			}
			if(!$data)
				$data=$avalues;
			
			$mKeyId = 1;
			foreach($mKeys[$dpParams['strTableNames'][$i]] as $mk)
			{
				if($data[$mk])
					$respJSON['mKeys'][$dpParams['strTableNames'][$i]]['masterkey'.$mKeyId++] = $data[$mk];
				else
					$respJSON['mKeys'][$dpParams['strTableNames'][$i]]['masterkey'.$mKeyId++] = '';
			}
		}
		if(isset($_SESSION[$strTableName."_count_captcha"]) || $_SESSION[$strTableName."_count_captcha"]>0 || $_SESSION[$strTableName."_count_captcha"]<5)
			$respJSON['hidecaptcha'] = true;
	}
	else{
			$respJSON['success'] = false;
			if(!$pageObject->isCaptchaOk)
				$respJSON['captcha'] = false;
			else
				$respJSON['error'] = $message;
			if($onFly)
				$respJSON['message'] = $message;
		}
	echo "<textarea>".htmlspecialchars(my_json_encode($respJSON))."</textarea>";
	exit();
}

/////////////////////////////////////////////////////////////
//	prepare Edit Controls
/////////////////////////////////////////////////////////////

//	validation stuff
$regex='';
$regexmessage='';
$regextype = '';
$control = array();

foreach($addFields as $fName)
{
	$gfName = GoodFieldName($fName);
	$controls = array('controls'=>array());
	if(!$detailKeys || !in_array($fName, $detailKeys) || $fName == postvalue("category"))
	{
		$control[$gfName] = array();
		$control[$gfName]["func"] = "xt_buildeditcontrol";
		$control[$gfName]["params"] = array();
		$control[$gfName]["params"]["id"] = $id;
		$control[$gfName]["params"]["ptype"] = PAGE_ADD;
		$control[$gfName]["params"]["field"] = $fName;
		$control[$gfName]["params"]["value"] = @$defvalues[$fName];
		$control[$gfName]["params"]["pageObj"] = $pageObject;
		if($pageObject->pSet->isUseRTE($fName))
			$_SESSION[$strTableName."_".$fName."_rte"] = @$defvalues[$fName];
		
		//	Begin Add validation
		$arrValidate = $pageObject->pSet->getValidation($fName);
		$control[$gfName]["params"]["validate"] = $arrValidate;
		//	End Add validation
	}
	$controls["controls"]['ctrlInd'] = 0;
	$controls["controls"]['id'] = $id;
	$controls["controls"]['fieldName'] = $fName;
	//if richEditor for field
	if($pageObject->pSet->isUseRTE($fName))
	{
		if(!$detailKeys || !in_array($fName, $detailKeys))
			$control[$gfName]["params"]["mode"]="add";
		$controls["controls"]['mode'] = "add";
	}
	else
	{
		if($inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		{
			if(!$detailKeys || !in_array($fName, $detailKeys) || $fName == postvalue("category"))	
				$control[$gfName]["params"]["mode"]="inline_add";
			$controls["controls"]['mode'] = "inline_add";
		}
		else
		{
			if(!$detailKeys || !in_array($fName, $detailKeys) || $fName == postvalue("category"))	
				$control[$gfName]["params"]["mode"]="add";
			$controls["controls"]['mode'] = "add";
		}
	}
	
	if(!$detailKeys || !in_array($fName, $detailKeys))
		$xt->assignbyref($gfName."_editcontrol",$control[$gfName]);
	elseif($detailKeys && in_array($fName, $detailKeys))
		$controls["controls"]['value'] = @$defvalues[$fName];
	
	// category control field
	$strCategoryControl = $pageObject->isDependOnField($fName);
	
	if($strCategoryControl!==false && in_array($strCategoryControl, $addFields))
		$vals = array($fName => @$defvalues[$fName], $strCategoryControl => @$defvalues[$strCategoryControl]);
	else
		$vals = array($fName => @$defvalues[$fName]);
	
	$preload = $pageObject->fillPreload($fName, $vals);
	if($preload!==false)
	{
		$controls["controls"]['preloadData'] = $preload;
		if(!@$defvalues[$fName] && count($preload["vals"])>0)
			$defvalues[$fName] = $preload["vals"][0];
	}
	$pageObject->fillControlsMap($controls);
	
	//fill field tool tips
	$pageObject->fillFieldToolTips($fName);
	
	// fill special settings for timepicker
	if($pageObject->pSet->getEditFormat($fName) == 'Time')
		$pageObject->fillTimePickSettings($fName, @$defvalues[$fName]);
	
	if((($detailKeys && in_array($fName, $detailKeys)) || $fName == postvalue("category")) && array_key_exists($fName, $defvalues))
	{
		$value = $pageObject->showDBValue($fName, $defvalues);
		
		$xt->assign($gfName."_editcontrol", $value);
	}
}

//fill tab groups name and sections name to controls
$pageObject->fillCntrlTabGroups();

/////////////////////////////////////////////////////////////
if($pageObject->isShowDetailTables && ($inlineadd==ADD_SIMPLE || $inlineadd==ADD_POPUP) && !isMobile())
{
	if(count($dpParams['ids']))
	{
		$xt->assign("detail_tables",true);
		include('classes/listpage.php');
		include('classes/listpage_embed.php');
		include('classes/listpage_dpinline.php');
		include("classes/searchclause.php");
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
		$options["masterPageType"] = PAGE_ADD;
		$options["mainMasterPageType"] = PAGE_ADD;
		$options['masterTable'] = "Movies";
		$options['firstTime'] = 1;
		
		$strTableName = $dpParams['strTableNames'][$d];
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
		$mkr = 1;
		
		foreach($mKeys[$strTableName] as $mk)
		{
			if($defvalues[$mk])
				$options['masterKeysReq'][$mkr++] = $defvalues[$mk];
			else
				$options['masterKeysReq'][$mkr++] = '';
		}
		$listPageObject = ListPage::createListPage($strTableName,$options);
		
		// prepare code
		$listPageObject->prepareForBuildPage();
		$flyId = $listPageObject->recId+1;
		
		//set page events
		foreach($listPageObject->eventsObject->events as $event => $name)
			$listPageObject->xt->assign_event($event, $listPageObject->eventsObject, $event, array());
		
		//add detail settings to master settings
		$listPageObject->addControlsJSAndCSS();
		$listPageObject->fillSetCntrlMaps();
		$pageObject->jsSettings['tableSettings'][$strTableName]	= $listPageObject->jsSettings['tableSettings'][$strTableName];

		$dControlsMap[$strTableName] = $listPageObject->controlsMap;
		$dViewControlsMap[$strTableName] = $listPageObject->viewControlsMap;
		
		foreach($listPageObject->jsSettings["global"]["shortTNames"] as $tName => $shortTName){
			$pageObject->settingsMap["globalSettings"]["shortTNames"][$tName] = $shortTName;
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
	$pageObject->controlsMap['dControlsMap'] = $dControlsMap;
	$pageObject->viewControlsMap['dViewControlsMap'] = $dViewControlsMap;
	$strTableName = "Movies";
}
/////////////////////////////////////////////////////////////
//fill jsSettings and ControlsHTMLMap
$pageObject->fillSetCntrlMaps();

$pageObject->addCommonJs();

//For mobile version in apple device

if($inlineadd == ADD_SIMPLE)
{
	$pageObject->body['end'] = array();
	$pageObject->body['end']["method"] = "assignBodyEnd";
	$pageObject->body['end']["object"] = &$pageObject;
	$xt->assign("body", $pageObject->body);
	$xt->assign("flybody",true);
}

if($inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_MASTER || $inlineadd==ADD_POPUP)
{ 
	$xt->assign("footer",false);
	$xt->assign("header",false);
	$xt->assign("flybody", $pageObject->body);
	$xt->assign("body",true);
}	

$xt->assign("style_block",true);
$pageObject->xt->assign("legend", true);

if($eventObj->exists("BeforeShowAdd"))
	$eventObj->BeforeShowAdd($xt, $templatefile, $pageObject);
	
if($inlineadd != ADD_SIMPLE)
{
	$returnJSON['controlsMap'] = $pageObject->controlsHTMLMap;
	$returnJSON['viewControlsMap'] = $pageObject->viewControlsHTMLMap;
	$returnJSON['settings'] = $pageObject->jsSettings;	
}

if($inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
{
	$xt->load_template($templatefile);
	$returnJSON['html'] = $xt->fetch_loaded('style_block').$xt->fetch_loaded('body');
	if(count($pageObject->includes_css))
		$returnJSON['CSSFiles'] = array_unique($pageObject->includes_css);
	if(count($pageObject->includes_cssIE))
		$returnJSON['CSSFilesIE'] = array_unique($pageObject->includes_cssIE);
	$returnJSON["additionalJS"] = $pageObject->grabAllJsFiles();
	$returnJSON['idStartFrom'] = $id+1;	
	echo (my_json_encode($returnJSON)); 
}
elseif ($inlineadd == ADD_INLINE)
{
	$xt->load_template($templatefile);
	$returnJSON["html"] = array();
	foreach($addFields as $fName)
	{
		$returnJSON["html"][$fName] = $xt->fetchVar(GoodFieldName($fName)."_editcontrol");	
	}	
	$returnJSON["additionalJS"] = $pageObject->grabAllJsFiles();
	$returnJSON["additionalCSS"] = $pageObject->grabAllCSSFiles();
	echo (my_json_encode($returnJSON)); 
}
else
	$xt->display($templatefile);

function GetAddedDataLookupQuery($pageObject, $keys, $forLookup)
{
	global $conn, $strTableName, $strOriginalTableName;
	
	$LookupSQL = "";
	$linkfield = "";
	$dispfield = "";
	$noBlobReplace = false;
	$lookupFieldName = "";
	
	if($LookupSQL && $nLookupType != LT_QUERY)
		$LookupSQL.=" from ".AddTableWrappers($strOriginalTableName);
		
	$data = 0;
	$lookupIndexes = array("linkFieldIndex" => 0, "displayFieldIndex" => 0);
	if(count($keys))
	{
		$where = KeyWhere($keys);
		if($nLookupType == LT_QUERY){
			$LookupSQL = $lookupQueryObj->toSql(whereAdd($lookupQueryObj->m_where->toSql($lookupQueryObj), $where));
		}else 
			$LookupSQL.=" where ".$where;
		$lookupIndexes = GetLookupFieldsIndexes($lookupPSet, $lookupFieldName);
		LogInfo($LookupSQL);
		if($forLookup){
			$rs=db_query($LookupSQL,$conn);
			$data = $pageObject->cipherer->DecryptFetchedArray($rs);
		}else if($LookupSQL)
		{
			$rs = db_query($LookupSQL,$conn);
			$data = db_fetch_numarray($rs);
			$data[$lookupIndexes["linkFieldIndex"]] = $pageObject->cipherer->DecryptField($linkFieldName, $data[$lookupIndexes["linkFieldIndex"]]);
			if($nLookupType == LT_QUERY)
				$data[$lookupIndexes["displayFieldIndex"]] = $pageObject->cipherer->DecryptField($dispfield, $data[$lookupIndexes["displayFieldIndex"]]);		
		}
	}

	return array($data, array("linkField" => $linkFieldName, "displayField" => $dispfield
		, "linkFieldIndex" => $lookupIndexes["linkFieldIndex"], "displayFieldIndex" => $lookupIndexes["displayFieldIndex"]));
}	
	
?>
