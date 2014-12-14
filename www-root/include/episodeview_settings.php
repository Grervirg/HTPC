<?php
require_once(getabspath("classes/cipherer.php"));
$tdataepisodeview = array();
	$tdataepisodeview[".NumberOfChars"] = 80; 
	$tdataepisodeview[".ShortName"] = "episodeview";
	$tdataepisodeview[".OwnerID"] = "";
	$tdataepisodeview[".OriginalTable"] = "episodeview";

//	field labels
$fieldLabelsepisodeview = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsepisodeview["English"] = array();
	$fieldToolTipsepisodeview["English"] = array();
	$fieldLabelsepisodeview["English"]["idEpisode"] = "Id Episode";
	$fieldToolTipsepisodeview["English"]["idEpisode"] = "";
	$fieldLabelsepisodeview["English"]["idFile"] = "Id File";
	$fieldToolTipsepisodeview["English"]["idFile"] = "";
	$fieldLabelsepisodeview["English"]["c00"] = "C00";
	$fieldToolTipsepisodeview["English"]["c00"] = "";
	$fieldLabelsepisodeview["English"]["c01"] = "C01";
	$fieldToolTipsepisodeview["English"]["c01"] = "";
	$fieldLabelsepisodeview["English"]["c02"] = "C02";
	$fieldToolTipsepisodeview["English"]["c02"] = "";
	$fieldLabelsepisodeview["English"]["c03"] = "C03";
	$fieldToolTipsepisodeview["English"]["c03"] = "";
	$fieldLabelsepisodeview["English"]["c04"] = "C04";
	$fieldToolTipsepisodeview["English"]["c04"] = "";
	$fieldLabelsepisodeview["English"]["c05"] = "C05";
	$fieldToolTipsepisodeview["English"]["c05"] = "";
	$fieldLabelsepisodeview["English"]["c06"] = "C06";
	$fieldToolTipsepisodeview["English"]["c06"] = "";
	$fieldLabelsepisodeview["English"]["c07"] = "C07";
	$fieldToolTipsepisodeview["English"]["c07"] = "";
	$fieldLabelsepisodeview["English"]["c08"] = "C08";
	$fieldToolTipsepisodeview["English"]["c08"] = "";
	$fieldLabelsepisodeview["English"]["c09"] = "C09";
	$fieldToolTipsepisodeview["English"]["c09"] = "";
	$fieldLabelsepisodeview["English"]["c10"] = "C10";
	$fieldToolTipsepisodeview["English"]["c10"] = "";
	$fieldLabelsepisodeview["English"]["c11"] = "C11";
	$fieldToolTipsepisodeview["English"]["c11"] = "";
	$fieldLabelsepisodeview["English"]["c12"] = "C12";
	$fieldToolTipsepisodeview["English"]["c12"] = "";
	$fieldLabelsepisodeview["English"]["c13"] = "C13";
	$fieldToolTipsepisodeview["English"]["c13"] = "";
	$fieldLabelsepisodeview["English"]["c14"] = "C14";
	$fieldToolTipsepisodeview["English"]["c14"] = "";
	$fieldLabelsepisodeview["English"]["c15"] = "C15";
	$fieldToolTipsepisodeview["English"]["c15"] = "";
	$fieldLabelsepisodeview["English"]["c16"] = "C16";
	$fieldToolTipsepisodeview["English"]["c16"] = "";
	$fieldLabelsepisodeview["English"]["c17"] = "C17";
	$fieldToolTipsepisodeview["English"]["c17"] = "";
	$fieldLabelsepisodeview["English"]["c18"] = "C18";
	$fieldToolTipsepisodeview["English"]["c18"] = "";
	$fieldLabelsepisodeview["English"]["c19"] = "C19";
	$fieldToolTipsepisodeview["English"]["c19"] = "";
	$fieldLabelsepisodeview["English"]["c20"] = "C20";
	$fieldToolTipsepisodeview["English"]["c20"] = "";
	$fieldLabelsepisodeview["English"]["c21"] = "C21";
	$fieldToolTipsepisodeview["English"]["c21"] = "";
	$fieldLabelsepisodeview["English"]["c22"] = "C22";
	$fieldToolTipsepisodeview["English"]["c22"] = "";
	$fieldLabelsepisodeview["English"]["c23"] = "C23";
	$fieldToolTipsepisodeview["English"]["c23"] = "";
	$fieldLabelsepisodeview["English"]["idShow"] = "Id Show";
	$fieldToolTipsepisodeview["English"]["idShow"] = "";
	$fieldLabelsepisodeview["English"]["strFileName"] = "Str File Name";
	$fieldToolTipsepisodeview["English"]["strFileName"] = "";
	$fieldLabelsepisodeview["English"]["strPath"] = "Str Path";
	$fieldToolTipsepisodeview["English"]["strPath"] = "";
	$fieldLabelsepisodeview["English"]["playCount"] = "Play Count";
	$fieldToolTipsepisodeview["English"]["playCount"] = "";
	$fieldLabelsepisodeview["English"]["lastPlayed"] = "Last Played";
	$fieldToolTipsepisodeview["English"]["lastPlayed"] = "";
	$fieldLabelsepisodeview["English"]["dateAdded"] = "Date Added";
	$fieldToolTipsepisodeview["English"]["dateAdded"] = "";
	$fieldLabelsepisodeview["English"]["strTitle"] = "Str Title";
	$fieldToolTipsepisodeview["English"]["strTitle"] = "";
	$fieldLabelsepisodeview["English"]["strStudio"] = "Str Studio";
	$fieldToolTipsepisodeview["English"]["strStudio"] = "";
	$fieldLabelsepisodeview["English"]["premiered"] = "Premiered";
	$fieldToolTipsepisodeview["English"]["premiered"] = "";
	$fieldLabelsepisodeview["English"]["mpaa"] = "Mpaa";
	$fieldToolTipsepisodeview["English"]["mpaa"] = "";
	$fieldLabelsepisodeview["English"]["resumeTimeInSeconds"] = "Resume Time In Seconds";
	$fieldToolTipsepisodeview["English"]["resumeTimeInSeconds"] = "";
	$fieldLabelsepisodeview["English"]["totalTimeInSeconds"] = "Total Time In Seconds";
	$fieldToolTipsepisodeview["English"]["totalTimeInSeconds"] = "";
	$fieldLabelsepisodeview["English"]["idSeason"] = "Id Season";
	$fieldToolTipsepisodeview["English"]["idSeason"] = "";
	if (count($fieldToolTipsepisodeview["English"]))
		$tdataepisodeview[".isUseToolTips"] = true;
}
	
	
	$tdataepisodeview[".NCSearch"] = true;



$tdataepisodeview[".shortTableName"] = "episodeview";
$tdataepisodeview[".nSecOptions"] = 0;
$tdataepisodeview[".recsPerRowList"] = 1;
$tdataepisodeview[".mainTableOwnerID"] = "";
$tdataepisodeview[".moveNext"] = 1;
$tdataepisodeview[".nType"] = 0;

$tdataepisodeview[".strOriginalTableName"] = "episodeview";




$tdataepisodeview[".showAddInPopup"] = false;

$tdataepisodeview[".showEditInPopup"] = false;

$tdataepisodeview[".showViewInPopup"] = false;

