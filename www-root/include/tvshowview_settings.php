<?php
require_once(getabspath("classes/cipherer.php"));
$tdatatvshowview = array();
	$tdatatvshowview[".NumberOfChars"] = 80; 
	$tdatatvshowview[".ShortName"] = "tvshowview";
	$tdatatvshowview[".OwnerID"] = "";
	$tdatatvshowview[".OriginalTable"] = "tvshowview";

//	field labels
$fieldLabelstvshowview = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstvshowview["English"] = array();
	$fieldToolTipstvshowview["English"] = array();
	$fieldLabelstvshowview["English"]["idShow"] = "Id Show";
	$fieldToolTipstvshowview["English"]["idShow"] = "";
	$fieldLabelstvshowview["English"]["c00"] = "C00";
	$fieldToolTipstvshowview["English"]["c00"] = "";
	$fieldLabelstvshowview["English"]["c01"] = "C01";
	$fieldToolTipstvshowview["English"]["c01"] = "";
	$fieldLabelstvshowview["English"]["c02"] = "C02";
	$fieldToolTipstvshowview["English"]["c02"] = "";
	$fieldLabelstvshowview["English"]["c03"] = "C03";
	$fieldToolTipstvshowview["English"]["c03"] = "";
	$fieldLabelstvshowview["English"]["c04"] = "C04";
	$fieldToolTipstvshowview["English"]["c04"] = "";
	$fieldLabelstvshowview["English"]["c05"] = "C05";
	$fieldToolTipstvshowview["English"]["c05"] = "";
	$fieldLabelstvshowview["English"]["c06"] = "C06";
	$fieldToolTipstvshowview["English"]["c06"] = "";
	$fieldLabelstvshowview["English"]["c07"] = "C07";
	$fieldToolTipstvshowview["English"]["c07"] = "";
	$fieldLabelstvshowview["English"]["c08"] = "C08";
	$fieldToolTipstvshowview["English"]["c08"] = "";
	$fieldLabelstvshowview["English"]["c09"] = "C09";
	$fieldToolTipstvshowview["English"]["c09"] = "";
	$fieldLabelstvshowview["English"]["c10"] = "C10";
	$fieldToolTipstvshowview["English"]["c10"] = "";
	$fieldLabelstvshowview["English"]["c11"] = "C11";
	$fieldToolTipstvshowview["English"]["c11"] = "";
	$fieldLabelstvshowview["English"]["c12"] = "C12";
	$fieldToolTipstvshowview["English"]["c12"] = "";
	$fieldLabelstvshowview["English"]["c13"] = "C13";
	$fieldToolTipstvshowview["English"]["c13"] = "";
	$fieldLabelstvshowview["English"]["c14"] = "C14";
	$fieldToolTipstvshowview["English"]["c14"] = "";
	$fieldLabelstvshowview["English"]["c15"] = "C15";
	$fieldToolTipstvshowview["English"]["c15"] = "";
	$fieldLabelstvshowview["English"]["c16"] = "C16";
	$fieldToolTipstvshowview["English"]["c16"] = "";
	$fieldLabelstvshowview["English"]["c17"] = "C17";
	$fieldToolTipstvshowview["English"]["c17"] = "";
	$fieldLabelstvshowview["English"]["c18"] = "C18";
	$fieldToolTipstvshowview["English"]["c18"] = "";
	$fieldLabelstvshowview["English"]["c19"] = "C19";
	$fieldToolTipstvshowview["English"]["c19"] = "";
	$fieldLabelstvshowview["English"]["c20"] = "C20";
	$fieldToolTipstvshowview["English"]["c20"] = "";
	$fieldLabelstvshowview["English"]["c21"] = "C21";
	$fieldToolTipstvshowview["English"]["c21"] = "";
	$fieldLabelstvshowview["English"]["c22"] = "C22";
	$fieldToolTipstvshowview["English"]["c22"] = "";
	$fieldLabelstvshowview["English"]["c23"] = "C23";
	$fieldToolTipstvshowview["English"]["c23"] = "";
	$fieldLabelstvshowview["English"]["idParentPath"] = "Id Parent Path";
	$fieldToolTipstvshowview["English"]["idParentPath"] = "";
	$fieldLabelstvshowview["English"]["strPath"] = "Str Path";
	$fieldToolTipstvshowview["English"]["strPath"] = "";
	$fieldLabelstvshowview["English"]["dateAdded"] = "Date Added";
	$fieldToolTipstvshowview["English"]["dateAdded"] = "";
	$fieldLabelstvshowview["English"]["lastPlayed"] = "Last Played";
	$fieldToolTipstvshowview["English"]["lastPlayed"] = "";
	$fieldLabelstvshowview["English"]["totalCount"] = "Total Count";
	$fieldToolTipstvshowview["English"]["totalCount"] = "";
	$fieldLabelstvshowview["English"]["watchedcount"] = "Watchedcount";
	$fieldToolTipstvshowview["English"]["watchedcount"] = "";
	$fieldLabelstvshowview["English"]["totalSeasons"] = "Total Seasons";
	$fieldToolTipstvshowview["English"]["totalSeasons"] = "";
	if (count($fieldToolTipstvshowview["English"]))
		$tdatatvshowview[".isUseToolTips"] = true;
}
	
	
	$tdatatvshowview[".NCSearch"] = true;



$tdatatvshowview[".shortTableName"] = "tvshowview";
$tdatatvshowview[".nSecOptions"] = 0;
$tdatatvshowview[".recsPerRowList"] = 1;
$tdatatvshowview[".mainTableOwnerID"] = "";
$tdatatvshowview[".moveNext"] = 1;
$tdatatvshowview[".nType"] = 0;

$tdatatvshowview[".strOriginalTableName"] = "tvshowview";




$tdatatvshowview[".showAddInPopup"] = false;

$tdatatvshowview[".showEditInPopup"] = false;

