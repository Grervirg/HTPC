<?php
require_once(getabspath("classes/cipherer.php"));
$tdatamusicvideoview = array();
	$tdatamusicvideoview[".NumberOfChars"] = 80; 
	$tdatamusicvideoview[".ShortName"] = "musicvideoview";
	$tdatamusicvideoview[".OwnerID"] = "";
	$tdatamusicvideoview[".OriginalTable"] = "musicvideoview";

//	field labels
$fieldLabelsmusicvideoview = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmusicvideoview["English"] = array();
	$fieldToolTipsmusicvideoview["English"] = array();
	$fieldLabelsmusicvideoview["English"]["idMVideo"] = "Id MVideo";
	$fieldToolTipsmusicvideoview["English"]["idMVideo"] = "";
	$fieldLabelsmusicvideoview["English"]["idFile"] = "Id File";
	$fieldToolTipsmusicvideoview["English"]["idFile"] = "";
	$fieldLabelsmusicvideoview["English"]["c00"] = "C00";
	$fieldToolTipsmusicvideoview["English"]["c00"] = "";
	$fieldLabelsmusicvideoview["English"]["c01"] = "C01";
	$fieldToolTipsmusicvideoview["English"]["c01"] = "";
	$fieldLabelsmusicvideoview["English"]["c02"] = "C02";
	$fieldToolTipsmusicvideoview["English"]["c02"] = "";
	$fieldLabelsmusicvideoview["English"]["c03"] = "C03";
	$fieldToolTipsmusicvideoview["English"]["c03"] = "";
	$fieldLabelsmusicvideoview["English"]["c04"] = "C04";
	$fieldToolTipsmusicvideoview["English"]["c04"] = "";
	$fieldLabelsmusicvideoview["English"]["c05"] = "C05";
	$fieldToolTipsmusicvideoview["English"]["c05"] = "";
	$fieldLabelsmusicvideoview["English"]["c06"] = "C06";
	$fieldToolTipsmusicvideoview["English"]["c06"] = "";
	$fieldLabelsmusicvideoview["English"]["c07"] = "C07";
	$fieldToolTipsmusicvideoview["English"]["c07"] = "";
	$fieldLabelsmusicvideoview["English"]["c08"] = "C08";
	$fieldToolTipsmusicvideoview["English"]["c08"] = "";
	$fieldLabelsmusicvideoview["English"]["c09"] = "C09";
	$fieldToolTipsmusicvideoview["English"]["c09"] = "";
	$fieldLabelsmusicvideoview["English"]["c10"] = "C10";
	$fieldToolTipsmusicvideoview["English"]["c10"] = "";
	$fieldLabelsmusicvideoview["English"]["c11"] = "C11";
	$fieldToolTipsmusicvideoview["English"]["c11"] = "";
	$fieldLabelsmusicvideoview["English"]["c12"] = "C12";
	$fieldToolTipsmusicvideoview["English"]["c12"] = "";
	$fieldLabelsmusicvideoview["English"]["c13"] = "C13";
	$fieldToolTipsmusicvideoview["English"]["c13"] = "";
	$fieldLabelsmusicvideoview["English"]["c14"] = "C14";
	$fieldToolTipsmusicvideoview["English"]["c14"] = "";
	$fieldLabelsmusicvideoview["English"]["c15"] = "C15";
	$fieldToolTipsmusicvideoview["English"]["c15"] = "";
	$fieldLabelsmusicvideoview["English"]["c16"] = "C16";
	$fieldToolTipsmusicvideoview["English"]["c16"] = "";
	$fieldLabelsmusicvideoview["English"]["c17"] = "C17";
	$fieldToolTipsmusicvideoview["English"]["c17"] = "";
	$fieldLabelsmusicvideoview["English"]["c18"] = "C18";
	$fieldToolTipsmusicvideoview["English"]["c18"] = "";
	$fieldLabelsmusicvideoview["English"]["c19"] = "C19";
	$fieldToolTipsmusicvideoview["English"]["c19"] = "";
	$fieldLabelsmusicvideoview["English"]["c20"] = "C20";
	$fieldToolTipsmusicvideoview["English"]["c20"] = "";
	$fieldLabelsmusicvideoview["English"]["c21"] = "C21";
	$fieldToolTipsmusicvideoview["English"]["c21"] = "";
	$fieldLabelsmusicvideoview["English"]["c22"] = "C22";
	$fieldToolTipsmusicvideoview["English"]["c22"] = "";
	$fieldLabelsmusicvideoview["English"]["c23"] = "C23";
	$fieldToolTipsmusicvideoview["English"]["c23"] = "";
	$fieldLabelsmusicvideoview["English"]["strFileName"] = "Str File Name";
	$fieldToolTipsmusicvideoview["English"]["strFileName"] = "";
	$fieldLabelsmusicvideoview["English"]["strPath"] = "Str Path";
	$fieldToolTipsmusicvideoview["English"]["strPath"] = "";
	$fieldLabelsmusicvideoview["English"]["playCount"] = "Play Count";
	$fieldToolTipsmusicvideoview["English"]["playCount"] = "";
	$fieldLabelsmusicvideoview["English"]["lastPlayed"] = "Last Played";
	$fieldToolTipsmusicvideoview["English"]["lastPlayed"] = "";
	$fieldLabelsmusicvideoview["English"]["dateAdded"] = "Date Added";
	$fieldToolTipsmusicvideoview["English"]["dateAdded"] = "";
	$fieldLabelsmusicvideoview["English"]["resumeTimeInSeconds"] = "Resume Time In Seconds";
	$fieldToolTipsmusicvideoview["English"]["resumeTimeInSeconds"] = "";
	$fieldLabelsmusicvideoview["English"]["totalTimeInSeconds"] = "Total Time In Seconds";
	$fieldToolTipsmusicvideoview["English"]["totalTimeInSeconds"] = "";
	if (count($fieldToolTipsmusicvideoview["English"]))
		$tdatamusicvideoview[".isUseToolTips"] = true;
}
	
	
	$tdatamusicvideoview[".NCSearch"] = true;



$tdatamusicvideoview[".shortTableName"] = "musicvideoview";
$tdatamusicvideoview[".nSecOptions"] = 0;
$tdatamusicvideoview[".recsPerRowList"] = 1;
$tdatamusicvideoview[".mainTableOwnerID"] = "";
$tdatamusicvideoview[".moveNext"] = 1;
$tdatamusicvideoview[".nType"] = 0;

$tdatamusicvideoview[".strOriginalTableName"] = "musicvideoview";




$tdatamusicvideoview[".showAddInPopup"] = false;

$tdatamusicvideoview[".showEditInPopup"] = false;

$tdatamusicvideoview[".showViewInPopup"] = false;

$tdatamusicvideoview[".fieldsForRegister"] = array();