$tdataepisodeview[".fieldsForRegister"] = array();

$tdataepisodeview[".listAjax"] = false;

	$tdataepisodeview[".audit"] = false;

	$tdataepisodeview[".locking"] = false;

$tdataepisodeview[".listIcons"] = true;

$tdataepisodeview[".exportTo"] = true;

$tdataepisodeview[".printFriendly"] = true;


$tdataepisodeview[".showSimpleSearchOptions"] = false;

$tdataepisodeview[".showSearchPanel"] = true;

if (isMobile())
	$tdataepisodeview[".isUseAjaxSuggest"] = false;
else 
	$tdataepisodeview[".isUseAjaxSuggest"] = true;

$tdataepisodeview[".rowHighlite"] = true;

// button handlers file names

$tdataepisodeview[".addPageEvents"] = false;

// use timepicker for search panel
$tdataepisodeview[".isUseTimeForSearch"] = false;




$tdataepisodeview[".allSearchFields"] = array();

$tdataepisodeview[".allSearchFields"][] = "idEpisode";
$tdataepisodeview[".allSearchFields"][] = "idFile";
$tdataepisodeview[".allSearchFields"][] = "c00";
$tdataepisodeview[".allSearchFields"][] = "c01";
$tdataepisodeview[".allSearchFields"][] = "c02";
$tdataepisodeview[".allSearchFields"][] = "c03";
$tdataepisodeview[".allSearchFields"][] = "c04";
$tdataepisodeview[".allSearchFields"][] = "c05";
$tdataepisodeview[".allSearchFields"][] = "c06";
$tdataepisodeview[".allSearchFields"][] = "c07";
$tdataepisodeview[".allSearchFields"][] = "c08";
$tdataepisodeview[".allSearchFields"][] = "c09";
$tdataepisodeview[".allSearchFields"][] = "c10";
$tdataepisodeview[".allSearchFields"][] = "c11";
$tdataepisodeview[".allSearchFields"][] = "c12";
$tdataepisodeview[".allSearchFields"][] = "c13";
$tdataepisodeview[".allSearchFields"][] = "c14";
$tdataepisodeview[".allSearchFields"][] = "c15";
$tdataepisodeview[".allSearchFields"][] = "c16";
$tdataepisodeview[".allSearchFields"][] = "c17";
$tdataepisodeview[".allSearchFields"][] = "c18";
$tdataepisodeview[".allSearchFields"][] = "c19";
$tdataepisodeview[".allSearchFields"][] = "c20";
$tdataepisodeview[".allSearchFields"][] = "c21";
$tdataepisodeview[".allSearchFields"][] = "c22";
$tdataepisodeview[".allSearchFields"][] = "c23";
$tdataepisodeview[".allSearchFields"][] = "idShow";
$tdataepisodeview[".allSearchFields"][] = "strFileName";
$tdataepisodeview[".allSearchFields"][] = "strPath";
$tdataepisodeview[".allSearchFields"][] = "playCount";
$tdataepisodeview[".allSearchFields"][] = "lastPlayed";
$tdataepisodeview[".allSearchFields"][] = "dateAdded";
$tdataepisodeview[".allSearchFields"][] = "strTitle";
$tdataepisodeview[".allSearchFields"][] = "strStudio";
$tdataepisodeview[".allSearchFields"][] = "premiered";
$tdataepisodeview[".allSearchFields"][] = "mpaa";
$tdataepisodeview[".allSearchFields"][] = "resumeTimeInSeconds";
$tdataepisodeview[".allSearchFields"][] = "totalTimeInSeconds";
$tdataepisodeview[".allSearchFields"][] = "idSeason";

$tdataepisodeview[".googleLikeFields"][] = "idEpisode";
$tdataepisodeview[".googleLikeFields"][] = "idFile";
$tdataepisodeview[".googleLikeFields"][] = "c00";
$tdataepisodeview[".googleLikeFields"][] = "c01";
$tdataepisodeview[".googleLikeFields"][] = "c02";
$tdataepisodeview[".googleLikeFields"][] = "c03";
$tdataepisodeview[".googleLikeFields"][] = "c04";
$tdataepisodeview[".googleLikeFields"][] = "c05";
$tdataepisodeview[".googleLikeFields"][] = "c06";
$tdataepisodeview[".googleLikeFields"][] = "c07";
$tdataepisodeview[".googleLikeFields"][] = "c08";
$tdataepisodeview[".googleLikeFields"][] = "c09";
$tdataepisodeview[".googleLikeFields"][] = "c10";
$tdataepisodeview[".googleLikeFields"][] = "c11";
$tdataepisodeview[".googleLikeFields"][] = "c12";
$tdataepisodeview[".googleLikeFields"][] = "c13";
$tdataepisodeview[".googleLikeFields"][] = "c14";
$tdataepisodeview[".googleLikeFields"][] = "c15";
$tdataepisodeview[".googleLikeFields"][] = "c16";
$tdataepisodeview[".googleLikeFields"][] = "c17";
$tdataepisodeview[".googleLikeFields"][] = "c18";
$tdataepisodeview[".googleLikeFields"][] = "c19";
$tdataepisodeview[".googleLikeFields"][] = "c20";
$tdataepisodeview[".googleLikeFields"][] = "c21";
$tdataepisodeview[".googleLikeFields"][] = "c22";
$tdataepisodeview[".googleLikeFields"][] = "c23";
$tdataepisodeview[".googleLikeFields"][] = "idShow";
$tdataepisodeview[".googleLikeFields"][] = "strFileName";
$tdataepisodeview[".googleLikeFields"][] = "strPath";
$tdataepisodeview[".googleLikeFields"][] = "playCount";
$tdataepisodeview[".googleLikeFields"][] = "lastPlayed";
$tdataepisodeview[".googleLikeFields"][] = "dateAdded";
$tdataepisodeview[".googleLikeFields"][] = "strTitle";
$tdataepisodeview[".googleLikeFields"][] = "strStudio";
$tdataepisodeview[".googleLikeFields"][] = "premiered";
$tdataepisodeview[".googleLikeFields"][] = "mpaa";
$tdataepisodeview[".googleLikeFields"][] = "resumeTimeInSeconds";
$tdataepisodeview[".googleLikeFields"][] = "totalTimeInSeconds";
$tdataepisodeview[".googleLikeFields"][] = "idSeason";