$tdatatvshowview[".showViewInPopup"] = false;

$tdatatvshowview[".fieldsForRegister"] = array();

$tdatatvshowview[".listAjax"] = false;

	$tdatatvshowview[".audit"] = false;

	$tdatatvshowview[".locking"] = false;

$tdatatvshowview[".listIcons"] = true;

$tdatatvshowview[".exportTo"] = true;

$tdatatvshowview[".printFriendly"] = true;


$tdatatvshowview[".showSimpleSearchOptions"] = false;

$tdatatvshowview[".showSearchPanel"] = true;

if (isMobile())
	$tdatatvshowview[".isUseAjaxSuggest"] = false;
else 
	$tdatatvshowview[".isUseAjaxSuggest"] = true;

$tdatatvshowview[".rowHighlite"] = true;

// button handlers file names

$tdatatvshowview[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatvshowview[".isUseTimeForSearch"] = false;




$tdatatvshowview[".allSearchFields"] = array();

$tdatatvshowview[".allSearchFields"][] = "idShow";
$tdatatvshowview[".allSearchFields"][] = "c00";
$tdatatvshowview[".allSearchFields"][] = "c01";
$tdatatvshowview[".allSearchFields"][] = "c02";
$tdatatvshowview[".allSearchFields"][] = "c03";
$tdatatvshowview[".allSearchFields"][] = "c04";
$tdatatvshowview[".allSearchFields"][] = "c05";
$tdatatvshowview[".allSearchFields"][] = "c06";
$tdatatvshowview[".allSearchFields"][] = "c07";
$tdatatvshowview[".allSearchFields"][] = "c08";
$tdatatvshowview[".allSearchFields"][] = "c09";
$tdatatvshowview[".allSearchFields"][] = "c10";
$tdatatvshowview[".allSearchFields"][] = "c11";
$tdatatvshowview[".allSearchFields"][] = "c12";
$tdatatvshowview[".allSearchFields"][] = "c13";
$tdatatvshowview[".allSearchFields"][] = "c14";
$tdatatvshowview[".allSearchFields"][] = "c15";
$tdatatvshowview[".allSearchFields"][] = "c16";
$tdatatvshowview[".allSearchFields"][] = "c17";
$tdatatvshowview[".allSearchFields"][] = "c18";
$tdatatvshowview[".allSearchFields"][] = "c19";
$tdatatvshowview[".allSearchFields"][] = "c20";
$tdatatvshowview[".allSearchFields"][] = "c21";
$tdatatvshowview[".allSearchFields"][] = "c22";
$tdatatvshowview[".allSearchFields"][] = "c23";
$tdatatvshowview[".allSearchFields"][] = "idParentPath";
$tdatatvshowview[".allSearchFields"][] = "strPath";
$tdatatvshowview[".allSearchFields"][] = "dateAdded";
$tdatatvshowview[".allSearchFields"][] = "lastPlayed";
$tdatatvshowview[".allSearchFields"][] = "totalCount";
$tdatatvshowview[".allSearchFields"][] = "watchedcount";
$tdatatvshowview[".allSearchFields"][] = "totalSeasons";

$tdatatvshowview[".googleLikeFields"][] = "idShow";
$tdatatvshowview[".googleLikeFields"][] = "c00";
$tdatatvshowview[".googleLikeFields"][] = "c01";
$tdatatvshowview[".googleLikeFields"][] = "c02";
$tdatatvshowview[".googleLikeFields"][] = "c03";
$tdatatvshowview[".googleLikeFields"][] = "c04";
$tdatatvshowview[".googleLikeFields"][] = "c05";
$tdatatvshowview[".googleLikeFields"][] = "c06";
$tdatatvshowview[".googleLikeFields"][] = "c07";
$tdatatvshowview[".googleLikeFields"][] = "c08";
$tdatatvshowview[".googleLikeFields"][] = "c09";
$tdatatvshowview[".googleLikeFields"][] = "c10";
$tdatatvshowview[".googleLikeFields"][] = "c11";
$tdatatvshowview[".googleLikeFields"][] = "c12";
$tdatatvshowview[".googleLikeFields"][] = "c13";
$tdatatvshowview[".googleLikeFields"][] = "c14";
$tdatatvshowview[".googleLikeFields"][] = "c15";
$tdatatvshowview[".googleLikeFields"][] = "c16";
$tdatatvshowview[".googleLikeFields"][] = "c17";
$tdatatvshowview[".googleLikeFields"][] = "c18";
$tdatatvshowview[".googleLikeFields"][] = "c19";
$tdatatvshowview[".googleLikeFields"][] = "c20";
$tdatatvshowview[".googleLikeFields"][] = "c21";
$tdatatvshowview[".googleLikeFields"][] = "c22";
$tdatatvshowview[".googleLikeFields"][] = "c23";
$tdatatvshowview[".googleLikeFields"][] = "idParentPath";
$tdatatvshowview[".googleLikeFields"][] = "strPath";
$tdatatvshowview[".googleLikeFields"][] = "dateAdded";
$tdatatvshowview[".googleLikeFields"][] = "lastPlayed";
$tdatatvshowview[".googleLikeFields"][] = "totalCount";
$tdatatvshowview[".googleLikeFields"][] = "watchedcount";
$tdatatvshowview[".googleLikeFields"][] = "totalSeasons";


$tdatatvshowview[".advSearchFields"][] = "idShow";
$tdatatvshowview[".advSearchFields"][] = "c00";
$tdatatvshowview[".advSearchFields"][] = "c01";
$tdatatvshowview[".advSearchFields"][] = "c02";
$tdatatvshowview[".advSearchFields"][] = "c03";
$tdatatvshowview[".advSearchFields"][] = "c04";
$tdatatvshowview[".advSearchFields"][] = "c05";
$tdatatvshowview[".advSearchFields"][] = "c06";
$tdatatvshowview[".advSearchFields"][] = "c07";
$tdatatvshowview[".advSearchFields"][] = "c08";
$tdatatvshowview[".advSearchFields"][] = "c09";
$tdatatvshowview[".advSearchFields"][] = "c10";
$tdatatvshowview[".advSearchFields"][] = "c11";
$tdatatvshowview[".advSearchFields"][] = "c12";
$tdatatvshowview[".advSearchFields"][] = "c13";
$tdatatvshowview[".advSearchFields"][] = "c14";
$tdatatvshowview[".advSearchFields"][] = "c15";
$tdatatvshowview[".advSearchFields"][] = "c16";
$tdatatvshowview[".advSearchFields"][] = "c17";
$tdatatvshowview[".advSearchFields"][] = "c18";
$tdatatvshowview[".advSearchFields"][] = "c19";
$tdatatvshowview[".advSearchFields"][] = "c20";
$tdatatvshowview[".advSearchFields"][] = "c21";
$tdatatvshowview[".advSearchFields"][] = "c22";
$tdatatvshowview[".advSearchFields"][] = "c23";
$tdatatvshowview[".advSearchFields"][] = "idParentPath";
$tdatatvshowview[".advSearchFields"][] = "strPath";
$tdatatvshowview[".advSearchFields"][] = "dateAdded";
$tdatatvshowview[".advSearchFields"][] = "lastPlayed";
$tdatatvshowview[".advSearchFields"][] = "totalCount";
$tdatatvshowview[".advSearchFields"][] = "watchedcount";
$tdatatvshowview[".advSearchFields"][] = "totalSeasons";

$tdatatvshowview[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatatvshowview[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatvshowview[".strOrderBy"] = $tstrOrderBy;

$tdatatvshowview[".orderindexes"] = array();

$tdatatvshowview[".sqlHead"] = "SELECT idShow,   c00,   c01,   c02,   c03,   c04,   c05,   c06,   c07,   c08,   c09,   c10,   c11,   c12,   c13,   c14,   c15,   c16,   c17,   c18,   c19,   c20,   c21,   c22,   c23,   idParentPath,   strPath,   dateAdded,   lastPlayed,   totalCount,   watchedcount,   totalSeasons";
$tdatatvshowview[".sqlFrom"] = "FROM tvshowview";
$tdatatvshowview[".sqlWhereExpr"] = "";
$tdatatvshowview[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatvshowview[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatvshowview[".arrGroupsPerPage"] = $arrGPP;

$tableKeystvshowview = array();
$tdatatvshowview[".Keys"] = $tableKeystvshowview;

$tdatatvshowview[".listFields"] = array();
$tdatatvshowview[".listFields"][] = "idShow";
$tdatatvshowview[".listFields"][] = "c00";
$tdatatvshowview[".listFields"][] = "c01";
$tdatatvshowview[".listFields"][] = "c02";
$tdatatvshowview[".listFields"][] = "c03";
$tdatatvshowview[".listFields"][] = "c04";
$tdatatvshowview[".listFields"][] = "c05";
$tdatatvshowview[".listFields"][] = "c06";
$tdatatvshowview[".listFields"][] = "c07";
$tdatatvshowview[".listFields"][] = "c08";
$tdatatvshowview[".listFields"][] = "c09";
$tdatatvshowview[".listFields"][] = "c10";
$tdatatvshowview[".listFields"][] = "c11";
$tdatatvshowview[".listFields"][] = "c12";
$tdatatvshowview[".listFields"][] = "c13";
$tdatatvshowview[".listFields"][] = "c14";
$tdatatvshowview[".listFields"][] = "c15";
$tdatatvshowview[".listFields"][] = "c16";
$tdatatvshowview[".listFields"][] = "c17";
$tdatatvshowview[".listFields"][] = "c18";
$tdatatvshowview[".listFields"][] = "c19";
$tdatatvshowview[".listFields"][] = "c20";
$tdatatvshowview[".listFields"][] = "c21";
$tdatatvshowview[".listFields"][] = "c22";
$tdatatvshowview[".listFields"][] = "c23";
$tdatatvshowview[".listFields"][] = "idParentPath";
$tdatatvshowview[".listFields"][] = "strPath";
$tdatatvshowview[".listFields"][] = "dateAdded";
$tdatatvshowview[".listFields"][] = "lastPlayed";
$tdatatvshowview[".listFields"][] = "totalCount";
$tdatatvshowview[".listFields"][] = "watchedcount";
$tdatatvshowview[".listFields"][] = "totalSeasons";

$tdatatvshowview[".viewFields"] = array();
$tdatatvshowview[".viewFields"][] = "idShow";
$tdatatvshowview[".viewFields"][] = "c00";
$tdatatvshowview[".viewFields"][] = "c01";
$tdatatvshowview[".viewFields"][] = "c02";
$tdatatvshowview[".viewFields"][] = "c03";
$tdatatvshowview[".viewFields"][] = "c04";
$tdatatvshowview[".viewFields"][] = "c05";
$tdatatvshowview[".viewFields"][] = "c06";
$tdatatvshowview[".viewFields"][] = "c07";
$tdatatvshowview[".viewFields"][] = "c08";
$tdatatvshowview[".viewFields"][] = "c09";
$tdatatvshowview[".viewFields"][] = "c10";
$tdatatvshowview[".viewFields"][] = "c11";
$tdatatvshowview[".viewFields"][] = "c12";
$tdatatvshowview[".viewFields"][] = "c13";
$tdatatvshowview[".viewFields"][] = "c14";
$tdatatvshowview[".viewFields"][] = "c15";
$tdatatvshowview[".viewFields"][] = "c16";
$tdatatvshowview[".viewFields"][] = "c17";
$tdatatvshowview[".viewFields"][] = "c18";
$tdatatvshowview[".viewFields"][] = "c19";
$tdatatvshowview[".viewFields"][] = "c20";
$tdatatvshowview[".viewFields"][] = "c21";
$tdatatvshowview[".viewFields"][] = "c22";
$tdatatvshowview[".viewFields"][] = "c23";
$tdatatvshowview[".viewFields"][] = "idParentPath";
$tdatatvshowview[".viewFields"][] = "strPath";
$tdatatvshowview[".viewFields"][] = "dateAdded";
$tdatatvshowview[".viewFields"][] = "lastPlayed";
$tdatatvshowview[".viewFields"][] = "totalCount";
$tdatatvshowview[".viewFields"][] = "watchedcount";
$tdatatvshowview[".viewFields"][] = "totalSeasons";

$tdatatvshowview[".addFields"] = array();
$tdatatvshowview[".addFields"][] = "idShow";
$tdatatvshowview[".addFields"][] = "c00";
$tdatatvshowview[".addFields"][] = "c01";
$tdatatvshowview[".addFields"][] = "c02";
$tdatatvshowview[".addFields"][] = "c03";
$tdatatvshowview[".addFields"][] = "c04";
$tdatatvshowview[".addFields"][] = "c05";
$tdatatvshowview[".addFields"][] = "c06";
$tdatatvshowview[".addFields"][] = "c07";
$tdatatvshowview[".addFields"][] = "c08";
$tdatatvshowview[".addFields"][] = "c09";
$tdatatvshowview[".addFields"][] = "c10";
$tdatatvshowview[".addFields"][] = "c11";
$tdatatvshowview[".addFields"][] = "c12";
$tdatatvshowview[".addFields"][] = "c13";
$tdatatvshowview[".addFields"][] = "c14";
$tdatatvshowview[".addFields"][] = "c15";
$tdatatvshowview[".addFields"][] = "c16";
$tdatatvshowview[".addFields"][] = "c17";
$tdatatvshowview[".addFields"][] = "c18";
$tdatatvshowview[".addFields"][] = "c19";
$tdatatvshowview[".addFields"][] = "c20";
$tdatatvshowview[".addFields"][] = "c21";
$tdatatvshowview[".addFields"][] = "c22";
$tdatatvshowview[".addFields"][] = "c23";
$tdatatvshowview[".addFields"][] = "idParentPath";
$tdatatvshowview[".addFields"][] = "strPath";
$tdatatvshowview[".addFields"][] = "dateAdded";
$tdatatvshowview[".addFields"][] = "lastPlayed";
$tdatatvshowview[".addFields"][] = "totalCount";
$tdatatvshowview[".addFields"][] = "watchedcount";
$tdatatvshowview[".addFields"][] = "totalSeasons";

$tdatatvshowview[".inlineAddFields"] = array();
$tdatatvshowview[".inlineAddFields"][] = "idShow";
$tdatatvshowview[".inlineAddFields"][] = "c00";
$tdatatvshowview[".inlineAddFields"][] = "c01";
$tdatatvshowview[".inlineAddFields"][] = "c02";
$tdatatvshowview[".inlineAddFields"][] = "c03";
$tdatatvshowview[".inlineAddFields"][] = "c04";
$tdatatvshowview[".inlineAddFields"][] = "c05";
$tdatatvshowview[".inlineAddFields"][] = "c06";
$tdatatvshowview[".inlineAddFields"][] = "c07";
$tdatatvshowview[".inlineAddFields"][] = "c08";
$tdatatvshowview[".inlineAddFields"][] = "c09";
$tdatatvshowview[".inlineAddFields"][] = "c10";
$tdatatvshowview[".inlineAddFields"][] = "c11";
$tdatatvshowview[".inlineAddFields"][] = "c12";
$tdatatvshowview[".inlineAddFields"][] = "c13";
$tdatatvshowview[".inlineAddFields"][] = "c14";
$tdatatvshowview[".inlineAddFields"][] = "c15";
$tdatatvshowview[".inlineAddFields"][] = "c16";
$tdatatvshowview[".inlineAddFields"][] = "c17";
$tdatatvshowview[".inlineAddFields"][] = "c18";
$tdatatvshowview[".inlineAddFields"][] = "c19";
$tdatatvshowview[".inlineAddFields"][] = "c20";
$tdatatvshowview[".inlineAddFields"][] = "c21";
$tdatatvshowview[".inlineAddFields"][] = "c22";
$tdatatvshowview[".inlineAddFields"][] = "c23";
$tdatatvshowview[".inlineAddFields"][] = "idParentPath";
$tdatatvshowview[".inlineAddFields"][] = "strPath";
$tdatatvshowview[".inlineAddFields"][] = "dateAdded";
$tdatatvshowview[".inlineAddFields"][] = "lastPlayed";
$tdatatvshowview[".inlineAddFields"][] = "totalCount";
$tdatatvshowview[".inlineAddFields"][] = "watchedcount";
$tdatatvshowview[".inlineAddFields"][] = "totalSeasons";

$tdatatvshowview[".editFields"] = array();
$tdatatvshowview[".editFields"][] = "idShow";
$tdatatvshowview[".editFields"][] = "c00";
$tdatatvshowview[".editFields"][] = "c01";
$tdatatvshowview[".editFields"][] = "c02";
$tdatatvshowview[".editFields"][] = "c03";
$tdatatvshowview[".editFields"][] = "c04";
$tdatatvshowview[".editFields"][] = "c05";
$tdatatvshowview[".editFields"][] = "c06";
$tdatatvshowview[".editFields"][] = "c07";
$tdatatvshowview[".editFields"][] = "c08";
$tdatatvshowview[".editFields"][] = "c09";
$tdatatvshowview[".editFields"][] = "c10";
$tdatatvshowview[".editFields"][] = "c11";
$tdatatvshowview[".editFields"][] = "c12";
$tdatatvshowview[".editFields"][] = "c13";
$tdatatvshowview[".editFields"][] = "c14";
$tdatatvshowview[".editFields"][] = "c15";
$tdatatvshowview[".editFields"][] = "c16";
$tdatatvshowview[".editFields"][] = "c17";
$tdatatvshowview[".editFields"][] = "c18";
$tdatatvshowview[".editFields"][] = "c19";
$tdatatvshowview[".editFields"][] = "c20";
$tdatatvshowview[".editFields"][] = "c21";
$tdatatvshowview[".editFields"][] = "c22";
$tdatatvshowview[".editFields"][] = "c23";
$tdatatvshowview[".editFields"][] = "idParentPath";
$tdatatvshowview[".editFields"][] = "strPath";
$tdatatvshowview[".editFields"][] = "dateAdded";
$tdatatvshowview[".editFields"][] = "lastPlayed";
$tdatatvshowview[".editFields"][] = "totalCount";
$tdatatvshowview[".editFields"][] = "watchedcount";
$tdatatvshowview[".editFields"][] = "totalSeasons";

$tdatatvshowview[".inlineEditFields"] = array();
$tdatatvshowview[".inlineEditFields"][] = "idShow";
$tdatatvshowview[".inlineEditFields"][] = "c00";
$tdatatvshowview[".inlineEditFields"][] = "c01";
$tdatatvshowview[".inlineEditFields"][] = "c02";
$tdatatvshowview[".inlineEditFields"][] = "c03";
$tdatatvshowview[".inlineEditFields"][] = "c04";
$tdatatvshowview[".inlineEditFields"][] = "c05";
$tdatatvshowview[".inlineEditFields"][] = "c06";
$tdatatvshowview[".inlineEditFields"][] = "c07";
$tdatatvshowview[".inlineEditFields"][] = "c08";
$tdatatvshowview[".inlineEditFields"][] = "c09";
$tdatatvshowview[".inlineEditFields"][] = "c10";
$tdatatvshowview[".inlineEditFields"][] = "c11";
$tdatatvshowview[".inlineEditFields"][] = "c12";
$tdatatvshowview[".inlineEditFields"][] = "c13";
$tdatatvshowview[".inlineEditFields"][] = "c14";
$tdatatvshowview[".inlineEditFields"][] = "c15";
$tdatatvshowview[".inlineEditFields"][] = "c16";
$tdatatvshowview[".inlineEditFields"][] = "c17";
$tdatatvshowview[".inlineEditFields"][] = "c18";
$tdatatvshowview[".inlineEditFields"][] = "c19";
$tdatatvshowview[".inlineEditFields"][] = "c20";
$tdatatvshowview[".inlineEditFields"][] = "c21";
$tdatatvshowview[".inlineEditFields"][] = "c22";
$tdatatvshowview[".inlineEditFields"][] = "c23";
$tdatatvshowview[".inlineEditFields"][] = "idParentPath";
$tdatatvshowview[".inlineEditFields"][] = "strPath";
$tdatatvshowview[".inlineEditFields"][] = "dateAdded";
$tdatatvshowview[".inlineEditFields"][] = "lastPlayed";
$tdatatvshowview[".inlineEditFields"][] = "totalCount";
$tdatatvshowview[".inlineEditFields"][] = "watchedcount";
$tdatatvshowview[".inlineEditFields"][] = "totalSeasons";

$tdatatvshowview[".exportFields"] = array();
$tdatatvshowview[".exportFields"][] = "idShow";
$tdatatvshowview[".exportFields"][] = "c00";
$tdatatvshowview[".exportFields"][] = "c01";
$tdatatvshowview[".exportFields"][] = "c02";
$tdatatvshowview[".exportFields"][] = "c03";
$tdatatvshowview[".exportFields"][] = "c04";
$tdatatvshowview[".exportFields"][] = "c05";
$tdatatvshowview[".exportFields"][] = "c06";
$tdatatvshowview[".exportFields"][] = "c07";
$tdatatvshowview[".exportFields"][] = "c08";
$tdatatvshowview[".exportFields"][] = "c09";
$tdatatvshowview[".exportFields"][] = "c10";
$tdatatvshowview[".exportFields"][] = "c11";
$tdatatvshowview[".exportFields"][] = "c12";
$tdatatvshowview[".exportFields"][] = "c13";
$tdatatvshowview[".exportFields"][] = "c14";
$tdatatvshowview[".exportFields"][] = "c15";
$tdatatvshowview[".exportFields"][] = "c16";
$tdatatvshowview[".exportFields"][] = "c17";
$tdatatvshowview[".exportFields"][] = "c18";
$tdatatvshowview[".exportFields"][] = "c19";
$tdatatvshowview[".exportFields"][] = "c20";
$tdatatvshowview[".exportFields"][] = "c21";
$tdatatvshowview[".exportFields"][] = "c22";
$tdatatvshowview[".exportFields"][] = "c23";
$tdatatvshowview[".exportFields"][] = "idParentPath";
$tdatatvshowview[".exportFields"][] = "strPath";
$tdatatvshowview[".exportFields"][] = "dateAdded";
$tdatatvshowview[".exportFields"][] = "lastPlayed";
$tdatatvshowview[".exportFields"][] = "totalCount";
$tdatatvshowview[".exportFields"][] = "watchedcount";
$tdatatvshowview[".exportFields"][] = "totalSeasons";

$tdatatvshowview[".printFields"] = array();
$tdatatvshowview[".printFields"][] = "idShow";
$tdatatvshowview[".printFields"][] = "c00";
$tdatatvshowview[".printFields"][] = "c01";
$tdatatvshowview[".printFields"][] = "c02";
$tdatatvshowview[".printFields"][] = "c03";
$tdatatvshowview[".printFields"][] = "c04";
$tdatatvshowview[".printFields"][] = "c05";
$tdatatvshowview[".printFields"][] = "c06";
$tdatatvshowview[".printFields"][] = "c07";
$tdatatvshowview[".printFields"][] = "c08";
$tdatatvshowview[".printFields"][] = "c09";
$tdatatvshowview[".printFields"][] = "c10";
$tdatatvshowview[".printFields"][] = "c11";
$tdatatvshowview[".printFields"][] = "c12";
$tdatatvshowview[".printFields"][] = "c13";
$tdatatvshowview[".printFields"][] = "c14";
$tdatatvshowview[".printFields"][] = "c15";
$tdatatvshowview[".printFields"][] = "c16";
$tdatatvshowview[".printFields"][] = "c17";
$tdatatvshowview[".printFields"][] = "c18";
$tdatatvshowview[".printFields"][] = "c19";
$tdatatvshowview[".printFields"][] = "c20";
$tdatatvshowview[".printFields"][] = "c21";
$tdatatvshowview[".printFields"][] = "c22";
$tdatatvshowview[".printFields"][] = "c23";
$tdatatvshowview[".printFields"][] = "idParentPath";
$tdatatvshowview[".printFields"][] = "strPath";
$tdatatvshowview[".printFields"][] = "dateAdded";
$tdatatvshowview[".printFields"][] = "lastPlayed";
$tdatatvshowview[".printFields"][] = "totalCount";
$tdatatvshowview[".printFields"][] = "watchedcount";
$tdatatvshowview[".printFields"][] = "totalSeasons";

//	idShow
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idShow";
	$fdata["GoodName"] = "idShow";
	$fdata["ownerTable"] = "tvshowview";
	$fdata["Label"] = "Id Show"; 
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
	
		$fdata["strField"] = "idShow"; 
		$fdata["FullName"] = "idShow";
	
		
		
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
	
		
		
	$tdatatvshowview["idShow"] = $fdata;
//	c00
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "c00";
	$fdata["GoodName"] = "c00";
	$fdata["ownerTable"] = "tvshowview";
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
	
		
		
	$tdatatvshowview["c00"] = $fdata;
//	c01
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "c01";
	$fdata["GoodName"] = "c01";
	$fdata["ownerTable"] = "tvshowview";
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
	
		
		
	$tdatatvshowview["c01"] = $fdata;
//	c02
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "c02";
	$fdata["GoodName"] = "c02";
	$fdata["ownerTable"] = "tvshowview";
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
	
		
		
	$tdatatvshowview["c02"] = $fdata;
//	c03
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "c03";
	$fdata["GoodName"] = "c03";
	$fdata["ownerTable"] = "tvshowview";
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
	
		
		
	$tdatatvshowview["c03"] = $fdata;
//	c04
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "c04";
	$fdata["GoodName"] = "c04";
	$fdata["ownerTable"] = "tvshowview";
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
	
		
		
	$tdatatvshowview["c04"] = $fdata;
//	c05
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "c05";
	$fdata["GoodName"] = "c05";
	$fdata["ownerTable"] = "tvshowview";
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
	
		
		
	$tdatatvshowview["c05"] = $fdata;
//	c06
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "c06";
	$fdata["GoodName"] = "c06";
	$fdata["ownerTable"] = "tvshowview";
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
	
		
		
	$tdatatvshowview["c06"] = $fdata;
//	c07
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "c07";
	$fdata["GoodName"] = "c07";
	$fdata["ownerTable"] = "tvshowview";
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
	
		
		
	$tdatatvshowview["c07"] = $fdata;
//	c08
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "c08";
	$fdata["GoodName"] = "c08";
	$fdata["ownerTable"] = "tvshowview";
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
	
		
		
	$tdatatvshowview["c08"] = $fdata;
//	c09
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "c09";
	$fdata["GoodName"] = "c09";
	$fdata["ownerTable"] = "tvshowview";
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
	
		
		
	$tdatatvshowview["c09"] = $fdata;
//	c10
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "c10";
	$fdata["GoodName"] = "c10";
	$fdata["ownerTable"] = "tvshowview";
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
	
		
		
	$tdatatvshowview["c10"] = $fdata;
//	c11
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "c11";
	$fdata["GoodName"] = "c11";
	$fdata["ownerTable"] = "tvshowview";
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
	
		
		
	$tdatatvshowview["c11"] = $fdata;
//	c12
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "c12";
	$fdata["GoodName"] = "c12";
	$fdata["ownerTable"] = "tvshowview";
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
	
		
		
	$tdatatvshowview["c12"] = $fdata;
//	c13
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "c13";
	$fdata["GoodName"] = "c13";
	$fdata["ownerTable"] = "tvshowview";
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
	
		
		
	$tdatatvshowview["c13"] = $fdata;
//	c14
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "c14";
	$fdata["GoodName"] = "c14";
	$fdata["ownerTable"] = "tvshowview";
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
	
		
		
	$tdatatvshowview["c14"] = $fdata;
//	c15
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "c15";
	$fdata["GoodName"] = "c15";
	$fdata["ownerTable"] = "tvshowview";
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
	
		
		
	$tdatatvshowview["c15"] = $fdata;
//	c16
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "c16";
	$fdata["GoodName"] = "c16";
	$fdata["ownerTable"] = "tvshowview";
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
	
		
		
	$tdatatvshowview["c16"] = $fdata;
//	c17
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "c17";
	$fdata["GoodName"] = "c17";
	$fdata["ownerTable"] = "tvshowview";
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
	
		
		
	$tdatatvshowview["c17"] = $fdata;
//	c18
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "c18";
	$fdata["GoodName"] = "c18";
	$fdata["ownerTable"] = "tvshowview";
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
	
		
		
	$tdatatvshowview["c18"] = $fdata;
//	c19
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "c19";
	$fdata["GoodName"] = "c19";
	$fdata["ownerTable"] = "tvshowview";
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
	
		
		
	$tdatatvshowview["c19"] = $fdata;
//	c20
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "c20";
	$fdata["GoodName"] = "c20";
	$fdata["ownerTable"] = "tvshowview";
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
	
		
		
	$tdatatvshowview["c20"] = $fdata;
//	c21
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "c21";
	$fdata["GoodName"] = "c21";
	$fdata["ownerTable"] = "tvshowview";
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
	
		
		
	$tdatatvshowview["c21"] = $fdata;
//	c22
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "c22";
	$fdata["GoodName"] = "c22";
	$fdata["ownerTable"] = "tvshowview";
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
	
		
		
	$tdatatvshowview["c22"] = $fdata;
//	c23
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "c23";
	$fdata["GoodName"] = "c23";
	$fdata["ownerTable"] = "tvshowview";
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
	
		
		
	$tdatatvshowview["c23"] = $fdata;
//	idParentPath
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "idParentPath";
	$fdata["GoodName"] = "idParentPath";
	$fdata["ownerTable"] = "tvshowview";
	$fdata["Label"] = "Id Parent Path"; 
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
	
		$fdata["strField"] = "idParentPath"; 
		$fdata["FullName"] = "idParentPath";
	
		
		
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
	
		
		
	$tdatatvshowview["idParentPath"] = $fdata;
//	strPath
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "strPath";
	$fdata["GoodName"] = "strPath";
	$fdata["ownerTable"] = "tvshowview";
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
	
		
		
	$tdatatvshowview["strPath"] = $fdata;
//	dateAdded
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "dateAdded";
	$fdata["GoodName"] = "dateAdded";
	$fdata["ownerTable"] = "tvshowview";
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
	
		
		
	$tdatatvshowview["dateAdded"] = $fdata;
//	lastPlayed
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "lastPlayed";
	$fdata["GoodName"] = "lastPlayed";
	$fdata["ownerTable"] = "tvshowview";
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
	
		
		
	$tdatatvshowview["lastPlayed"] = $fdata;
//	totalCount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "totalCount";
	$fdata["GoodName"] = "totalCount";
	$fdata["ownerTable"] = "tvshowview";
	$fdata["Label"] = "Total Count"; 
	$fdata["FieldType"] = 20;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "totalCount"; 
		$fdata["FullName"] = "totalCount";
	
		
		
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
	
		
		
	$tdatatvshowview["totalCount"] = $fdata;
//	watchedcount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "watchedcount";
	$fdata["GoodName"] = "watchedcount";
	$fdata["ownerTable"] = "tvshowview";
	$fdata["Label"] = "Watchedcount"; 
	$fdata["FieldType"] = 20;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "watchedcount"; 
		$fdata["FullName"] = "watchedcount";
	
		
		
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
	
		
		
	$tdatatvshowview["watchedcount"] = $fdata;
//	totalSeasons
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "totalSeasons";
	$fdata["GoodName"] = "totalSeasons";
	$fdata["ownerTable"] = "tvshowview";
	$fdata["Label"] = "Total Seasons"; 
	$fdata["FieldType"] = 20;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "totalSeasons"; 
		$fdata["FullName"] = "totalSeasons";
	
		
		
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
	
		
		
	$tdatatvshowview["totalSeasons"] = $fdata;

	
$tables_data["tvshowview"]=&$tdatatvshowview;
$field_labels["tvshowview"] = &$fieldLabelstvshowview;
$fieldToolTips["tvshowview"] = &$fieldToolTipstvshowview;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tvshowview"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["tvshowview"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_tvshowview()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "idShow,   c00,   c01,   c02,   c03,   c04,   c05,   c06,   c07,   c08,   c09,   c10,   c11,   c12,   c13,   c14,   c15,   c16,   c17,   c18,   c19,   c20,   c21,   c22,   c23,   idParentPath,   strPath,   dateAdded,   lastPlayed,   totalCount,   watchedcount,   totalSeasons";
$proto0["m_strFrom"] = "FROM tvshowview";
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
	"m_strName" => "idShow",
	"m_strTable" => "tvshowview"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "c00",
	"m_strTable" => "tvshowview"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "c01",
	"m_strTable" => "tvshowview"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "c02",
	"m_strTable" => "tvshowview"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "c03",
	"m_strTable" => "tvshowview"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "c04",
	"m_strTable" => "tvshowview"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "c05",
	"m_strTable" => "tvshowview"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "c06",
	"m_strTable" => "tvshowview"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "c07",
	"m_strTable" => "tvshowview"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "c08",
	"m_strTable" => "tvshowview"
));

$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "c09",
	"m_strTable" => "tvshowview"
));

$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "c10",
	"m_strTable" => "tvshowview"
));