$tdatamusicvideoview[".listAjax"] = false;

	$tdatamusicvideoview[".audit"] = false;

	$tdatamusicvideoview[".locking"] = false;

$tdatamusicvideoview[".listIcons"] = true;

$tdatamusicvideoview[".exportTo"] = true;

$tdatamusicvideoview[".printFriendly"] = true;


$tdatamusicvideoview[".showSimpleSearchOptions"] = false;

$tdatamusicvideoview[".showSearchPanel"] = true;

if (isMobile())
	$tdatamusicvideoview[".isUseAjaxSuggest"] = false;
else 
	$tdatamusicvideoview[".isUseAjaxSuggest"] = true;

$tdatamusicvideoview[".rowHighlite"] = true;

// button handlers file names

$tdatamusicvideoview[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamusicvideoview[".isUseTimeForSearch"] = false;




$tdatamusicvideoview[".allSearchFields"] = array();

$tdatamusicvideoview[".allSearchFields"][] = "idMVideo";
$tdatamusicvideoview[".allSearchFields"][] = "idFile";
$tdatamusicvideoview[".allSearchFields"][] = "c00";
$tdatamusicvideoview[".allSearchFields"][] = "c01";
$tdatamusicvideoview[".allSearchFields"][] = "c02";
$tdatamusicvideoview[".allSearchFields"][] = "c03";
$tdatamusicvideoview[".allSearchFields"][] = "c04";
$tdatamusicvideoview[".allSearchFields"][] = "c05";
$tdatamusicvideoview[".allSearchFields"][] = "c06";
$tdatamusicvideoview[".allSearchFields"][] = "c07";
$tdatamusicvideoview[".allSearchFields"][] = "c08";
$tdatamusicvideoview[".allSearchFields"][] = "c09";
$tdatamusicvideoview[".allSearchFields"][] = "c10";
$tdatamusicvideoview[".allSearchFields"][] = "c11";
$tdatamusicvideoview[".allSearchFields"][] = "c12";
$tdatamusicvideoview[".allSearchFields"][] = "c13";
$tdatamusicvideoview[".allSearchFields"][] = "c14";
$tdatamusicvideoview[".allSearchFields"][] = "c15";
$tdatamusicvideoview[".allSearchFields"][] = "c16";
$tdatamusicvideoview[".allSearchFields"][] = "c17";
$tdatamusicvideoview[".allSearchFields"][] = "c18";
$tdatamusicvideoview[".allSearchFields"][] = "c19";
$tdatamusicvideoview[".allSearchFields"][] = "c20";
$tdatamusicvideoview[".allSearchFields"][] = "c21";
$tdatamusicvideoview[".allSearchFields"][] = "c22";
$tdatamusicvideoview[".allSearchFields"][] = "c23";
$tdatamusicvideoview[".allSearchFields"][] = "strFileName";
$tdatamusicvideoview[".allSearchFields"][] = "strPath";
$tdatamusicvideoview[".allSearchFields"][] = "playCount";
$tdatamusicvideoview[".allSearchFields"][] = "lastPlayed";
$tdatamusicvideoview[".allSearchFields"][] = "dateAdded";
$tdatamusicvideoview[".allSearchFields"][] = "resumeTimeInSeconds";
$tdatamusicvideoview[".allSearchFields"][] = "totalTimeInSeconds";

$tdatamusicvideoview[".googleLikeFields"][] = "idMVideo";
$tdatamusicvideoview[".googleLikeFields"][] = "idFile";
$tdatamusicvideoview[".googleLikeFields"][] = "c00";
$tdatamusicvideoview[".googleLikeFields"][] = "c01";
$tdatamusicvideoview[".googleLikeFields"][] = "c02";
$tdatamusicvideoview[".googleLikeFields"][] = "c03";
$tdatamusicvideoview[".googleLikeFields"][] = "c04";
$tdatamusicvideoview[".googleLikeFields"][] = "c05";
$tdatamusicvideoview[".googleLikeFields"][] = "c06";
$tdatamusicvideoview[".googleLikeFields"][] = "c07";
$tdatamusicvideoview[".googleLikeFields"][] = "c08";
$tdatamusicvideoview[".googleLikeFields"][] = "c09";
$tdatamusicvideoview[".googleLikeFields"][] = "c10";
$tdatamusicvideoview[".googleLikeFields"][] = "c11";
$tdatamusicvideoview[".googleLikeFields"][] = "c12";
$tdatamusicvideoview[".googleLikeFields"][] = "c13";
$tdatamusicvideoview[".googleLikeFields"][] = "c14";
$tdatamusicvideoview[".googleLikeFields"][] = "c15";
$tdatamusicvideoview[".googleLikeFields"][] = "c16";
$tdatamusicvideoview[".googleLikeFields"][] = "c17";
$tdatamusicvideoview[".googleLikeFields"][] = "c18";
$tdatamusicvideoview[".googleLikeFields"][] = "c19";
$tdatamusicvideoview[".googleLikeFields"][] = "c20";
$tdatamusicvideoview[".googleLikeFields"][] = "c21";
$tdatamusicvideoview[".googleLikeFields"][] = "c22";
$tdatamusicvideoview[".googleLikeFields"][] = "c23";
$tdatamusicvideoview[".googleLikeFields"][] = "strFileName";
$tdatamusicvideoview[".googleLikeFields"][] = "strPath";
$tdatamusicvideoview[".googleLikeFields"][] = "playCount";
$tdatamusicvideoview[".googleLikeFields"][] = "lastPlayed";
$tdatamusicvideoview[".googleLikeFields"][] = "dateAdded";
$tdatamusicvideoview[".googleLikeFields"][] = "resumeTimeInSeconds";
$tdatamusicvideoview[".googleLikeFields"][] = "totalTimeInSeconds";


$tdatamusicvideoview[".advSearchFields"][] = "idMVideo";
$tdatamusicvideoview[".advSearchFields"][] = "idFile";
$tdatamusicvideoview[".advSearchFields"][] = "c00";
$tdatamusicvideoview[".advSearchFields"][] = "c01";
$tdatamusicvideoview[".advSearchFields"][] = "c02";
$tdatamusicvideoview[".advSearchFields"][] = "c03";
$tdatamusicvideoview[".advSearchFields"][] = "c04";
$tdatamusicvideoview[".advSearchFields"][] = "c05";
$tdatamusicvideoview[".advSearchFields"][] = "c06";
$tdatamusicvideoview[".advSearchFields"][] = "c07";
$tdatamusicvideoview[".advSearchFields"][] = "c08";
$tdatamusicvideoview[".advSearchFields"][] = "c09";
$tdatamusicvideoview[".advSearchFields"][] = "c10";
$tdatamusicvideoview[".advSearchFields"][] = "c11";
$tdatamusicvideoview[".advSearchFields"][] = "c12";
$tdatamusicvideoview[".advSearchFields"][] = "c13";
$tdatamusicvideoview[".advSearchFields"][] = "c14";
$tdatamusicvideoview[".advSearchFields"][] = "c15";
$tdatamusicvideoview[".advSearchFields"][] = "c16";
$tdatamusicvideoview[".advSearchFields"][] = "c17";
$tdatamusicvideoview[".advSearchFields"][] = "c18";
$tdatamusicvideoview[".advSearchFields"][] = "c19";
$tdatamusicvideoview[".advSearchFields"][] = "c20";
$tdatamusicvideoview[".advSearchFields"][] = "c21";
$tdatamusicvideoview[".advSearchFields"][] = "c22";
$tdatamusicvideoview[".advSearchFields"][] = "c23";
$tdatamusicvideoview[".advSearchFields"][] = "strFileName";
$tdatamusicvideoview[".advSearchFields"][] = "strPath";
$tdatamusicvideoview[".advSearchFields"][] = "playCount";
$tdatamusicvideoview[".advSearchFields"][] = "lastPlayed";
$tdatamusicvideoview[".advSearchFields"][] = "dateAdded";
$tdatamusicvideoview[".advSearchFields"][] = "resumeTimeInSeconds";
$tdatamusicvideoview[".advSearchFields"][] = "totalTimeInSeconds";

$tdatamusicvideoview[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatamusicvideoview[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamusicvideoview[".strOrderBy"] = $tstrOrderBy;

$tdatamusicvideoview[".orderindexes"] = array();

$tdatamusicvideoview[".sqlHead"] = "SELECT idMVideo,   idFile,   c00,   c01,   c02,   c03,   c04,   c05,   c06,   c07,   c08,   c09,   c10,   c11,   c12,   c13,   c14,   c15,   c16,   c17,   c18,   c19,   c20,   c21,   c22,   c23,   strFileName,   strPath,   playCount,   lastPlayed,   dateAdded,   resumeTimeInSeconds,   totalTimeInSeconds";
$tdatamusicvideoview[".sqlFrom"] = "FROM musicvideoview";
$tdatamusicvideoview[".sqlWhereExpr"] = "";
$tdatamusicvideoview[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamusicvideoview[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamusicvideoview[".arrGroupsPerPage"] = $arrGPP;

$tableKeysmusicvideoview = array();
$tdatamusicvideoview[".Keys"] = $tableKeysmusicvideoview;

$tdatamusicvideoview[".listFields"] = array();
$tdatamusicvideoview[".listFields"][] = "idMVideo";
$tdatamusicvideoview[".listFields"][] = "idFile";
$tdatamusicvideoview[".listFields"][] = "c00";
$tdatamusicvideoview[".listFields"][] = "c01";
$tdatamusicvideoview[".listFields"][] = "c02";
$tdatamusicvideoview[".listFields"][] = "c03";
$tdatamusicvideoview[".listFields"][] = "c04";
$tdatamusicvideoview[".listFields"][] = "c05";
$tdatamusicvideoview[".listFields"][] = "c06";
$tdatamusicvideoview[".listFields"][] = "c07";
$tdatamusicvideoview[".listFields"][] = "c08";
$tdatamusicvideoview[".listFields"][] = "c09";
$tdatamusicvideoview[".listFields"][] = "c10";
$tdatamusicvideoview[".listFields"][] = "c11";
$tdatamusicvideoview[".listFields"][] = "c12";
$tdatamusicvideoview[".listFields"][] = "c13";
$tdatamusicvideoview[".listFields"][] = "c14";
$tdatamusicvideoview[".listFields"][] = "c15";
$tdatamusicvideoview[".listFields"][] = "c16";
$tdatamusicvideoview[".listFields"][] = "c17";
$tdatamusicvideoview[".listFields"][] = "c18";
$tdatamusicvideoview[".listFields"][] = "c19";
$tdatamusicvideoview[".listFields"][] = "c20";
$tdatamusicvideoview[".listFields"][] = "c21";
$tdatamusicvideoview[".listFields"][] = "c22";
$tdatamusicvideoview[".listFields"][] = "c23";
$tdatamusicvideoview[".listFields"][] = "strFileName";
$tdatamusicvideoview[".listFields"][] = "strPath";
$tdatamusicvideoview[".listFields"][] = "playCount";
$tdatamusicvideoview[".listFields"][] = "lastPlayed";
$tdatamusicvideoview[".listFields"][] = "dateAdded";
$tdatamusicvideoview[".listFields"][] = "resumeTimeInSeconds";
$tdatamusicvideoview[".listFields"][] = "totalTimeInSeconds";

$tdatamusicvideoview[".viewFields"] = array();
$tdatamusicvideoview[".viewFields"][] = "idMVideo";
$tdatamusicvideoview[".viewFields"][] = "idFile";
$tdatamusicvideoview[".viewFields"][] = "c00";
$tdatamusicvideoview[".viewFields"][] = "c01";
$tdatamusicvideoview[".viewFields"][] = "c02";
$tdatamusicvideoview[".viewFields"][] = "c03";
$tdatamusicvideoview[".viewFields"][] = "c04";
$tdatamusicvideoview[".viewFields"][] = "c05";
$tdatamusicvideoview[".viewFields"][] = "c06";
$tdatamusicvideoview[".viewFields"][] = "c07";
$tdatamusicvideoview[".viewFields"][] = "c08";
$tdatamusicvideoview[".viewFields"][] = "c09";
$tdatamusicvideoview[".viewFields"][] = "c10";
$tdatamusicvideoview[".viewFields"][] = "c11";
$tdatamusicvideoview[".viewFields"][] = "c12";
$tdatamusicvideoview[".viewFields"][] = "c13";
$tdatamusicvideoview[".viewFields"][] = "c14";
$tdatamusicvideoview[".viewFields"][] = "c15";
$tdatamusicvideoview[".viewFields"][] = "c16";
$tdatamusicvideoview[".viewFields"][] = "c17";
$tdatamusicvideoview[".viewFields"][] = "c18";
$tdatamusicvideoview[".viewFields"][] = "c19";
$tdatamusicvideoview[".viewFields"][] = "c20";
$tdatamusicvideoview[".viewFields"][] = "c21";
$tdatamusicvideoview[".viewFields"][] = "c22";
$tdatamusicvideoview[".viewFields"][] = "c23";
$tdatamusicvideoview[".viewFields"][] = "strFileName";
$tdatamusicvideoview[".viewFields"][] = "strPath";
$tdatamusicvideoview[".viewFields"][] = "playCount";
$tdatamusicvideoview[".viewFields"][] = "lastPlayed";
$tdatamusicvideoview[".viewFields"][] = "dateAdded";
$tdatamusicvideoview[".viewFields"][] = "resumeTimeInSeconds";
$tdatamusicvideoview[".viewFields"][] = "totalTimeInSeconds";

$tdatamusicvideoview[".addFields"] = array();
$tdatamusicvideoview[".addFields"][] = "idMVideo";
$tdatamusicvideoview[".addFields"][] = "idFile";
$tdatamusicvideoview[".addFields"][] = "c00";
$tdatamusicvideoview[".addFields"][] = "c01";
$tdatamusicvideoview[".addFields"][] = "c02";
$tdatamusicvideoview[".addFields"][] = "c03";
$tdatamusicvideoview[".addFields"][] = "c04";
$tdatamusicvideoview[".addFields"][] = "c05";
$tdatamusicvideoview[".addFields"][] = "c06";
$tdatamusicvideoview[".addFields"][] = "c07";
$tdatamusicvideoview[".addFields"][] = "c08";
$tdatamusicvideoview[".addFields"][] = "c09";
$tdatamusicvideoview[".addFields"][] = "c10";
$tdatamusicvideoview[".addFields"][] = "c11";
$tdatamusicvideoview[".addFields"][] = "c12";
$tdatamusicvideoview[".addFields"][] = "c13";
$tdatamusicvideoview[".addFields"][] = "c14";
$tdatamusicvideoview[".addFields"][] = "c15";
$tdatamusicvideoview[".addFields"][] = "c16";
$tdatamusicvideoview[".addFields"][] = "c17";
$tdatamusicvideoview[".addFields"][] = "c18";
$tdatamusicvideoview[".addFields"][] = "c19";
$tdatamusicvideoview[".addFields"][] = "c20";
$tdatamusicvideoview[".addFields"][] = "c21";
$tdatamusicvideoview[".addFields"][] = "c22";
$tdatamusicvideoview[".addFields"][] = "c23";
$tdatamusicvideoview[".addFields"][] = "strFileName";
$tdatamusicvideoview[".addFields"][] = "strPath";
$tdatamusicvideoview[".addFields"][] = "playCount";
$tdatamusicvideoview[".addFields"][] = "lastPlayed";
$tdatamusicvideoview[".addFields"][] = "dateAdded";
$tdatamusicvideoview[".addFields"][] = "resumeTimeInSeconds";
$tdatamusicvideoview[".addFields"][] = "totalTimeInSeconds";

$tdatamusicvideoview[".inlineAddFields"] = array();
$tdatamusicvideoview[".inlineAddFields"][] = "idMVideo";
$tdatamusicvideoview[".inlineAddFields"][] = "idFile";
$tdatamusicvideoview[".inlineAddFields"][] = "c00";
$tdatamusicvideoview[".inlineAddFields"][] = "c01";
$tdatamusicvideoview[".inlineAddFields"][] = "c02";
$tdatamusicvideoview[".inlineAddFields"][] = "c03";
$tdatamusicvideoview[".inlineAddFields"][] = "c04";
$tdatamusicvideoview[".inlineAddFields"][] = "c05";
$tdatamusicvideoview[".inlineAddFields"][] = "c06";
$tdatamusicvideoview[".inlineAddFields"][] = "c07";
$tdatamusicvideoview[".inlineAddFields"][] = "c08";
$tdatamusicvideoview[".inlineAddFields"][] = "c09";
$tdatamusicvideoview[".inlineAddFields"][] = "c10";
$tdatamusicvideoview[".inlineAddFields"][] = "c11";
$tdatamusicvideoview[".inlineAddFields"][] = "c12";
$tdatamusicvideoview[".inlineAddFields"][] = "c13";
$tdatamusicvideoview[".inlineAddFields"][] = "c14";
$tdatamusicvideoview[".inlineAddFields"][] = "c15";
$tdatamusicvideoview[".inlineAddFields"][] = "c16";
$tdatamusicvideoview[".inlineAddFields"][] = "c17";
$tdatamusicvideoview[".inlineAddFields"][] = "c18";
$tdatamusicvideoview[".inlineAddFields"][] = "c19";
$tdatamusicvideoview[".inlineAddFields"][] = "c20";
$tdatamusicvideoview[".inlineAddFields"][] = "c21";
$tdatamusicvideoview[".inlineAddFields"][] = "c22";
$tdatamusicvideoview[".inlineAddFields"][] = "c23";
$tdatamusicvideoview[".inlineAddFields"][] = "strFileName";
$tdatamusicvideoview[".inlineAddFields"][] = "strPath";
$tdatamusicvideoview[".inlineAddFields"][] = "playCount";
$tdatamusicvideoview[".inlineAddFields"][] = "lastPlayed";
$tdatamusicvideoview[".inlineAddFields"][] = "dateAdded";
$tdatamusicvideoview[".inlineAddFields"][] = "resumeTimeInSeconds";
$tdatamusicvideoview[".inlineAddFields"][] = "totalTimeInSeconds";

$tdatamusicvideoview[".editFields"] = array();
$tdatamusicvideoview[".editFields"][] = "idMVideo";
$tdatamusicvideoview[".editFields"][] = "idFile";
$tdatamusicvideoview[".editFields"][] = "c00";
$tdatamusicvideoview[".editFields"][] = "c01";
$tdatamusicvideoview[".editFields"][] = "c02";
$tdatamusicvideoview[".editFields"][] = "c03";
$tdatamusicvideoview[".editFields"][] = "c04";
$tdatamusicvideoview[".editFields"][] = "c05";
$tdatamusicvideoview[".editFields"][] = "c06";
$tdatamusicvideoview[".editFields"][] = "c07";
$tdatamusicvideoview[".editFields"][] = "c08";
$tdatamusicvideoview[".editFields"][] = "c09";
$tdatamusicvideoview[".editFields"][] = "c10";
$tdatamusicvideoview[".editFields"][] = "c11";
$tdatamusicvideoview[".editFields"][] = "c12";
$tdatamusicvideoview[".editFields"][] = "c13";
$tdatamusicvideoview[".editFields"][] = "c14";
$tdatamusicvideoview[".editFields"][] = "c15";
$tdatamusicvideoview[".editFields"][] = "c16";
$tdatamusicvideoview[".editFields"][] = "c17";
$tdatamusicvideoview[".editFields"][] = "c18";
$tdatamusicvideoview[".editFields"][] = "c19";
$tdatamusicvideoview[".editFields"][] = "c20";
$tdatamusicvideoview[".editFields"][] = "c21";
$tdatamusicvideoview[".editFields"][] = "c22";
$tdatamusicvideoview[".editFields"][] = "c23";
$tdatamusicvideoview[".editFields"][] = "strFileName";
$tdatamusicvideoview[".editFields"][] = "strPath";
$tdatamusicvideoview[".editFields"][] = "playCount";
$tdatamusicvideoview[".editFields"][] = "lastPlayed";
$tdatamusicvideoview[".editFields"][] = "dateAdded";
$tdatamusicvideoview[".editFields"][] = "resumeTimeInSeconds";
$tdatamusicvideoview[".editFields"][] = "totalTimeInSeconds";

$tdatamusicvideoview[".inlineEditFields"] = array();
$tdatamusicvideoview[".inlineEditFields"][] = "idMVideo";
$tdatamusicvideoview[".inlineEditFields"][] = "idFile";
$tdatamusicvideoview[".inlineEditFields"][] = "c00";
$tdatamusicvideoview[".inlineEditFields"][] = "c01";
$tdatamusicvideoview[".inlineEditFields"][] = "c02";
$tdatamusicvideoview[".inlineEditFields"][] = "c03";
$tdatamusicvideoview[".inlineEditFields"][] = "c04";
$tdatamusicvideoview[".inlineEditFields"][] = "c05";
$tdatamusicvideoview[".inlineEditFields"][] = "c06";
$tdatamusicvideoview[".inlineEditFields"][] = "c07";
$tdatamusicvideoview[".inlineEditFields"][] = "c08";
$tdatamusicvideoview[".inlineEditFields"][] = "c09";
$tdatamusicvideoview[".inlineEditFields"][] = "c10";
$tdatamusicvideoview[".inlineEditFields"][] = "c11";
$tdatamusicvideoview[".inlineEditFields"][] = "c12";
$tdatamusicvideoview[".inlineEditFields"][] = "c13";
$tdatamusicvideoview[".inlineEditFields"][] = "c14";
$tdatamusicvideoview[".inlineEditFields"][] = "c15";
$tdatamusicvideoview[".inlineEditFields"][] = "c16";
$tdatamusicvideoview[".inlineEditFields"][] = "c17";
$tdatamusicvideoview[".inlineEditFields"][] = "c18";
$tdatamusicvideoview[".inlineEditFields"][] = "c19";
$tdatamusicvideoview[".inlineEditFields"][] = "c20";
$tdatamusicvideoview[".inlineEditFields"][] = "c21";
$tdatamusicvideoview[".inlineEditFields"][] = "c22";
$tdatamusicvideoview[".inlineEditFields"][] = "c23";
$tdatamusicvideoview[".inlineEditFields"][] = "strFileName";
$tdatamusicvideoview[".inlineEditFields"][] = "strPath";
$tdatamusicvideoview[".inlineEditFields"][] = "playCount";
$tdatamusicvideoview[".inlineEditFields"][] = "lastPlayed";
$tdatamusicvideoview[".inlineEditFields"][] = "dateAdded";
$tdatamusicvideoview[".inlineEditFields"][] = "resumeTimeInSeconds";
$tdatamusicvideoview[".inlineEditFields"][] = "totalTimeInSeconds";

$tdatamusicvideoview[".exportFields"] = array();
$tdatamusicvideoview[".exportFields"][] = "idMVideo";
$tdatamusicvideoview[".exportFields"][] = "idFile";
$tdatamusicvideoview[".exportFields"][] = "c00";
$tdatamusicvideoview[".exportFields"][] = "c01";
$tdatamusicvideoview[".exportFields"][] = "c02";
$tdatamusicvideoview[".exportFields"][] = "c03";
$tdatamusicvideoview[".exportFields"][] = "c04";
$tdatamusicvideoview[".exportFields"][] = "c05";
$tdatamusicvideoview[".exportFields"][] = "c06";
$tdatamusicvideoview[".exportFields"][] = "c07";
$tdatamusicvideoview[".exportFields"][] = "c08";
$tdatamusicvideoview[".exportFields"][] = "c09";
$tdatamusicvideoview[".exportFields"][] = "c10";
$tdatamusicvideoview[".exportFields"][] = "c11";
$tdatamusicvideoview[".exportFields"][] = "c12";
$tdatamusicvideoview[".exportFields"][] = "c13";
$tdatamusicvideoview[".exportFields"][] = "c14";
$tdatamusicvideoview[".exportFields"][] = "c15";
$tdatamusicvideoview[".exportFields"][] = "c16";
$tdatamusicvideoview[".exportFields"][] = "c17";
$tdatamusicvideoview[".exportFields"][] = "c18";
$tdatamusicvideoview[".exportFields"][] = "c19";
$tdatamusicvideoview[".exportFields"][] = "c20";
$tdatamusicvideoview[".exportFields"][] = "c21";
$tdatamusicvideoview[".exportFields"][] = "c22";
$tdatamusicvideoview[".exportFields"][] = "c23";
$tdatamusicvideoview[".exportFields"][] = "strFileName";
$tdatamusicvideoview[".exportFields"][] = "strPath";
$tdatamusicvideoview[".exportFields"][] = "playCount";
$tdatamusicvideoview[".exportFields"][] = "lastPlayed";
$tdatamusicvideoview[".exportFields"][] = "dateAdded";
$tdatamusicvideoview[".exportFields"][] = "resumeTimeInSeconds";
$tdatamusicvideoview[".exportFields"][] = "totalTimeInSeconds";

$tdatamusicvideoview[".printFields"] = array();
$tdatamusicvideoview[".printFields"][] = "idMVideo";
$tdatamusicvideoview[".printFields"][] = "idFile";
$tdatamusicvideoview[".printFields"][] = "c00";
$tdatamusicvideoview[".printFields"][] = "c01";
$tdatamusicvideoview[".printFields"][] = "c02";
$tdatamusicvideoview[".printFields"][] = "c03";
$tdatamusicvideoview[".printFields"][] = "c04";
$tdatamusicvideoview[".printFields"][] = "c05";
$tdatamusicvideoview[".printFields"][] = "c06";
$tdatamusicvideoview[".printFields"][] = "c07";
$tdatamusicvideoview[".printFields"][] = "c08";
$tdatamusicvideoview[".printFields"][] = "c09";
$tdatamusicvideoview[".printFields"][] = "c10";
$tdatamusicvideoview[".printFields"][] = "c11";
$tdatamusicvideoview[".printFields"][] = "c12";
$tdatamusicvideoview[".printFields"][] = "c13";
$tdatamusicvideoview[".printFields"][] = "c14";
$tdatamusicvideoview[".printFields"][] = "c15";
$tdatamusicvideoview[".printFields"][] = "c16";
$tdatamusicvideoview[".printFields"][] = "c17";
$tdatamusicvideoview[".printFields"][] = "c18";
$tdatamusicvideoview[".printFields"][] = "c19";
$tdatamusicvideoview[".printFields"][] = "c20";
$tdatamusicvideoview[".printFields"][] = "c21";
$tdatamusicvideoview[".printFields"][] = "c22";
$tdatamusicvideoview[".printFields"][] = "c23";
$tdatamusicvideoview[".printFields"][] = "strFileName";
$tdatamusicvideoview[".printFields"][] = "strPath";
$tdatamusicvideoview[".printFields"][] = "playCount";
$tdatamusicvideoview[".printFields"][] = "lastPlayed";
$tdatamusicvideoview[".printFields"][] = "dateAdded";
$tdatamusicvideoview[".printFields"][] = "resumeTimeInSeconds";
$tdatamusicvideoview[".printFields"][] = "totalTimeInSeconds";

//	idMVideo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idMVideo";
	$fdata["GoodName"] = "idMVideo";
	$fdata["ownerTable"] = "musicvideoview";
	$fdata["Label"] = "Id MVideo"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "idMVideo"; 
		$fdata["FullName"] = "idMVideo";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatamusicvideoview["idMVideo"] = $fdata;
//	idFile
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "idFile";
	$fdata["GoodName"] = "idFile";
	$fdata["ownerTable"] = "musicvideoview";
	$fdata["Label"] = "Id File"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "idFile"; 
		$fdata["FullName"] = "idFile";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatamusicvideoview["idFile"] = $fdata;
//	c00
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "c00";
	$fdata["GoodName"] = "c00";
	$fdata["ownerTable"] = "musicvideoview";
	$fdata["Label"] = "C00"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "c00"; 
		$fdata["FullName"] = "c00";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text area");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;
	
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatamusicvideoview["c00"] = $fdata;
//	c01
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "c01";
	$fdata["GoodName"] = "c01";
	$fdata["ownerTable"] = "musicvideoview";
	$fdata["Label"] = "C01"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "c01"; 
		$fdata["FullName"] = "c01";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text area");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;
	
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatamusicvideoview["c01"] = $fdata;
//	c02
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "c02";
	$fdata["GoodName"] = "c02";
	$fdata["ownerTable"] = "musicvideoview";
	$fdata["Label"] = "C02"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "c02"; 
		$fdata["FullName"] = "c02";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text area");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;
	
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatamusicvideoview["c02"] = $fdata;
//	c03
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "c03";
	$fdata["GoodName"] = "c03";
	$fdata["ownerTable"] = "musicvideoview";
	$fdata["Label"] = "C03"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "c03"; 
		$fdata["FullName"] = "c03";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text area");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;
	
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatamusicvideoview["c03"] = $fdata;
//	c04
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "c04";
	$fdata["GoodName"] = "c04";
	$fdata["ownerTable"] = "musicvideoview";
	$fdata["Label"] = "C04"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "c04"; 
		$fdata["FullName"] = "c04";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text area");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;
	
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatamusicvideoview["c04"] = $fdata;
//	c05
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "c05";
	$fdata["GoodName"] = "c05";
	$fdata["ownerTable"] = "musicvideoview";
	$fdata["Label"] = "C05"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "c05"; 
		$fdata["FullName"] = "c05";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text area");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;
	
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatamusicvideoview["c05"] = $fdata;
//	c06
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "c06";
	$fdata["GoodName"] = "c06";
	$fdata["ownerTable"] = "musicvideoview";
	$fdata["Label"] = "C06"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "c06"; 
		$fdata["FullName"] = "c06";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text area");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;
	
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatamusicvideoview["c06"] = $fdata;
//	c07
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "c07";
	$fdata["GoodName"] = "c07";
	$fdata["ownerTable"] = "musicvideoview";
	$fdata["Label"] = "C07"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "c07"; 
		$fdata["FullName"] = "c07";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text area");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;
	
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatamusicvideoview["c07"] = $fdata;
//	c08
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "c08";
	$fdata["GoodName"] = "c08";
	$fdata["ownerTable"] = "musicvideoview";
	$fdata["Label"] = "C08"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "c08"; 
		$fdata["FullName"] = "c08";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text area");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;
	
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatamusicvideoview["c08"] = $fdata;
//	c09
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "c09";
	$fdata["GoodName"] = "c09";
	$fdata["ownerTable"] = "musicvideoview";
	$fdata["Label"] = "C09"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "c09"; 
		$fdata["FullName"] = "c09";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text area");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;
	
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatamusicvideoview["c09"] = $fdata;
//	c10
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "c10";
	$fdata["GoodName"] = "c10";
	$fdata["ownerTable"] = "musicvideoview";
	$fdata["Label"] = "C10"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "c10"; 
		$fdata["FullName"] = "c10";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text area");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;
	
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatamusicvideoview["c10"] = $fdata;
//	c11
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "c11";
	$fdata["GoodName"] = "c11";
	$fdata["ownerTable"] = "musicvideoview";
	$fdata["Label"] = "C11"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "c11"; 
		$fdata["FullName"] = "c11";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text area");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;
	
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatamusicvideoview["c11"] = $fdata;
//	c12
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "c12";
	$fdata["GoodName"] = "c12";
	$fdata["ownerTable"] = "musicvideoview";
	$fdata["Label"] = "C12"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "c12"; 
		$fdata["FullName"] = "c12";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text area");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;
	
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatamusicvideoview["c12"] = $fdata;
//	c13
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "c13";
	$fdata["GoodName"] = "c13";
	$fdata["ownerTable"] = "musicvideoview";
	$fdata["Label"] = "C13"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "c13"; 
		$fdata["FullName"] = "c13";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text area");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;
	
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatamusicvideoview["c13"] = $fdata;
//	c14
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "c14";
	$fdata["GoodName"] = "c14";
	$fdata["ownerTable"] = "musicvideoview";
	$fdata["Label"] = "C14"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "c14"; 
		$fdata["FullName"] = "c14";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text area");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;
	
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatamusicvideoview["c14"] = $fdata;
//	c15
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "c15";
	$fdata["GoodName"] = "c15";
	$fdata["ownerTable"] = "musicvideoview";
	$fdata["Label"] = "C15"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "c15"; 
		$fdata["FullName"] = "c15";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text area");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;
	
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatamusicvideoview["c15"] = $fdata;
//	c16
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "c16";
	$fdata["GoodName"] = "c16";
	$fdata["ownerTable"] = "musicvideoview";
	$fdata["Label"] = "C16"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "c16"; 
		$fdata["FullName"] = "c16";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text area");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;
	
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatamusicvideoview["c16"] = $fdata;
//	c17
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "c17";
	$fdata["GoodName"] = "c17";
	$fdata["ownerTable"] = "musicvideoview";
	$fdata["Label"] = "C17"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "c17"; 
		$fdata["FullName"] = "c17";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text area");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;
	
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatamusicvideoview["c17"] = $fdata;
//	c18
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "c18";
	$fdata["GoodName"] = "c18";
	$fdata["ownerTable"] = "musicvideoview";
	$fdata["Label"] = "C18"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "c18"; 
		$fdata["FullName"] = "c18";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text area");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;
	
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatamusicvideoview["c18"] = $fdata;
//	c19
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "c19";
	$fdata["GoodName"] = "c19";
	$fdata["ownerTable"] = "musicvideoview";
	$fdata["Label"] = "C19"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "c19"; 
		$fdata["FullName"] = "c19";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text area");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;
	
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatamusicvideoview["c19"] = $fdata;
//	c20
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "c20";
	$fdata["GoodName"] = "c20";
	$fdata["ownerTable"] = "musicvideoview";
	$fdata["Label"] = "C20"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "c20"; 
		$fdata["FullName"] = "c20";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text area");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;
	
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatamusicvideoview["c20"] = $fdata;
//	c21
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "c21";
	$fdata["GoodName"] = "c21";
	$fdata["ownerTable"] = "musicvideoview";
	$fdata["Label"] = "C21"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "c21"; 
		$fdata["FullName"] = "c21";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text area");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;
	
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatamusicvideoview["c21"] = $fdata;
//	c22
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "c22";
	$fdata["GoodName"] = "c22";
	$fdata["ownerTable"] = "musicvideoview";
	$fdata["Label"] = "C22"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "c22"; 
		$fdata["FullName"] = "c22";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text area");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;
	
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatamusicvideoview["c22"] = $fdata;
//	c23
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "c23";
	$fdata["GoodName"] = "c23";
	$fdata["ownerTable"] = "musicvideoview";
	$fdata["Label"] = "C23"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "c23"; 
		$fdata["FullName"] = "c23";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text area");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;
	
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatamusicvideoview["c23"] = $fdata;
//	strFileName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "strFileName";
	$fdata["GoodName"] = "strFileName";
	$fdata["ownerTable"] = "musicvideoview";
	$fdata["Label"] = "Str File Name"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "strFileName"; 
		$fdata["FullName"] = "strFileName";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text area");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;
	
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatamusicvideoview["strFileName"] = $fdata;
//	strPath
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "strPath";
	$fdata["GoodName"] = "strPath";
	$fdata["ownerTable"] = "musicvideoview";
	$fdata["Label"] = "Str Path"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "strPath"; 
		$fdata["FullName"] = "strPath";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text area");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;
	
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatamusicvideoview["strPath"] = $fdata;
//	playCount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "playCount";
	$fdata["GoodName"] = "playCount";
	$fdata["ownerTable"] = "musicvideoview";
	$fdata["Label"] = "Play Count"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "playCount"; 
		$fdata["FullName"] = "playCount";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatamusicvideoview["playCount"] = $fdata;
//	lastPlayed
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "lastPlayed";
	$fdata["GoodName"] = "lastPlayed";
	$fdata["ownerTable"] = "musicvideoview";
	$fdata["Label"] = "Last Played"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "lastPlayed"; 
		$fdata["FullName"] = "lastPlayed";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text area");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;
	
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatamusicvideoview["lastPlayed"] = $fdata;
//	dateAdded
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "dateAdded";
	$fdata["GoodName"] = "dateAdded";
	$fdata["ownerTable"] = "musicvideoview";
	$fdata["Label"] = "Date Added"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "dateAdded"; 
		$fdata["FullName"] = "dateAdded";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text area");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;
	
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatamusicvideoview["dateAdded"] = $fdata;
//	resumeTimeInSeconds
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "resumeTimeInSeconds";
	$fdata["GoodName"] = "resumeTimeInSeconds";
	$fdata["ownerTable"] = "musicvideoview";
	$fdata["Label"] = "Resume Time In Seconds"; 
	$fdata["FieldType"] = 5;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "resumeTimeInSeconds"; 
		$fdata["FullName"] = "resumeTimeInSeconds";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
			
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatamusicvideoview["resumeTimeInSeconds"] = $fdata;
//	totalTimeInSeconds
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "totalTimeInSeconds";
	$fdata["GoodName"] = "totalTimeInSeconds";
	$fdata["ownerTable"] = "musicvideoview";
	$fdata["Label"] = "Total Time In Seconds"; 
	$fdata["FieldType"] = 5;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "totalTimeInSeconds"; 
		$fdata["FullName"] = "totalTimeInSeconds";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
			
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatamusicvideoview["totalTimeInSeconds"] = $fdata;

	
$tables_data["musicvideoview"]=&$tdatamusicvideoview;
$field_labels["musicvideoview"] = &$fieldLabelsmusicvideoview;
$fieldToolTips["musicvideoview"] = &$fieldToolTipsmusicvideoview;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["musicvideoview"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["musicvideoview"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_musicvideoview()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "idMVideo,   idFile,   c00,   c01,   c02,   c03,   c04,   c05,   c06,   c07,   c08,   c09,   c10,   c11,   c12,   c13,   c14,   c15,   c16,   c17,   c18,   c19,   c20,   c21,   c22,   c23,   strFileName,   strPath,   playCount,   lastPlayed,   dateAdded,   resumeTimeInSeconds,   totalTimeInSeconds";
$proto0["m_strFrom"] = "FROM musicvideoview";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "";
$proto1["m_havingmode"] = "0";
$proto1["m_inBrackets"] = "0";
$proto1["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto1);

$proto0["m_where"] = $obj;
$proto3=array();
$proto3["m_sql"] = "";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "";
$proto3["m_havingmode"] = "0";
$proto3["m_inBrackets"] = "0";
$proto3["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto3);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto5=array();
			$obj = new SQLField(array(
	"m_strName" => "idMVideo",
	"m_strTable" => "musicvideoview"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "idFile",
	"m_strTable" => "musicvideoview"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "c00",
	"m_strTable" => "musicvideoview"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "c01",
	"m_strTable" => "musicvideoview"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "c02",
	"m_strTable" => "musicvideoview"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "c03",
	"m_strTable" => "musicvideoview"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "c04",
	"m_strTable" => "musicvideoview"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "c05",
	"m_strTable" => "musicvideoview"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "c06",
	"m_strTable" => "musicvideoview"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "c07",
	"m_strTable" => "musicvideoview"
));

$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "c08",
	"m_strTable" => "musicvideoview"
));

$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "c09",
	"m_strTable" => "musicvideoview"
));

$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "c10",
	"m_strTable" => "musicvideoview"
));

$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "c11",
	"m_strTable" => "musicvideoview"
));

$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "c12",
	"m_strTable" => "musicvideoview"
));