$tdataepisodeview[".advSearchFields"][] = "idEpisode";
$tdataepisodeview[".advSearchFields"][] = "idFile";
$tdataepisodeview[".advSearchFields"][] = "c00";
$tdataepisodeview[".advSearchFields"][] = "c01";
$tdataepisodeview[".advSearchFields"][] = "c02";
$tdataepisodeview[".advSearchFields"][] = "c03";
$tdataepisodeview[".advSearchFields"][] = "c04";
$tdataepisodeview[".advSearchFields"][] = "c05";
$tdataepisodeview[".advSearchFields"][] = "c06";
$tdataepisodeview[".advSearchFields"][] = "c07";
$tdataepisodeview[".advSearchFields"][] = "c08";
$tdataepisodeview[".advSearchFields"][] = "c09";
$tdataepisodeview[".advSearchFields"][] = "c10";
$tdataepisodeview[".advSearchFields"][] = "c11";
$tdataepisodeview[".advSearchFields"][] = "c12";
$tdataepisodeview[".advSearchFields"][] = "c13";
$tdataepisodeview[".advSearchFields"][] = "c14";
$tdataepisodeview[".advSearchFields"][] = "c15";
$tdataepisodeview[".advSearchFields"][] = "c16";
$tdataepisodeview[".advSearchFields"][] = "c17";
$tdataepisodeview[".advSearchFields"][] = "c18";
$tdataepisodeview[".advSearchFields"][] = "c19";
$tdataepisodeview[".advSearchFields"][] = "c20";
$tdataepisodeview[".advSearchFields"][] = "c21";
$tdataepisodeview[".advSearchFields"][] = "c22";
$tdataepisodeview[".advSearchFields"][] = "c23";
$tdataepisodeview[".advSearchFields"][] = "idShow";
$tdataepisodeview[".advSearchFields"][] = "strFileName";
$tdataepisodeview[".advSearchFields"][] = "strPath";
$tdataepisodeview[".advSearchFields"][] = "playCount";
$tdataepisodeview[".advSearchFields"][] = "lastPlayed";
$tdataepisodeview[".advSearchFields"][] = "dateAdded";
$tdataepisodeview[".advSearchFields"][] = "strTitle";
$tdataepisodeview[".advSearchFields"][] = "strStudio";
$tdataepisodeview[".advSearchFields"][] = "premiered";
$tdataepisodeview[".advSearchFields"][] = "mpaa";
$tdataepisodeview[".advSearchFields"][] = "resumeTimeInSeconds";
$tdataepisodeview[".advSearchFields"][] = "totalTimeInSeconds";
$tdataepisodeview[".advSearchFields"][] = "idSeason";