$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "c11",
	"m_strTable" => "tvshowview"
));

$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "c12",
	"m_strTable" => "tvshowview"
));

$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "c13",
	"m_strTable" => "tvshowview"
));

$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "c14",
	"m_strTable" => "tvshowview"
));

$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "c15",
	"m_strTable" => "tvshowview"
));

$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "c16",
	"m_strTable" => "tvshowview"
));

$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLField(array(
	"m_strName" => "c17",
	"m_strTable" => "tvshowview"
));

$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "";
$obj = new SQLFieldListItem($proto41);

$proto0["m_fieldlist"][]=$obj;
						$proto43=array();
			$obj = new SQLField(array(
	"m_strName" => "c18",
	"m_strTable" => "tvshowview"
));

$proto43["m_expr"]=$obj;
$proto43["m_alias"] = "";
$obj = new SQLFieldListItem($proto43);

$proto0["m_fieldlist"][]=$obj;
						$proto45=array();
			$obj = new SQLField(array(
	"m_strName" => "c19",
	"m_strTable" => "tvshowview"
));

$proto45["m_expr"]=$obj;
$proto45["m_alias"] = "";
$obj = new SQLFieldListItem($proto45);

$proto0["m_fieldlist"][]=$obj;
						$proto47=array();
			$obj = new SQLField(array(
	"m_strName" => "c20",
	"m_strTable" => "tvshowview"
));