$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "c13",
	"m_strTable" => "musicvideoview"
));

$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "c14",
	"m_strTable" => "musicvideoview"
));

$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "c15",
	"m_strTable" => "musicvideoview"
));

$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLField(array(
	"m_strName" => "c16",
	"m_strTable" => "musicvideoview"
));

$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "";
$obj = new SQLFieldListItem($proto41);

$proto0["m_fieldlist"][]=$obj;
						$proto43=array();
			$obj = new SQLField(array(
	"m_strName" => "c17",
	"m_strTable" => "musicvideoview"
));

$proto43["m_expr"]=$obj;
$proto43["m_alias"] = "";
$obj = new SQLFieldListItem($proto43);

$proto0["m_fieldlist"][]=$obj;
						$proto45=array();
			$obj = new SQLField(array(
	"m_strName" => "c18",
	"m_strTable" => "musicvideoview"
));

$proto45["m_expr"]=$obj;
$proto45["m_alias"] = "";
$obj = new SQLFieldListItem($proto45);

$proto0["m_fieldlist"][]=$obj;
						$proto47=array();
			$obj = new SQLField(array(
	"m_strName" => "c19",
	"m_strTable" => "musicvideoview"
));

$proto47["m_expr"]=$obj;
$proto47["m_alias"] = "";
$obj = new SQLFieldListItem($proto47);