$tdataepisodeview[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdataepisodeview[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataepisodeview[".strOrderBy"] = $tstrOrderBy;

$tdataepisodeview[".orderindexes"] = array();

$tdataepisodeview[".sqlHead"] = "SELECT idEpisode,   idFile,   c00,   c01,   c02,   c03,   c04,   c05,   c06,   c07,   c08,   c09,   c10,   c11,   c12,   c13,   c14,   c15,   c16,   c17,   c18,   c19,   c20,   c21,   c22,   c23,   idShow,   strFileName,   strPath,   playCount,   lastPlayed,   dateAdded,   strTitle,   strStudio,   premiered,   mpaa,   resumeTimeInSeconds,   totalTimeInSeconds,   idSeason";
$tdataepisodeview[".sqlFrom"] = "FROM episodeview";
$tdataepisodeview[".sqlWhereExpr"] = "";
$tdataepisodeview[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataepisodeview[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataepisodeview[".arrGroupsPerPage"] = $arrGPP;

$tableKeysepisodeview = array();
$tdataepisodeview[".Keys"] = $tableKeysepisodeview;

$tdataepisodeview[".listFields"] = array();
$tdataepisodeview[".listFields"][] = "idEpisode";
$tdataepisodeview[".listFields"][] = "idFile";
$tdataepisodeview[".listFields"][] = "c00";
$tdataepisodeview[".listFields"][] = "c01";
$tdataepisodeview[".listFields"][] = "c02";
$tdataepisodeview[".listFields"][] = "c03";
$tdataepisodeview[".listFields"][] = "c04";
$tdataepisodeview[".listFields"][] = "c05";
$tdataepisodeview[".listFields"][] = "c06";
$tdataepisodeview[".listFields"][] = "c07";
$tdataepisodeview[".listFields"][] = "c08";
$tdataepisodeview[".listFields"][] = "c09";
$tdataepisodeview[".listFields"][] = "c10";
$tdataepisodeview[".listFields"][] = "c11";
$tdataepisodeview[".listFields"][] = "c12";
$tdataepisodeview[".listFields"][] = "c13";
$tdataepisodeview[".listFields"][] = "c14";
$tdataepisodeview[".listFields"][] = "c15";
$tdataepisodeview[".listFields"][] = "c16";
$tdataepisodeview[".listFields"][] = "c17";
$tdataepisodeview[".listFields"][] = "c18";
$tdataepisodeview[".listFields"][] = "c19";
$tdataepisodeview[".listFields"][] = "c20";
$tdataepisodeview[".listFields"][] = "c21";
$tdataepisodeview[".listFields"][] = "c22";
$tdataepisodeview[".listFields"][] = "c23";
$tdataepisodeview[".listFields"][] = "idShow";
$tdataepisodeview[".listFields"][] = "strFileName";
$tdataepisodeview[".listFields"][] = "strPath";
$tdataepisodeview[".listFields"][] = "playCount";
$tdataepisodeview[".listFields"][] = "lastPlayed";
$tdataepisodeview[".listFields"][] = "dateAdded";
$tdataepisodeview[".listFields"][] = "strTitle";
$tdataepisodeview[".listFields"][] = "strStudio";
$tdataepisodeview[".listFields"][] = "premiered";
$tdataepisodeview[".listFields"][] = "mpaa";
$tdataepisodeview[".listFields"][] = "resumeTimeInSeconds";
$tdataepisodeview[".listFields"][] = "totalTimeInSeconds";
$tdataepisodeview[".listFields"][] = "idSeason";

$tdataepisodeview[".viewFields"] = array();
$tdataepisodeview[".viewFields"][] = "idEpisode";
$tdataepisodeview[".viewFields"][] = "idFile";
$tdataepisodeview[".viewFields"][] = "c00";
$tdataepisodeview[".viewFields"][] = "c01";
$tdataepisodeview[".viewFields"][] = "c02";
$tdataepisodeview[".viewFields"][] = "c03";
$tdataepisodeview[".viewFields"][] = "c04";
$tdataepisodeview[".viewFields"][] = "c05";
$tdataepisodeview[".viewFields"][] = "c06";
$tdataepisodeview[".viewFields"][] = "c07";
$tdataepisodeview[".viewFields"][] = "c08";
$tdataepisodeview[".viewFields"][] = "c09";
$tdataepisodeview[".viewFields"][] = "c10";
$tdataepisodeview[".viewFields"][] = "c11";
$tdataepisodeview[".viewFields"][] = "c12";
$tdataepisodeview[".viewFields"][] = "c13";
$tdataepisodeview[".viewFields"][] = "c14";
$tdataepisodeview[".viewFields"][] = "c15";
$tdataepisodeview[".viewFields"][] = "c16";
$tdataepisodeview[".viewFields"][] = "c17";
$tdataepisodeview[".viewFields"][] = "c18";
$tdataepisodeview[".viewFields"][] = "c19";
$tdataepisodeview[".viewFields"][] = "c20";
$tdataepisodeview[".viewFields"][] = "c21";
$tdataepisodeview[".viewFields"][] = "c22";
$tdataepisodeview[".viewFields"][] = "c23";
$tdataepisodeview[".viewFields"][] = "idShow";
$tdataepisodeview[".viewFields"][] = "strFileName";
$tdataepisodeview[".viewFields"][] = "strPath";
$tdataepisodeview[".viewFields"][] = "playCount";
$tdataepisodeview[".viewFields"][] = "lastPlayed";
$tdataepisodeview[".viewFields"][] = "dateAdded";
$tdataepisodeview[".viewFields"][] = "strTitle";
$tdataepisodeview[".viewFields"][] = "strStudio";
$tdataepisodeview[".viewFields"][] = "premiered";
$tdataepisodeview[".viewFields"][] = "mpaa";
$tdataepisodeview[".viewFields"][] = "resumeTimeInSeconds";
$tdataepisodeview[".viewFields"][] = "totalTimeInSeconds";
$tdataepisodeview[".viewFields"][] = "idSeason";

$tdataepisodeview[".addFields"] = array();
$tdataepisodeview[".addFields"][] = "idEpisode";
$tdataepisodeview[".addFields"][] = "idFile";
$tdataepisodeview[".addFields"][] = "c00";
$tdataepisodeview[".addFields"][] = "c01";
$tdataepisodeview[".addFields"][] = "c02";
$tdataepisodeview[".addFields"][] = "c03";
$tdataepisodeview[".addFields"][] = "c04";
$tdataepisodeview[".addFields"][] = "c05";
$tdataepisodeview[".addFields"][] = "c06";
$tdataepisodeview[".addFields"][] = "c07";
$tdataepisodeview[".addFields"][] = "c08";
$tdataepisodeview[".addFields"][] = "c09";
$tdataepisodeview[".addFields"][] = "c10";
$tdataepisodeview[".addFields"][] = "c11";
$tdataepisodeview[".addFields"][] = "c12";
$tdataepisodeview[".addFields"][] = "c13";
$tdataepisodeview[".addFields"][] = "c14";
$tdataepisodeview[".addFields"][] = "c15";
$tdataepisodeview[".addFields"][] = "c16";
$tdataepisodeview[".addFields"][] = "c17";
$tdataepisodeview[".addFields"][] = "c18";
$tdataepisodeview[".addFields"][] = "c19";
$tdataepisodeview[".addFields"][] = "c20";
$tdataepisodeview[".addFields"][] = "c21";
$tdataepisodeview[".addFields"][] = "c22";
$tdataepisodeview[".addFields"][] = "c23";
$tdataepisodeview[".addFields"][] = "idShow";
$tdataepisodeview[".addFields"][] = "strFileName";
$tdataepisodeview[".addFields"][] = "strPath";
$tdataepisodeview[".addFields"][] = "playCount";
$tdataepisodeview[".addFields"][] = "lastPlayed";
$tdataepisodeview[".addFields"][] = "dateAdded";
$tdataepisodeview[".addFields"][] = "strTitle";
$tdataepisodeview[".addFields"][] = "strStudio";
$tdataepisodeview[".addFields"][] = "premiered";
$tdataepisodeview[".addFields"][] = "mpaa";
$tdataepisodeview[".addFields"][] = "resumeTimeInSeconds";
$tdataepisodeview[".addFields"][] = "totalTimeInSeconds";
$tdataepisodeview[".addFields"][] = "idSeason";

$tdataepisodeview[".inlineAddFields"] = array();
$tdataepisodeview[".inlineAddFields"][] = "idEpisode";
$tdataepisodeview[".inlineAddFields"][] = "idFile";
$tdataepisodeview[".inlineAddFields"][] = "c00";
$tdataepisodeview[".inlineAddFields"][] = "c01";
$tdataepisodeview[".inlineAddFields"][] = "c02";
$tdataepisodeview[".inlineAddFields"][] = "c03";
$tdataepisodeview[".inlineAddFields"][] = "c04";
$tdataepisodeview[".inlineAddFields"][] = "c05";
$tdataepisodeview[".inlineAddFields"][] = "c06";
$tdataepisodeview[".inlineAddFields"][] = "c07";
$tdataepisodeview[".inlineAddFields"][] = "c08";
$tdataepisodeview[".inlineAddFields"][] = "c09";
$tdataepisodeview[".inlineAddFields"][] = "c10";
$tdataepisodeview[".inlineAddFields"][] = "c11";
$tdataepisodeview[".inlineAddFields"][] = "c12";
$tdataepisodeview[".inlineAddFields"][] = "c13";
$tdataepisodeview[".inlineAddFields"][] = "c14";
$tdataepisodeview[".inlineAddFields"][] = "c15";
$tdataepisodeview[".inlineAddFields"][] = "c16";
$tdataepisodeview[".inlineAddFields"][] = "c17";
$tdataepisodeview[".inlineAddFields"][] = "c18";
$tdataepisodeview[".inlineAddFields"][] = "c19";
$tdataepisodeview[".inlineAddFields"][] = "c20";
$tdataepisodeview[".inlineAddFields"][] = "c21";
$tdataepisodeview[".inlineAddFields"][] = "c22";
$tdataepisodeview[".inlineAddFields"][] = "c23";
$tdataepisodeview[".inlineAddFields"][] = "idShow";
$tdataepisodeview[".inlineAddFields"][] = "strFileName";
$tdataepisodeview[".inlineAddFields"][] = "strPath";
$tdataepisodeview[".inlineAddFields"][] = "playCount";
$tdataepisodeview[".inlineAddFields"][] = "lastPlayed";
$tdataepisodeview[".inlineAddFields"][] = "dateAdded";
$tdataepisodeview[".inlineAddFields"][] = "strTitle";
$tdataepisodeview[".inlineAddFields"][] = "strStudio";
$tdataepisodeview[".inlineAddFields"][] = "premiered";
$tdataepisodeview[".inlineAddFields"][] = "mpaa";
$tdataepisodeview[".inlineAddFields"][] = "resumeTimeInSeconds";
$tdataepisodeview[".inlineAddFields"][] = "totalTimeInSeconds";
$tdataepisodeview[".inlineAddFields"][] = "idSeason";

$tdataepisodeview[".editFields"] = array();
$tdataepisodeview[".editFields"][] = "idEpisode";
$tdataepisodeview[".editFields"][] = "idFile";
$tdataepisodeview[".editFields"][] = "c00";
$tdataepisodeview[".editFields"][] = "c01";
$tdataepisodeview[".editFields"][] = "c02";
$tdataepisodeview[".editFields"][] = "c03";
$tdataepisodeview[".editFields"][] = "c04";
$tdataepisodeview[".editFields"][] = "c05";
$tdataepisodeview[".editFields"][] = "c06";
$tdataepisodeview[".editFields"][] = "c07";
$tdataepisodeview[".editFields"][] = "c08";
$tdataepisodeview[".editFields"][] = "c09";
$tdataepisodeview[".editFields"][] = "c10";
$tdataepisodeview[".editFields"][] = "c11";
$tdataepisodeview[".editFields"][] = "c12";
$tdataepisodeview[".editFields"][] = "c13";
$tdataepisodeview[".editFields"][] = "c14";
$tdataepisodeview[".editFields"][] = "c15";
$tdataepisodeview[".editFields"][] = "c16";
$tdataepisodeview[".editFields"][] = "c17";
$tdataepisodeview[".editFields"][] = "c18";
$tdataepisodeview[".editFields"][] = "c19";
$tdataepisodeview[".editFields"][] = "c20";
$tdataepisodeview[".editFields"][] = "c21";
$tdataepisodeview[".editFields"][] = "c22";
$tdataepisodeview[".editFields"][] = "c23";
$tdataepisodeview[".editFields"][] = "idShow";
$tdataepisodeview[".editFields"][] = "strFileName";
$tdataepisodeview[".editFields"][] = "strPath";
$tdataepisodeview[".editFields"][] = "playCount";
$tdataepisodeview[".editFields"][] = "lastPlayed";
$tdataepisodeview[".editFields"][] = "dateAdded";
$tdataepisodeview[".editFields"][] = "strTitle";
$tdataepisodeview[".editFields"][] = "strStudio";
$tdataepisodeview[".editFields"][] = "premiered";
$tdataepisodeview[".editFields"][] = "mpaa";
$tdataepisodeview[".editFields"][] = "resumeTimeInSeconds";
$tdataepisodeview[".editFields"][] = "totalTimeInSeconds";
$tdataepisodeview[".editFields"][] = "idSeason";

$tdataepisodeview[".inlineEditFields"] = array();
$tdataepisodeview[".inlineEditFields"][] = "idEpisode";
$tdataepisodeview[".inlineEditFields"][] = "idFile";
$tdataepisodeview[".inlineEditFields"][] = "c00";
$tdataepisodeview[".inlineEditFields"][] = "c01";
$tdataepisodeview[".inlineEditFields"][] = "c02";
$tdataepisodeview[".inlineEditFields"][] = "c03";
$tdataepisodeview[".inlineEditFields"][] = "c04";
$tdataepisodeview[".inlineEditFields"][] = "c05";
$tdataepisodeview[".inlineEditFields"][] = "c06";
$tdataepisodeview[".inlineEditFields"][] = "c07";
$tdataepisodeview[".inlineEditFields"][] = "c08";
$tdataepisodeview[".inlineEditFields"][] = "c09";
$tdataepisodeview[".inlineEditFields"][] = "c10";
$tdataepisodeview[".inlineEditFields"][] = "c11";
$tdataepisodeview[".inlineEditFields"][] = "c12";
$tdataepisodeview[".inlineEditFields"][] = "c13";
$tdataepisodeview[".inlineEditFields"][] = "c14";
$tdataepisodeview[".inlineEditFields"][] = "c15";
$tdataepisodeview[".inlineEditFields"][] = "c16";
$tdataepisodeview[".inlineEditFields"][] = "c17";
$tdataepisodeview[".inlineEditFields"][] = "c18";
$tdataepisodeview[".inlineEditFields"][] = "c19";
$tdataepisodeview[".inlineEditFields"][] = "c20";
$tdataepisodeview[".inlineEditFields"][] = "c21";
$tdataepisodeview[".inlineEditFields"][] = "c22";
$tdataepisodeview[".inlineEditFields"][] = "c23";
$tdataepisodeview[".inlineEditFields"][] = "idShow";
$tdataepisodeview[".inlineEditFields"][] = "strFileName";
$tdataepisodeview[".inlineEditFields"][] = "strPath";
$tdataepisodeview[".inlineEditFields"][] = "playCount";
$tdataepisodeview[".inlineEditFields"][] = "lastPlayed";
$tdataepisodeview[".inlineEditFields"][] = "dateAdded";
$tdataepisodeview[".inlineEditFields"][] = "strTitle";
$tdataepisodeview[".inlineEditFields"][] = "strStudio";
$tdataepisodeview[".inlineEditFields"][] = "premiered";
$tdataepisodeview[".inlineEditFields"][] = "mpaa";
$tdataepisodeview[".inlineEditFields"][] = "resumeTimeInSeconds";
$tdataepisodeview[".inlineEditFields"][] = "totalTimeInSeconds";
$tdataepisodeview[".inlineEditFields"][] = "idSeason";

$tdataepisodeview[".exportFields"] = array();
$tdataepisodeview[".exportFields"][] = "idEpisode";
$tdataepisodeview[".exportFields"][] = "idFile";
$tdataepisodeview[".exportFields"][] = "c00";
$tdataepisodeview[".exportFields"][] = "c01";
$tdataepisodeview[".exportFields"][] = "c02";
$tdataepisodeview[".exportFields"][] = "c03";
$tdataepisodeview[".exportFields"][] = "c04";
$tdataepisodeview[".exportFields"][] = "c05";
$tdataepisodeview[".exportFields"][] = "c06";
$tdataepisodeview[".exportFields"][] = "c07";
$tdataepisodeview[".exportFields"][] = "c08";
$tdataepisodeview[".exportFields"][] = "c09";
$tdataepisodeview[".exportFields"][] = "c10";
$tdataepisodeview[".exportFields"][] = "c11";
$tdataepisodeview[".exportFields"][] = "c12";
$tdataepisodeview[".exportFields"][] = "c13";
$tdataepisodeview[".exportFields"][] = "c14";
$tdataepisodeview[".exportFields"][] = "c15";
$tdataepisodeview[".exportFields"][] = "c16";
$tdataepisodeview[".exportFields"][] = "c17";
$tdataepisodeview[".exportFields"][] = "c18";
$tdataepisodeview[".exportFields"][] = "c19";
$tdataepisodeview[".exportFields"][] = "c20";
$tdataepisodeview[".exportFields"][] = "c21";
$tdataepisodeview[".exportFields"][] = "c22";
$tdataepisodeview[".exportFields"][] = "c23";
$tdataepisodeview[".exportFields"][] = "idShow";
$tdataepisodeview[".exportFields"][] = "strFileName";
$tdataepisodeview[".exportFields"][] = "strPath";
$tdataepisodeview[".exportFields"][] = "playCount";
$tdataepisodeview[".exportFields"][] = "lastPlayed";
$tdataepisodeview[".exportFields"][] = "dateAdded";
$tdataepisodeview[".exportFields"][] = "strTitle";
$tdataepisodeview[".exportFields"][] = "strStudio";
$tdataepisodeview[".exportFields"][] = "premiered";
$tdataepisodeview[".exportFields"][] = "mpaa";
$tdataepisodeview[".exportFields"][] = "resumeTimeInSeconds";
$tdataepisodeview[".exportFields"][] = "totalTimeInSeconds";
$tdataepisodeview[".exportFields"][] = "idSeason";

$tdataepisodeview[".printFields"] = array();
$tdataepisodeview[".printFields"][] = "idEpisode";
$tdataepisodeview[".printFields"][] = "idFile";
$tdataepisodeview[".printFields"][] = "c00";
$tdataepisodeview[".printFields"][] = "c01";
$tdataepisodeview[".printFields"][] = "c02";
$tdataepisodeview[".printFields"][] = "c03";
$tdataepisodeview[".printFields"][] = "c04";
$tdataepisodeview[".printFields"][] = "c05";
$tdataepisodeview[".printFields"][] = "c06";
$tdataepisodeview[".printFields"][] = "c07";
$tdataepisodeview[".printFields"][] = "c08";
$tdataepisodeview[".printFields"][] = "c09";
$tdataepisodeview[".printFields"][] = "c10";
$tdataepisodeview[".printFields"][] = "c11";
$tdataepisodeview[".printFields"][] = "c12";
$tdataepisodeview[".printFields"][] = "c13";
$tdataepisodeview[".printFields"][] = "c14";
$tdataepisodeview[".printFields"][] = "c15";
$tdataepisodeview[".printFields"][] = "c16";
$tdataepisodeview[".printFields"][] = "c17";
$tdataepisodeview[".printFields"][] = "c18";
$tdataepisodeview[".printFields"][] = "c19";
$tdataepisodeview[".printFields"][] = "c20";
$tdataepisodeview[".printFields"][] = "c21";
$tdataepisodeview[".printFields"][] = "c22";
$tdataepisodeview[".printFields"][] = "c23";
$tdataepisodeview[".printFields"][] = "idShow";
$tdataepisodeview[".printFields"][] = "strFileName";
$tdataepisodeview[".printFields"][] = "strPath";
$tdataepisodeview[".printFields"][] = "playCount";
$tdataepisodeview[".printFields"][] = "lastPlayed";
$tdataepisodeview[".printFields"][] = "dateAdded";
$tdataepisodeview[".printFields"][] = "strTitle";
$tdataepisodeview[".printFields"][] = "strStudio";
$tdataepisodeview[".printFields"][] = "premiered";
$tdataepisodeview[".printFields"][] = "mpaa";
$tdataepisodeview[".printFields"][] = "resumeTimeInSeconds";
$tdataepisodeview[".printFields"][] = "totalTimeInSeconds";
$tdataepisodeview[".printFields"][] = "idSeason";

//	idEpisode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idEpisode";
	$fdata["GoodName"] = "idEpisode";
	$fdata["ownerTable"] = "episodeview";
	$fdata["Label"] = "Id Episode"; 
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
	
		$fdata["strField"] = "idEpisode"; 
		$fdata["FullName"] = "idEpisode";
	
		
		
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
	
		
		
	$tdataepisodeview["idEpisode"] = $fdata;
//	idFile
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "idFile";
	$fdata["GoodName"] = "idFile";
	$fdata["ownerTable"] = "episodeview";
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
	
		
		
	$tdataepisodeview["idFile"] = $fdata;
//	c00
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "c00";
	$fdata["GoodName"] = "c00";
	$fdata["ownerTable"] = "episodeview";
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
	
		
		
	$tdataepisodeview["c00"] = $fdata;
//	c01
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "c01";
	$fdata["GoodName"] = "c01";
	$fdata["ownerTable"] = "episodeview";
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
	
		
		
	$tdataepisodeview["c01"] = $fdata;
//	c02
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "c02";
	$fdata["GoodName"] = "c02";
	$fdata["ownerTable"] = "episodeview";
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
	
		
		
	$tdataepisodeview["c02"] = $fdata;
//	c03
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "c03";
	$fdata["GoodName"] = "c03";
	$fdata["ownerTable"] = "episodeview";
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
	
		
		
	$tdataepisodeview["c03"] = $fdata;
//	c04
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "c04";
	$fdata["GoodName"] = "c04";
	$fdata["ownerTable"] = "episodeview";
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
	
		
		
	$tdataepisodeview["c04"] = $fdata;
//	c05
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "c05";
	$fdata["GoodName"] = "c05";
	$fdata["ownerTable"] = "episodeview";
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
	
		
		
	$tdataepisodeview["c05"] = $fdata;
//	c06
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "c06";
	$fdata["GoodName"] = "c06";
	$fdata["ownerTable"] = "episodeview";
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
	
		
		
	$tdataepisodeview["c06"] = $fdata;
//	c07
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "c07";
	$fdata["GoodName"] = "c07";
	$fdata["ownerTable"] = "episodeview";
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
	
		
		
	$tdataepisodeview["c07"] = $fdata;
//	c08
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "c08";
	$fdata["GoodName"] = "c08";
	$fdata["ownerTable"] = "episodeview";
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
	
		
		
	$tdataepisodeview["c08"] = $fdata;
//	c09
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "c09";
	$fdata["GoodName"] = "c09";
	$fdata["ownerTable"] = "episodeview";
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
	
		
		
	$tdataepisodeview["c09"] = $fdata;
//	c10
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "c10";
	$fdata["GoodName"] = "c10";
	$fdata["ownerTable"] = "episodeview";
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
	
		
		
	$tdataepisodeview["c10"] = $fdata;
//	c11
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "c11";
	$fdata["GoodName"] = "c11";
	$fdata["ownerTable"] = "episodeview";
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
	
		
		
	$tdataepisodeview["c11"] = $fdata;
//	c12
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "c12";
	$fdata["GoodName"] = "c12";
	$fdata["ownerTable"] = "episodeview";
	$fdata["Label"] = "C12"; 
	$fdata["FieldType"] = 200;
	
		
		
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
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=24";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataepisodeview["c12"] = $fdata;
//	c13
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "c13";
	$fdata["GoodName"] = "c13";
	$fdata["ownerTable"] = "episodeview";
	$fdata["Label"] = "C13"; 
	$fdata["FieldType"] = 200;
	
		
		
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
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=24";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataepisodeview["c13"] = $fdata;
//	c14
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "c14";
	$fdata["GoodName"] = "c14";
	$fdata["ownerTable"] = "episodeview";
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
	
		
		
	$tdataepisodeview["c14"] = $fdata;
//	c15
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "c15";
	$fdata["GoodName"] = "c15";
	$fdata["ownerTable"] = "episodeview";
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
	
		
		
	$tdataepisodeview["c15"] = $fdata;
//	c16
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "c16";
	$fdata["GoodName"] = "c16";
	$fdata["ownerTable"] = "episodeview";
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
	
		
		
	$tdataepisodeview["c16"] = $fdata;
//	c17
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "c17";
	$fdata["GoodName"] = "c17";
	$fdata["ownerTable"] = "episodeview";
	$fdata["Label"] = "C17"; 
	$fdata["FieldType"] = 200;
	
		
		
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
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=24";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataepisodeview["c17"] = $fdata;
//	c18
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "c18";
	$fdata["GoodName"] = "c18";
	$fdata["ownerTable"] = "episodeview";
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
	
		
		
	$tdataepisodeview["c18"] = $fdata;
//	c19
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "c19";
	$fdata["GoodName"] = "c19";
	$fdata["ownerTable"] = "episodeview";
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
	
		
		
	$tdataepisodeview["c19"] = $fdata;
//	c20
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "c20";
	$fdata["GoodName"] = "c20";
	$fdata["ownerTable"] = "episodeview";
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
	
		
		
	$tdataepisodeview["c20"] = $fdata;
//	c21
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "c21";
	$fdata["GoodName"] = "c21";
	$fdata["ownerTable"] = "episodeview";
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
	
		
		
	$tdataepisodeview["c21"] = $fdata;
//	c22
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "c22";
	$fdata["GoodName"] = "c22";
	$fdata["ownerTable"] = "episodeview";
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
	
		
		
	$tdataepisodeview["c22"] = $fdata;
//	c23
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "c23";
	$fdata["GoodName"] = "c23";
	$fdata["ownerTable"] = "episodeview";
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
	
		
		
	$tdataepisodeview["c23"] = $fdata;
//	idShow
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "idShow";
	$fdata["GoodName"] = "idShow";
	$fdata["ownerTable"] = "episodeview";
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
	
		
		
	$tdataepisodeview["idShow"] = $fdata;
//	strFileName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "strFileName";
	$fdata["GoodName"] = "strFileName";
	$fdata["ownerTable"] = "episodeview";
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
	
		
		
	$tdataepisodeview["strFileName"] = $fdata;
//	strPath
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "strPath";
	$fdata["GoodName"] = "strPath";
	$fdata["ownerTable"] = "episodeview";
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
	
		
		
	$tdataepisodeview["strPath"] = $fdata;
//	playCount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "playCount";
	$fdata["GoodName"] = "playCount";
	$fdata["ownerTable"] = "episodeview";
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
	
		
		
	$tdataepisodeview["playCount"] = $fdata;
//	lastPlayed
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "lastPlayed";
	$fdata["GoodName"] = "lastPlayed";
	$fdata["ownerTable"] = "episodeview";
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
	
		
		
	$tdataepisodeview["lastPlayed"] = $fdata;
//	dateAdded
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "dateAdded";
	$fdata["GoodName"] = "dateAdded";
	$fdata["ownerTable"] = "episodeview";
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
	
		
		
	$tdataepisodeview["dateAdded"] = $fdata;
//	strTitle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "strTitle";
	$fdata["GoodName"] = "strTitle";
	$fdata["ownerTable"] = "episodeview";
	$fdata["Label"] = "Str Title"; 
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
	
		$fdata["strField"] = "strTitle"; 
		$fdata["FullName"] = "strTitle";
	
		
		
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
	
		
		
	$tdataepisodeview["strTitle"] = $fdata;
//	strStudio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "strStudio";
	$fdata["GoodName"] = "strStudio";
	$fdata["ownerTable"] = "episodeview";
	$fdata["Label"] = "Str Studio"; 
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
	
		$fdata["strField"] = "strStudio"; 
		$fdata["FullName"] = "strStudio";
	
		
		
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
	
		
		
	$tdataepisodeview["strStudio"] = $fdata;
//	premiered
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "premiered";
	$fdata["GoodName"] = "premiered";
	$fdata["ownerTable"] = "episodeview";
	$fdata["Label"] = "Premiered"; 
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
	
		$fdata["strField"] = "premiered"; 
		$fdata["FullName"] = "premiered";
	
		
		
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
	
		
		
	$tdataepisodeview["premiered"] = $fdata;
//	mpaa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "mpaa";
	$fdata["GoodName"] = "mpaa";
	$fdata["ownerTable"] = "episodeview";
	$fdata["Label"] = "Mpaa"; 
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
	
		$fdata["strField"] = "mpaa"; 
		$fdata["FullName"] = "mpaa";
	
		
		
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
	
		
		
	$tdataepisodeview["mpaa"] = $fdata;
//	resumeTimeInSeconds
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "resumeTimeInSeconds";
	$fdata["GoodName"] = "resumeTimeInSeconds";
	$fdata["ownerTable"] = "episodeview";
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
	
		
		
	$tdataepisodeview["resumeTimeInSeconds"] = $fdata;
//	totalTimeInSeconds
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "totalTimeInSeconds";
	$fdata["GoodName"] = "totalTimeInSeconds";
	$fdata["ownerTable"] = "episodeview";
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
	
		
		
	$tdataepisodeview["totalTimeInSeconds"] = $fdata;
//	idSeason
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "idSeason";
	$fdata["GoodName"] = "idSeason";
	$fdata["ownerTable"] = "episodeview";
	$fdata["Label"] = "Id Season"; 
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
	
		$fdata["strField"] = "idSeason"; 
		$fdata["FullName"] = "idSeason";
	
		
		
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
	
		
		
	$tdataepisodeview["idSeason"] = $fdata;

	
$tables_data["episodeview"]=&$tdataepisodeview;
$field_labels["episodeview"] = &$fieldLabelsepisodeview;
$fieldToolTips["episodeview"] = &$fieldToolTipsepisodeview;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["episodeview"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["episodeview"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_episodeview()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "idEpisode,   idFile,   c00,   c01,   c02,   c03,   c04,   c05,   c06,   c07,   c08,   c09,   c10,   c11,   c12,   c13,   c14,   c15,   c16,   c17,   c18,   c19,   c20,   c21,   c22,   c23,   idShow,   strFileName,   strPath,   playCount,   lastPlayed,   dateAdded,   strTitle,   strStudio,   premiered,   mpaa,   resumeTimeInSeconds,   totalTimeInSeconds,   idSeason";
$proto0["m_strFrom"] = "FROM episodeview";
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
	"m_strName" => "idEpisode",
	"m_strTable" => "episodeview"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "idFile",
	"m_strTable" => "episodeview"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "c00",
	"m_strTable" => "episodeview"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "c01",
	"m_strTable" => "episodeview"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "c02",
	"m_strTable" => "episodeview"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "c03",
	"m_strTable" => "episodeview"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "c04",
	"m_strTable" => "episodeview"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "c05",
	"m_strTable" => "episodeview"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "c06",
	"m_strTable" => "episodeview"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "c07",
	"m_strTable" => "episodeview"
));

$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "c08",
	"m_strTable" => "episodeview"
));

$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "c09",
	"m_strTable" => "episodeview"
));