$proto47["m_expr"]=$obj;
$proto47["m_alias"] = "";
$obj = new SQLFieldListItem($proto47);

$proto0["m_fieldlist"][]=$obj;
						$proto49=array();
			$obj = new SQLField(array(
	"m_strName" => "c21",
	"m_strTable" => "tvshowview"
));

$proto49["m_expr"]=$obj;
$proto49["m_alias"] = "";
$obj = new SQLFieldListItem($proto49);

$proto0["m_fieldlist"][]=$obj;
						$proto51=array();
			$obj = new SQLField(array(
	"m_strName" => "c22",
	"m_strTable" => "tvshowview"
));

$proto51["m_expr"]=$obj;
$proto51["m_alias"] = "";
$obj = new SQLFieldListItem($proto51);

$proto0["m_fieldlist"][]=$obj;
						$proto53=array();
			$obj = new SQLField(array(
	"m_strName" => "c23",
	"m_strTable" => "tvshowview"
));

$proto53["m_expr"]=$obj;
$proto53["m_alias"] = "";
$obj = new SQLFieldListItem($proto53);

$proto0["m_fieldlist"][]=$obj;
						$proto55=array();
			$obj = new SQLField(array(
	"m_strName" => "idParentPath",
	"m_strTable" => "tvshowview"
));