$proto0["m_fieldlist"][]=$obj;
						$proto49=array();
			$obj = new SQLField(array(
	"m_strName" => "c20",
	"m_strTable" => "musicvideoview"
));

$proto49["m_expr"]=$obj;
$proto49["m_alias"] = "";
$obj = new SQLFieldListItem($proto49);

$proto0["m_fieldlist"][]=$obj;
						$proto51=array();
			$obj = new SQLField(array(
	"m_strName" => "c21",
	"m_strTable" => "musicvideoview"
));

$proto51["m_expr"]=$obj;
$proto51["m_alias"] = "";
$obj = new SQLFieldListItem($proto51);

$proto0["m_fieldlist"][]=$obj;
						$proto53=array();
			$obj = new SQLField(array(
	"m_strName" => "c22",
	"m_strTable" => "musicvideoview"
));

$proto53["m_expr"]=$obj;
$proto53["m_alias"] = "";
$obj = new SQLFieldListItem($proto53);

$proto0["m_fieldlist"][]=$obj;
						$proto55=array();
			$obj = new SQLField(array(
	"m_strName" => "c23",
	"m_strTable" => "musicvideoview"
));

$proto55["m_expr"]=$obj;
$proto55["m_alias"] = "";
$obj = new SQLFieldListItem($proto55);