$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "c10",
	"m_strTable" => "episodeview"
));

$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "c11",
	"m_strTable" => "episodeview"
));

$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "c12",
	"m_strTable" => "episodeview"
));

$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "c13",
	"m_strTable" => "episodeview"
));

$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "c14",
	"m_strTable" => "episodeview"
));

$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "c15",
	"m_strTable" => "episodeview"
));

$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLField(array(
	"m_strName" => "c16",
	"m_strTable" => "episodeview"
));

$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "";
$obj = new SQLFieldListItem($proto41);

$proto0["m_fieldlist"][]=$obj;
						$proto43=array();
			$obj = new SQLField(array(
	"m_strName" => "c17",
	"m_strTable" => "episodeview"
));

$proto43["m_expr"]=$obj;
$proto43["m_alias"] = "";
$obj = new SQLFieldListItem($proto43);

$proto0["m_fieldlist"][]=$obj;
						$proto45=array();
			$obj = new SQLField(array(
	"m_strName" => "c18",
	"m_strTable" => "episodeview"
));

$proto45["m_expr"]=$obj;
$proto45["m_alias"] = "";
$obj = new SQLFieldListItem($proto45);

$proto0["m_fieldlist"][]=$obj;
						$proto47=array();
			$obj = new SQLField(array(
	"m_strName" => "c19",
	"m_strTable" => "episodeview"
));