$proto55["m_expr"]=$obj;
$proto55["m_alias"] = "";
$obj = new SQLFieldListItem($proto55);

$proto0["m_fieldlist"][]=$obj;
						$proto57=array();
			$obj = new SQLField(array(
	"m_strName" => "strPath",
	"m_strTable" => "tvshowview"
));

$proto57["m_expr"]=$obj;
$proto57["m_alias"] = "";
$obj = new SQLFieldListItem($proto57);

$proto0["m_fieldlist"][]=$obj;
						$proto59=array();
			$obj = new SQLField(array(
	"m_strName" => "dateAdded",
	"m_strTable" => "tvshowview"
));

$proto59["m_expr"]=$obj;
$proto59["m_alias"] = "";
$obj = new SQLFieldListItem($proto59);

$proto0["m_fieldlist"][]=$obj;
						$proto61=array();
			$obj = new SQLField(array(
	"m_strName" => "lastPlayed",
	"m_strTable" => "tvshowview"
));

$proto61["m_expr"]=$obj;
$proto61["m_alias"] = "";
$obj = new SQLFieldListItem($proto61);

$proto0["m_fieldlist"][]=$obj;
						$proto63=array();
			$obj = new SQLField(array(
	"m_strName" => "totalCount",
	"m_strTable" => "tvshowview"
));