$proto0["m_fieldlist"][]=$obj;
						$proto57=array();
			$obj = new SQLField(array(
	"m_strName" => "strFileName",
	"m_strTable" => "musicvideoview"
));

$proto57["m_expr"]=$obj;
$proto57["m_alias"] = "";
$obj = new SQLFieldListItem($proto57);

$proto0["m_fieldlist"][]=$obj;
						$proto59=array();
			$obj = new SQLField(array(
	"m_strName" => "strPath",
	"m_strTable" => "musicvideoview"
));

$proto59["m_expr"]=$obj;
$proto59["m_alias"] = "";
$obj = new SQLFieldListItem($proto59);

$proto0["m_fieldlist"][]=$obj;
						$proto61=array();
			$obj = new SQLField(array(
	"m_strName" => "playCount",
	"m_strTable" => "musicvideoview"
));

$proto61["m_expr"]=$obj;
$proto61["m_alias"] = "";
$obj = new SQLFieldListItem($proto61);

$proto0["m_fieldlist"][]=$obj;
						$proto63=array();
			$obj = new SQLField(array(
	"m_strName" => "lastPlayed",
	"m_strTable" => "musicvideoview"
));

$proto63["m_expr"]=$obj;
$proto63["m_alias"] = "";
$obj = new SQLFieldListItem($proto63);