$proto47["m_expr"]=$obj;
$proto47["m_alias"] = "";
$obj = new SQLFieldListItem($proto47);

$proto0["m_fieldlist"][]=$obj;
						$proto49=array();
			$obj = new SQLField(array(
	"m_strName" => "c20",
	"m_strTable" => "episodeview"
));

$proto49["m_expr"]=$obj;
$proto49["m_alias"] = "";
$obj = new SQLFieldListItem($proto49);

$proto0["m_fieldlist"][]=$obj;
						$proto51=array();
			$obj = new SQLField(array(
	"m_strName" => "c21",
	"m_strTable" => "episodeview"
));

$proto51["m_expr"]=$obj;
$proto51["m_alias"] = "";
$obj = new SQLFieldListItem($proto51);

$proto0["m_fieldlist"][]=$obj;
						$proto53=array();
			$obj = new SQLField(array(
	"m_strName" => "c22",
	"m_strTable" => "episodeview"
));

$proto53["m_expr"]=$obj;
$proto53["m_alias"] = "";
$obj = new SQLFieldListItem($proto53);

$proto0["m_fieldlist"][]=$obj;
						$proto55=array();
			$obj = new SQLField(array(
	"m_strName" => "c23",
	"m_strTable" => "episodeview"
));

$proto55["m_expr"]=$obj;
$proto55["m_alias"] = "";
$obj = new SQLFieldListItem($proto55);