$proto63["m_expr"]=$obj;
$proto63["m_alias"] = "";
$obj = new SQLFieldListItem($proto63);

$proto0["m_fieldlist"][]=$obj;
						$proto65=array();
			$obj = new SQLField(array(
	"m_strName" => "watchedcount",
	"m_strTable" => "tvshowview"
));

$proto65["m_expr"]=$obj;
$proto65["m_alias"] = "";
$obj = new SQLFieldListItem($proto65);

$proto0["m_fieldlist"][]=$obj;
						$proto67=array();
			$obj = new SQLField(array(
	"m_strName" => "totalSeasons",
	"m_strTable" => "tvshowview"
));

$proto67["m_expr"]=$obj;
$proto67["m_alias"] = "";
$obj = new SQLFieldListItem($proto67);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto69=array();
$proto69["m_link"] = "SQLL_MAIN";
			$proto70=array();
$proto70["m_strName"] = "tvshowview";
$proto70["m_columns"] = array();
$proto70["m_columns"][] = "idShow";
$proto70["m_columns"][] = "c00";
$proto70["m_columns"][] = "c01";
$proto70["m_columns"][] = "c02";
$proto70["m_columns"][] = "c03";
$proto70["m_columns"][] = "c04";
$proto70["m_columns"][] = "c05";
$proto70["m_columns"][] = "c06";
$proto70["m_columns"][] = "c07";
$proto70["m_columns"][] = "c08";
$proto70["m_columns"][] = "c09";
$proto70["m_columns"][] = "c10";
$proto70["m_columns"][] = "c11";
$proto70["m_columns"][] = "c12";
$proto70["m_columns"][] = "c13";
$proto70["m_columns"][] = "c14";
$proto70["m_columns"][] = "c15";
$proto70["m_columns"][] = "c16";
$proto70["m_columns"][] = "c17";
$proto70["m_columns"][] = "c18";
$proto70["m_columns"][] = "c19";
$proto70["m_columns"][] = "c20";
$proto70["m_columns"][] = "c21";
$proto70["m_columns"][] = "c22";
$proto70["m_columns"][] = "c23";
$proto70["m_columns"][] = "idParentPath";
$proto70["m_columns"][] = "strPath";
$proto70["m_columns"][] = "dateAdded";
$proto70["m_columns"][] = "lastPlayed";
$proto70["m_columns"][] = "totalCount";
$proto70["m_columns"][] = "watchedcount";
$proto70["m_columns"][] = "totalSeasons";
$obj = new SQLTable($proto70);

$proto69["m_table"] = $obj;
$proto69["m_alias"] = "";
$proto71=array();
$proto71["m_sql"] = "";
$proto71["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto71["m_column"]=$obj;
$proto71["m_contained"] = array();
$proto71["m_strCase"] = "";
$proto71["m_havingmode"] = "0";
$proto71["m_inBrackets"] = "0";
$proto71["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto71);

$proto69["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto69);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tvshowview = createSqlQuery_tvshowview();
																																$tdatatvshowview[".sqlquery"] = $queryData_tvshowview;

$tableEvents["tvshowview"] = new eventsBase;
$tdatatvshowview[".hasEvents"] = false;

$cipherer = new RunnerCipherer("tvshowview");

?>