$proto0["m_fieldlist"][]=$obj;
						$proto65=array();
			$obj = new SQLField(array(
	"m_strName" => "dateAdded",
	"m_strTable" => "musicvideoview"
));

$proto65["m_expr"]=$obj;
$proto65["m_alias"] = "";
$obj = new SQLFieldListItem($proto65);

$proto0["m_fieldlist"][]=$obj;
						$proto67=array();
			$obj = new SQLField(array(
	"m_strName" => "resumeTimeInSeconds",
	"m_strTable" => "musicvideoview"
));

$proto67["m_expr"]=$obj;
$proto67["m_alias"] = "";
$obj = new SQLFieldListItem($proto67);

$proto0["m_fieldlist"][]=$obj;
						$proto69=array();
			$obj = new SQLField(array(
	"m_strName" => "totalTimeInSeconds",
	"m_strTable" => "musicvideoview"
));

$proto69["m_expr"]=$obj;
$proto69["m_alias"] = "";
$obj = new SQLFieldListItem($proto69);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto71=array();
$proto71["m_link"] = "SQLL_MAIN";
			$proto72=array();
$proto72["m_strName"] = "musicvideoview";
$proto72["m_columns"] = array();
$proto72["m_columns"][] = "idMVideo";
$proto72["m_columns"][] = "idFile";
$proto72["m_columns"][] = "c00";
$proto72["m_columns"][] = "c01";
$proto72["m_columns"][] = "c02";
$proto72["m_columns"][] = "c03";
$proto72["m_columns"][] = "c04";
$proto72["m_columns"][] = "c05";
$proto72["m_columns"][] = "c06";
$proto72["m_columns"][] = "c07";
$proto72["m_columns"][] = "c08";
$proto72["m_columns"][] = "c09";
$proto72["m_columns"][] = "c10";
$proto72["m_columns"][] = "c11";
$proto72["m_columns"][] = "c12";
$proto72["m_columns"][] = "c13";
$proto72["m_columns"][] = "c14";
$proto72["m_columns"][] = "c15";
$proto72["m_columns"][] = "c16";
$proto72["m_columns"][] = "c17";
$proto72["m_columns"][] = "c18";
$proto72["m_columns"][] = "c19";
$proto72["m_columns"][] = "c20";
$proto72["m_columns"][] = "c21";
$proto72["m_columns"][] = "c22";
$proto72["m_columns"][] = "c23";
$proto72["m_columns"][] = "strFileName";
$proto72["m_columns"][] = "strPath";
$proto72["m_columns"][] = "playCount";
$proto72["m_columns"][] = "lastPlayed";
$proto72["m_columns"][] = "dateAdded";
$proto72["m_columns"][] = "resumeTimeInSeconds";
$proto72["m_columns"][] = "totalTimeInSeconds";
$obj = new SQLTable($proto72);

$proto71["m_table"] = $obj;
$proto71["m_alias"] = "";
$proto73=array();
$proto73["m_sql"] = "";
$proto73["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto73["m_column"]=$obj;
$proto73["m_contained"] = array();
$proto73["m_strCase"] = "";
$proto73["m_havingmode"] = "0";
$proto73["m_inBrackets"] = "0";
$proto73["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto73);

$proto71["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto71);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_musicvideoview = createSqlQuery_musicvideoview();
																																	$tdatamusicvideoview[".sqlquery"] = $queryData_musicvideoview;

$tableEvents["musicvideoview"] = new eventsBase;
$tdatamusicvideoview[".hasEvents"] = false;

$cipherer = new RunnerCipherer("musicvideoview");

?>