$proto0["m_fieldlist"][]=$obj;
						$proto57=array();
			$obj = new SQLField(array(
	"m_strName" => "idShow",
	"m_strTable" => "episodeview"
));

$proto57["m_expr"]=$obj;
$proto57["m_alias"] = "";
$obj = new SQLFieldListItem($proto57);

$proto0["m_fieldlist"][]=$obj;
						$proto59=array();
			$obj = new SQLField(array(
	"m_strName" => "strFileName",
	"m_strTable" => "episodeview"
));

$proto59["m_expr"]=$obj;
$proto59["m_alias"] = "";
$obj = new SQLFieldListItem($proto59);

$proto0["m_fieldlist"][]=$obj;
						$proto61=array();
			$obj = new SQLField(array(
	"m_strName" => "strPath",
	"m_strTable" => "episodeview"
));

$proto61["m_expr"]=$obj;
$proto61["m_alias"] = "";
$obj = new SQLFieldListItem($proto61);

$proto0["m_fieldlist"][]=$obj;
						$proto63=array();
			$obj = new SQLField(array(
	"m_strName" => "playCount",
	"m_strTable" => "episodeview"
));

$proto63["m_expr"]=$obj;
$proto63["m_alias"] = "";
$obj = new SQLFieldListItem($proto63);

$proto0["m_fieldlist"][]=$obj;
						$proto65=array();
			$obj = new SQLField(array(
	"m_strName" => "lastPlayed",
	"m_strTable" => "episodeview"
));

$proto65["m_expr"]=$obj;
$proto65["m_alias"] = "";
$obj = new SQLFieldListItem($proto65);

$proto0["m_fieldlist"][]=$obj;
						$proto67=array();
			$obj = new SQLField(array(
	"m_strName" => "dateAdded",
	"m_strTable" => "episodeview"
));

$proto67["m_expr"]=$obj;
$proto67["m_alias"] = "";
$obj = new SQLFieldListItem($proto67);

$proto0["m_fieldlist"][]=$obj;
						$proto69=array();
			$obj = new SQLField(array(
	"m_strName" => "strTitle",
	"m_strTable" => "episodeview"
));

$proto69["m_expr"]=$obj;
$proto69["m_alias"] = "";
$obj = new SQLFieldListItem($proto69);

$proto0["m_fieldlist"][]=$obj;
						$proto71=array();
			$obj = new SQLField(array(
	"m_strName" => "strStudio",
	"m_strTable" => "episodeview"
));

$proto71["m_expr"]=$obj;
$proto71["m_alias"] = "";
$obj = new SQLFieldListItem($proto71);

$proto0["m_fieldlist"][]=$obj;
						$proto73=array();
			$obj = new SQLField(array(
	"m_strName" => "premiered",
	"m_strTable" => "episodeview"
));

$proto73["m_expr"]=$obj;
$proto73["m_alias"] = "";
$obj = new SQLFieldListItem($proto73);

$proto0["m_fieldlist"][]=$obj;
						$proto75=array();
			$obj = new SQLField(array(
	"m_strName" => "mpaa",
	"m_strTable" => "episodeview"
));

$proto75["m_expr"]=$obj;
$proto75["m_alias"] = "";
$obj = new SQLFieldListItem($proto75);

$proto0["m_fieldlist"][]=$obj;
						$proto77=array();
			$obj = new SQLField(array(
	"m_strName" => "resumeTimeInSeconds",
	"m_strTable" => "episodeview"
));

$proto77["m_expr"]=$obj;
$proto77["m_alias"] = "";
$obj = new SQLFieldListItem($proto77);

$proto0["m_fieldlist"][]=$obj;
						$proto79=array();
			$obj = new SQLField(array(
	"m_strName" => "totalTimeInSeconds",
	"m_strTable" => "episodeview"
));

$proto79["m_expr"]=$obj;
$proto79["m_alias"] = "";
$obj = new SQLFieldListItem($proto79);

$proto0["m_fieldlist"][]=$obj;
						$proto81=array();
			$obj = new SQLField(array(
	"m_strName" => "idSeason",
	"m_strTable" => "episodeview"
));

$proto81["m_expr"]=$obj;
$proto81["m_alias"] = "";
$obj = new SQLFieldListItem($proto81);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto83=array();
$proto83["m_link"] = "SQLL_MAIN";
			$proto84=array();
$proto84["m_strName"] = "episodeview";
$proto84["m_columns"] = array();
$proto84["m_columns"][] = "idEpisode";
$proto84["m_columns"][] = "idFile";
$proto84["m_columns"][] = "c00";
$proto84["m_columns"][] = "c01";
$proto84["m_columns"][] = "c02";
$proto84["m_columns"][] = "c03";
$proto84["m_columns"][] = "c04";
$proto84["m_columns"][] = "c05";
$proto84["m_columns"][] = "c06";
$proto84["m_columns"][] = "c07";
$proto84["m_columns"][] = "c08";
$proto84["m_columns"][] = "c09";
$proto84["m_columns"][] = "c10";
$proto84["m_columns"][] = "c11";
$proto84["m_columns"][] = "c12";
$proto84["m_columns"][] = "c13";
$proto84["m_columns"][] = "c14";
$proto84["m_columns"][] = "c15";
$proto84["m_columns"][] = "c16";
$proto84["m_columns"][] = "c17";
$proto84["m_columns"][] = "c18";
$proto84["m_columns"][] = "c19";
$proto84["m_columns"][] = "c20";
$proto84["m_columns"][] = "c21";
$proto84["m_columns"][] = "c22";
$proto84["m_columns"][] = "c23";
$proto84["m_columns"][] = "idShow";
$proto84["m_columns"][] = "strFileName";
$proto84["m_columns"][] = "strPath";
$proto84["m_columns"][] = "playCount";
$proto84["m_columns"][] = "lastPlayed";
$proto84["m_columns"][] = "dateAdded";
$proto84["m_columns"][] = "strTitle";
$proto84["m_columns"][] = "strStudio";
$proto84["m_columns"][] = "premiered";
$proto84["m_columns"][] = "mpaa";
$proto84["m_columns"][] = "resumeTimeInSeconds";
$proto84["m_columns"][] = "totalTimeInSeconds";
$proto84["m_columns"][] = "idSeason";
$obj = new SQLTable($proto84);

$proto83["m_table"] = $obj;
$proto83["m_alias"] = "";
$proto85=array();
$proto85["m_sql"] = "";
$proto85["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto85["m_column"]=$obj;
$proto85["m_contained"] = array();
$proto85["m_strCase"] = "";
$proto85["m_havingmode"] = "0";
$proto85["m_inBrackets"] = "0";
$proto85["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto85);

$proto83["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto83);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_episodeview = createSqlQuery_episodeview();
																																							$tdataepisodeview[".sqlquery"] = $queryData_episodeview;

$tableEvents["episodeview"] = new eventsBase;
$tdataepisodeview[".hasEvents"] = false;

$cipherer = new RunnerCipherer("episodeview");

?>