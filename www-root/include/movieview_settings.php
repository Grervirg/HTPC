<?php
require_once(getabspath("classes/cipherer.php"));
$tdatamovieview = array();
	$tdatamovieview[".NumberOfChars"] = 80; 
	$tdatamovieview[".ShortName"] = "movieview";
	$tdatamovieview[".OwnerID"] = "";
	$tdatamovieview[".OriginalTable"] = "movieview";

//	field labels
$fieldLabelsmovieview = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmovieview["English"] = array();
	$fieldToolTipsmovieview["English"] = array();
	$fieldLabelsmovieview["English"]["idMovie"] = "Id Movie";
	$fieldToolTipsmovieview["English"]["idMovie"] = "";
	$fieldLabelsmovieview["English"]["idFile"] = "Id File";
	$fieldToolTipsmovieview["English"]["idFile"] = "";
	$fieldLabelsmovieview["English"]["c00"] = "C00";
	$fieldToolTipsmovieview["English"]["c00"] = "";
	$fieldLabelsmovieview["English"]["c01"] = "C01";
	$fieldToolTipsmovieview["English"]["c01"] = "";
	$fieldLabelsmovieview["English"]["c02"] = "C02";
	$fieldToolTipsmovieview["English"]["c02"] = "";
	$fieldLabelsmovieview["English"]["c03"] = "C03";
	$fieldToolTipsmovieview["English"]["c03"] = "";
	$fieldLabelsmovieview["English"]["c04"] = "C04";
	$fieldToolTipsmovieview["English"]["c04"] = "";
	$fieldLabelsmovieview["English"]["c05"] = "C05";
	$fieldToolTipsmovieview["English"]["c05"] = "";
	$fieldLabelsmovieview["English"]["c06"] = "C06";
	$fieldToolTipsmovieview["English"]["c06"] = "";
	$fieldLabelsmovieview["English"]["c07"] = "C07";
	$fieldToolTipsmovieview["English"]["c07"] = "";
	$fieldLabelsmovieview["English"]["c08"] = "C08";
	$fieldToolTipsmovieview["English"]["c08"] = "";
	$fieldLabelsmovieview["English"]["c09"] = "C09";
	$fieldToolTipsmovieview["English"]["c09"] = "";
	$fieldLabelsmovieview["English"]["c10"] = "C10";
	$fieldToolTipsmovieview["English"]["c10"] = "";
	$fieldLabelsmovieview["English"]["c11"] = "C11";
	$fieldToolTipsmovieview["English"]["c11"] = "";
	$fieldLabelsmovieview["English"]["c12"] = "C12";
	$fieldToolTipsmovieview["English"]["c12"] = "";
	$fieldLabelsmovieview["English"]["c13"] = "C13";
	$fieldToolTipsmovieview["English"]["c13"] = "";
	$fieldLabelsmovieview["English"]["c14"] = "C14";
	$fieldToolTipsmovieview["English"]["c14"] = "";
	$fieldLabelsmovieview["English"]["c15"] = "C15";
	$fieldToolTipsmovieview["English"]["c15"] = "";
	$fieldLabelsmovieview["English"]["c16"] = "C16";
	$fieldToolTipsmovieview["English"]["c16"] = "";
	$fieldLabelsmovieview["English"]["c17"] = "C17";
	$fieldToolTipsmovieview["English"]["c17"] = "";
	$fieldLabelsmovieview["English"]["c18"] = "C18";
	$fieldToolTipsmovieview["English"]["c18"] = "";
	$fieldLabelsmovieview["English"]["c19"] = "C19";
	$fieldToolTipsmovieview["English"]["c19"] = "";
	$fieldLabelsmovieview["English"]["c20"] = "C20";
	$fieldToolTipsmovieview["English"]["c20"] = "";
	$fieldLabelsmovieview["English"]["c21"] = "C21";
	$fieldToolTipsmovieview["English"]["c21"] = "";
	$fieldLabelsmovieview["English"]["c22"] = "C22";
	$fieldToolTipsmovieview["English"]["c22"] = "";
	$fieldLabelsmovieview["English"]["c23"] = "C23";
	$fieldToolTipsmovieview["English"]["c23"] = "";
	$fieldLabelsmovieview["English"]["idSet"] = "Id Set";
	$fieldToolTipsmovieview["English"]["idSet"] = "";
	$fieldLabelsmovieview["English"]["strSet"] = "Str Set";
	$fieldToolTipsmovieview["English"]["strSet"] = "";
	$fieldLabelsmovieview["English"]["strFileName"] = "Str File Name";
	$fieldToolTipsmovieview["English"]["strFileName"] = "";
	$fieldLabelsmovieview["English"]["strPath"] = "Str Path";
	$fieldToolTipsmovieview["English"]["strPath"] = "";
	$fieldLabelsmovieview["English"]["playCount"] = "Play Count";
	$fieldToolTipsmovieview["English"]["playCount"] = "";
	$fieldLabelsmovieview["English"]["lastPlayed"] = "Last Played";
	$fieldToolTipsmovieview["English"]["lastPlayed"] = "";
	$fieldLabelsmovieview["English"]["dateAdded"] = "Date Added";
	$fieldToolTipsmovieview["English"]["dateAdded"] = "";
	$fieldLabelsmovieview["English"]["resumeTimeInSeconds"] = "Resume Time In Seconds";
	$fieldToolTipsmovieview["English"]["resumeTimeInSeconds"] = "";
	$fieldLabelsmovieview["English"]["totalTimeInSeconds"] = "Total Time In Seconds";
	$fieldToolTipsmovieview["English"]["totalTimeInSeconds"] = "";
	if (count($fieldToolTipsmovieview["English"]))
		$tdatamovieview[".isUseToolTips"] = true;
}
	
	
	$tdatamovieview[".NCSearch"] = true;



$tdatamovieview[".shortTableName"] = "movieview";
$tdatamovieview[".nSecOptions"] = 0;
$tdatamovieview[".recsPerRowList"] = 1;
$tdatamovieview[".mainTableOwnerID"] = "";
$tdatamovieview[".moveNext"] = 1;
$tdatamovieview[".nType"] = 0;

$tdatamovieview[".strOriginalTableName"] = "movieview";




$tdatamovieview[".showAddInPopup"] = false;

$tdatamovieview[".showEditInPopup"] = false;

$tdatamovieview[".showViewInPopup"] = false;

$tdatamovieview[".fieldsForRegister"] = array();

$tdatamovieview[".listAjax"] = false;

	$tdatamovieview[".audit"] = false;

	$tdatamovieview[".locking"] = false;

$tdatamovieview[".listIcons"] = true;

$tdatamovieview[".exportTo"] = true;

$tdatamovieview[".printFriendly"] = true;


$tdatamovieview[".showSimpleSearchOptions"] = false;

$tdatamovieview[".showSearchPanel"] = true;

if (isMobile())
	$tdatamovieview[".isUseAjaxSuggest"] = false;
else 
	$tdatamovieview[".isUseAjaxSuggest"] = true;

$tdatamovieview[".rowHighlite"] = true;

// button handlers file names

$tdatamovieview[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamovieview[".isUseTimeForSearch"] = false;




$tdatamovieview[".allSearchFields"] = array();

$tdatamovieview[".allSearchFields"][] = "idMovie";
$tdatamovieview[".allSearchFields"][] = "idFile";
$tdatamovieview[".allSearchFields"][] = "c00";
$tdatamovieview[".allSearchFields"][] = "c01";
$tdatamovieview[".allSearchFields"][] = "c02";
$tdatamovieview[".allSearchFields"][] = "c03";
$tdatamovieview[".allSearchFields"][] = "c04";
$tdatamovieview[".allSearchFields"][] = "c05";
$tdatamovieview[".allSearchFields"][] = "c06";
$tdatamovieview[".allSearchFields"][] = "c07";
$tdatamovieview[".allSearchFields"][] = "c08";
$tdatamovieview[".allSearchFields"][] = "c09";
$tdatamovieview[".allSearchFields"][] = "c10";
$tdatamovieview[".allSearchFields"][] = "c11";
$tdatamovieview[".allSearchFields"][] = "c12";
$tdatamovieview[".allSearchFields"][] = "c13";
$tdatamovieview[".allSearchFields"][] = "c14";
$tdatamovieview[".allSearchFields"][] = "c15";
$tdatamovieview[".allSearchFields"][] = "c16";
$tdatamovieview[".allSearchFields"][] = "c17";
$tdatamovieview[".allSearchFields"][] = "c18";
$tdatamovieview[".allSearchFields"][] = "c19";
$tdatamovieview[".allSearchFields"][] = "c20";
$tdatamovieview[".allSearchFields"][] = "c21";
$tdatamovieview[".allSearchFields"][] = "c22";
$tdatamovieview[".allSearchFields"][] = "c23";
$tdatamovieview[".allSearchFields"][] = "idSet";
$tdatamovieview[".allSearchFields"][] = "strSet";
$tdatamovieview[".allSearchFields"][] = "strFileName";
$tdatamovieview[".allSearchFields"][] = "strPath";
$tdatamovieview[".allSearchFields"][] = "playCount";
$tdatamovieview[".allSearchFields"][] = "lastPlayed";
$tdatamovieview[".allSearchFields"][] = "dateAdded";
$tdatamovieview[".allSearchFields"][] = "resumeTimeInSeconds";
$tdatamovieview[".allSearchFields"][] = "totalTimeInSeconds";

$tdatamovieview[".googleLikeFields"][] = "idMovie";
$tdatamovieview[".googleLikeFields"][] = "idFile";
$tdatamovieview[".googleLikeFields"][] = "c00";
$tdatamovieview[".googleLikeFields"][] = "c01";
$tdatamovieview[".googleLikeFields"][] = "c02";
$tdatamovieview[".googleLikeFields"][] = "c03";
$tdatamovieview[".googleLikeFields"][] = "c04";
$tdatamovieview[".googleLikeFields"][] = "c05";
$tdatamovieview[".googleLikeFields"][] = "c06";
$tdatamovieview[".googleLikeFields"][] = "c07";
$tdatamovieview[".googleLikeFields"][] = "c08";
$tdatamovieview[".googleLikeFields"][] = "c09";
$tdatamovieview[".googleLikeFields"][] = "c10";
$tdatamovieview[".googleLikeFields"][] = "c11";
$tdatamovieview[".googleLikeFields"][] = "c12";
$tdatamovieview[".googleLikeFields"][] = "c13";
$tdatamovieview[".googleLikeFields"][] = "c14";
$tdatamovieview[".googleLikeFields"][] = "c15";
$tdatamovieview[".googleLikeFields"][] = "c16";
$tdatamovieview[".googleLikeFields"][] = "c17";
$tdatamovieview[".googleLikeFields"][] = "c18";
$tdatamovieview[".googleLikeFields"][] = "c19";
$tdatamovieview[".googleLikeFields"][] = "c20";
$tdatamovieview[".googleLikeFields"][] = "c21";
$tdatamovieview[".googleLikeFields"][] = "c22";
$tdatamovieview[".googleLikeFields"][] = "c23";
$tdatamovieview[".googleLikeFields"][] = "idSet";
$tdatamovieview[".googleLikeFields"][] = "strSet";
$tdatamovieview[".googleLikeFields"][] = "strFileName";
$tdatamovieview[".googleLikeFields"][] = "strPath";
$tdatamovieview[".googleLikeFields"][] = "playCount";
$tdatamovieview[".googleLikeFields"][] = "lastPlayed";
$tdatamovieview[".googleLikeFields"][] = "dateAdded";
$tdatamovieview[".googleLikeFields"][] = "resumeTimeInSeconds";
$tdatamovieview[".googleLikeFields"][] = "totalTimeInSeconds";


$tdatamovieview[".advSearchFields"][] = "idMovie";
$tdatamovieview[".advSearchFields"][] = "idFile";
$tdatamovieview[".advSearchFields"][] = "c00";
$tdatamovieview[".advSearchFields"][] = "c01";
$tdatamovieview[".advSearchFields"][] = "c02";
$tdatamovieview[".advSearchFields"][] = "c03";
$tdatamovieview[".advSearchFields"][] = "c04";
$tdatamovieview[".advSearchFields"][] = "c05";
$tdatamovieview[".advSearchFields"][] = "c06";
$tdatamovieview[".advSearchFields"][] = "c07";
$tdatamovieview[".advSearchFields"][] = "c08";
$tdatamovieview[".advSearchFields"][] = "c09";
$tdatamovieview[".advSearchFields"][] = "c10";
$tdatamovieview[".advSearchFields"][] = "c11";
$tdatamovieview[".advSearchFields"][] = "c12";
$tdatamovieview[".advSearchFields"][] = "c13";
$tdatamovieview[".advSearchFields"][] = "c14";
$tdatamovieview[".advSearchFields"][] = "c15";
$tdatamovieview[".advSearchFields"][] = "c16";
$tdatamovieview[".advSearchFields"][] = "c17";
$tdatamovieview[".advSearchFields"][] = "c18";
$tdatamovieview[".advSearchFields"][] = "c19";
$tdatamovieview[".advSearchFields"][] = "c20";
$tdatamovieview[".advSearchFields"][] = "c21";
$tdatamovieview[".advSearchFields"][] = "c22";
$tdatamovieview[".advSearchFields"][] = "c23";
$tdatamovieview[".advSearchFields"][] = "idSet";
$tdatamovieview[".advSearchFields"][] = "strSet";
$tdatamovieview[".advSearchFields"][] = "strFileName";
$tdatamovieview[".advSearchFields"][] = "strPath";
$tdatamovieview[".advSearchFields"][] = "playCount";
$tdatamovieview[".advSearchFields"][] = "lastPlayed";
$tdatamovieview[".advSearchFields"][] = "dateAdded";
$tdatamovieview[".advSearchFields"][] = "resumeTimeInSeconds";
$tdatamovieview[".advSearchFields"][] = "totalTimeInSeconds";

$tdatamovieview[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatamovieview[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamovieview[".strOrderBy"] = $tstrOrderBy;

$tdatamovieview[".orderindexes"] = array();

$tdatamovieview[".sqlHead"] = "SELECT idMovie,  idFile,  c00,  c01,  c02,  c03,  c04,  c05,  c06,  c07,  c08,  c09,  c10,  c11,  c12,  c13,  c14,  c15,  c16,  c17,  c18,  c19,  c20,  c21,  c22,  c23,  idSet,  strSet,  strFileName,  strPath,  playCount,  lastPlayed,  dateAdded,  resumeTimeInSeconds,  totalTimeInSeconds";
$tdatamovieview[".sqlFrom"] = "FROM movieview";
$tdatamovieview[".sqlWhereExpr"] = "";
$tdatamovieview[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamovieview[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamovieview[".arrGroupsPerPage"] = $arrGPP;

$tableKeysmovieview = array();
$tdatamovieview[".Keys"] = $tableKeysmovieview;

$tdatamovieview[".listFields"] = array();
$tdatamovieview[".listFields"][] = "idMovie";
$tdatamovieview[".listFields"][] = "idFile";
$tdatamovieview[".listFields"][] = "c00";
$tdatamovieview[".listFields"][] = "c01";
$tdatamovieview[".listFields"][] = "c02";
$tdatamovieview[".listFields"][] = "c03";
$tdatamovieview[".listFields"][] = "c04";
$tdatamovieview[".listFields"][] = "c05";
$tdatamovieview[".listFields"][] = "c06";
$tdatamovieview[".listFields"][] = "c07";
$tdatamovieview[".listFields"][] = "c08";
$tdatamovieview[".listFields"][] = "c09";
$tdatamovieview[".listFields"][] = "c10";
$tdatamovieview[".listFields"][] = "c11";
$tdatamovieview[".listFields"][] = "c12";
$tdatamovieview[".listFields"][] = "c13";
$tdatamovieview[".listFields"][] = "c14";
$tdatamovieview[".listFields"][] = "c15";
$tdatamovieview[".listFields"][] = "c16";
$tdatamovieview[".listFields"][] = "c17";
$tdatamovieview[".listFields"][] = "c18";
$tdatamovieview[".listFields"][] = "c19";
$tdatamovieview[".listFields"][] = "c20";
$tdatamovieview[".listFields"][] = "c21";
$tdatamovieview[".listFields"][] = "c22";
$tdatamovieview[".listFields"][] = "c23";
$tdatamovieview[".listFields"][] = "idSet";
$tdatamovieview[".listFields"][] = "strSet";
$tdatamovieview[".listFields"][] = "strFileName";
$tdatamovieview[".listFields"][] = "strPath";
$tdatamovieview[".listFields"][] = "playCount";
$tdatamovieview[".listFields"][] = "lastPlayed";
$tdatamovieview[".listFields"][] = "dateAdded";
$tdatamovieview[".listFields"][] = "resumeTimeInSeconds";
$tdatamovieview[".listFields"][] = "totalTimeInSeconds";

$tdatamovieview[".viewFields"] = array();

$tdatamovieview[".addFields"] = array();

$tdatamovieview[".inlineAddFields"] = array();

$tdatamovieview[".editFields"] = array();

$tdatamovieview[".inlineEditFields"] = array();

$tdatamovieview[".exportFields"] = array();
$tdatamovieview[".exportFields"][] = "idMovie";
$tdatamovieview[".exportFields"][] = "idFile";
$tdatamovieview[".exportFields"][] = "c00";
$tdatamovieview[".exportFields"][] = "c01";
$tdatamovieview[".exportFields"][] = "c02";
$tdatamovieview[".exportFields"][] = "c03";
$tdatamovieview[".exportFields"][] = "c04";
$tdatamovieview[".exportFields"][] = "c05";
$tdatamovieview[".exportFields"][] = "c06";
$tdatamovieview[".exportFields"][] = "c07";
$tdatamovieview[".exportFields"][] = "c08";
$tdatamovieview[".exportFields"][] = "c09";
$tdatamovieview[".exportFields"][] = "c10";
$tdatamovieview[".exportFields"][] = "c11";
$tdatamovieview[".exportFields"][] = "c12";
$tdatamovieview[".exportFields"][] = "c13";
$tdatamovieview[".exportFields"][] = "c14";
$tdatamovieview[".exportFields"][] = "c15";
$tdatamovieview[".exportFields"][] = "c16";
$tdatamovieview[".exportFields"][] = "c17";
$tdatamovieview[".exportFields"][] = "c18";
$tdatamovieview[".exportFields"][] = "c19";
$tdatamovieview[".exportFields"][] = "c20";
$tdatamovieview[".exportFields"][] = "c21";
$tdatamovieview[".exportFields"][] = "c22";
$tdatamovieview[".exportFields"][] = "c23";
$tdatamovieview[".exportFields"][] = "idSet";
$tdatamovieview[".exportFields"][] = "strSet";
$tdatamovieview[".exportFields"][] = "strFileName";
$tdatamovieview[".exportFields"][] = "strPath";
$tdatamovieview[".exportFields"][] = "playCount";
$tdatamovieview[".exportFields"][] = "lastPlayed";
$tdatamovieview[".exportFields"][] = "dateAdded";
$tdatamovieview[".exportFields"][] = "resumeTimeInSeconds";
$tdatamovieview[".exportFields"][] = "totalTimeInSeconds";

$tdatamovieview[".printFields"] = array();
$tdatamovieview[".printFields"][] = "idMovie";
$tdatamovieview[".printFields"][] = "idFile";
$tdatamovieview[".printFields"][] = "c00";
$tdatamovieview[".printFields"][] = "c01";
$tdatamovieview[".printFields"][] = "c02";
$tdatamovieview[".printFields"][] = "c03";
$tdatamovieview[".printFields"][] = "c04";
$tdatamovieview[".printFields"][] = "c05";
$tdatamovieview[".printFields"][] = "c06";
$tdatamovieview[".printFields"][] = "c07";
$tdatamovieview[".printFields"][] = "c08";
$tdatamovieview[".printFields"][] = "c09";
$tdatamovieview[".printFields"][] = "c10";
$tdatamovieview[".printFields"][] = "c11";
$tdatamovieview[".printFields"][] = "c12";
$tdatamovieview[".printFields"][] = "c13";
$tdatamovieview[".printFields"][] = "c14";
$tdatamovieview[".printFields"][] = "c15";
$tdatamovieview[".printFields"][] = "c16";
$tdatamovieview[".printFields"][] = "c17";
$tdatamovieview[".printFields"][] = "c18";
$tdatamovieview[".printFields"][] = "c19";
$tdatamovieview[".printFields"][] = "c20";
$tdatamovieview[".printFields"][] = "c21";
$tdatamovieview[".printFields"][] = "c22";
$tdatamovieview[".printFields"][] = "c23";
$tdatamovieview[".printFields"][] = "idSet";
$tdatamovieview[".printFields"][] = "strSet";
$tdatamovieview[".printFields"][] = "strFileName";
$tdatamovieview[".printFields"][] = "strPath";
$tdatamovieview[".printFields"][] = "playCount";
$tdatamovieview[".printFields"][] = "lastPlayed";
$tdatamovieview[".printFields"][] = "dateAdded";
$tdatamovieview[".printFields"][] = "resumeTimeInSeconds";
$tdatamovieview[".printFields"][] = "totalTimeInSeconds";

//	idMovie
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idMovie";
	$fdata["GoodName"] = "idMovie";
	$fdata["ownerTable"] = "movieview";
	$fdata["Label"] = "Id Movie"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "idMovie"; 
		$fdata["FullName"] = "idMovie";
	
		
		
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
	
		
		
	$tdatamovieview["idMovie"] = $fdata;
//	idFile
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "idFile";
	$fdata["GoodName"] = "idFile";
	$fdata["ownerTable"] = "movieview";
	$fdata["Label"] = "Id File"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
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
	
		
		
	$tdatamovieview["idFile"] = $fdata;
//	c00
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "c00";
	$fdata["GoodName"] = "c00";
	$fdata["ownerTable"] = "movieview";
	$fdata["Label"] = "C00"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
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
	
		
		
	$tdatamovieview["c00"] = $fdata;
//	c01
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "c01";
	$fdata["GoodName"] = "c01";
	$fdata["ownerTable"] = "movieview";
	$fdata["Label"] = "C01"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
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
	
		
		
	$tdatamovieview["c01"] = $fdata;
//	c02
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "c02";
	$fdata["GoodName"] = "c02";
	$fdata["ownerTable"] = "movieview";
	$fdata["Label"] = "C02"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
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
	
		
		
	$tdatamovieview["c02"] = $fdata;
//	c03
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "c03";
	$fdata["GoodName"] = "c03";
	$fdata["ownerTable"] = "movieview";
	$fdata["Label"] = "C03"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
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
	
		
		
	$tdatamovieview["c03"] = $fdata;
//	c04
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "c04";
	$fdata["GoodName"] = "c04";
	$fdata["ownerTable"] = "movieview";
	$fdata["Label"] = "C04"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
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
	
		
		
	$tdatamovieview["c04"] = $fdata;
//	c05
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "c05";
	$fdata["GoodName"] = "c05";
	$fdata["ownerTable"] = "movieview";
	$fdata["Label"] = "C05"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
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
	
		
		
	$tdatamovieview["c05"] = $fdata;
//	c06
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "c06";
	$fdata["GoodName"] = "c06";
	$fdata["ownerTable"] = "movieview";
	$fdata["Label"] = "C06"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
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
	
		
		
	$tdatamovieview["c06"] = $fdata;
//	c07
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "c07";
	$fdata["GoodName"] = "c07";
	$fdata["ownerTable"] = "movieview";
	$fdata["Label"] = "C07"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
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
	
		
		
	$tdatamovieview["c07"] = $fdata;
//	c08
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "c08";
	$fdata["GoodName"] = "c08";
	$fdata["ownerTable"] = "movieview";
	$fdata["Label"] = "C08"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
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
	
		
		
	$tdatamovieview["c08"] = $fdata;
//	c09
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "c09";
	$fdata["GoodName"] = "c09";
	$fdata["ownerTable"] = "movieview";
	$fdata["Label"] = "C09"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
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
	
		
		
	$tdatamovieview["c09"] = $fdata;
//	c10
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "c10";
	$fdata["GoodName"] = "c10";
	$fdata["ownerTable"] = "movieview";
	$fdata["Label"] = "C10"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
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
	
		
		
	$tdatamovieview["c10"] = $fdata;
//	c11
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "c11";
	$fdata["GoodName"] = "c11";
	$fdata["ownerTable"] = "movieview";
	$fdata["Label"] = "C11"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
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
	
		
		
	$tdatamovieview["c11"] = $fdata;
//	c12
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "c12";
	$fdata["GoodName"] = "c12";
	$fdata["ownerTable"] = "movieview";
	$fdata["Label"] = "C12"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
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
	
		
		
	$tdatamovieview["c12"] = $fdata;
//	c13
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "c13";
	$fdata["GoodName"] = "c13";
	$fdata["ownerTable"] = "movieview";
	$fdata["Label"] = "C13"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
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
	
		
		
	$tdatamovieview["c13"] = $fdata;
//	c14
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "c14";
	$fdata["GoodName"] = "c14";
	$fdata["ownerTable"] = "movieview";
	$fdata["Label"] = "C14"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
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
	
		
		
	$tdatamovieview["c14"] = $fdata;
//	c15
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "c15";
	$fdata["GoodName"] = "c15";
	$fdata["ownerTable"] = "movieview";
	$fdata["Label"] = "C15"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
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
	
		
		
	$tdatamovieview["c15"] = $fdata;
//	c16
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "c16";
	$fdata["GoodName"] = "c16";
	$fdata["ownerTable"] = "movieview";
	$fdata["Label"] = "C16"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
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
	
		
		
	$tdatamovieview["c16"] = $fdata;
//	c17
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "c17";
	$fdata["GoodName"] = "c17";
	$fdata["ownerTable"] = "movieview";
	$fdata["Label"] = "C17"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
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
	
		
		
	$tdatamovieview["c17"] = $fdata;
//	c18
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "c18";
	$fdata["GoodName"] = "c18";
	$fdata["ownerTable"] = "movieview";
	$fdata["Label"] = "C18"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
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
	
		
		
	$tdatamovieview["c18"] = $fdata;
//	c19
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "c19";
	$fdata["GoodName"] = "c19";
	$fdata["ownerTable"] = "movieview";
	$fdata["Label"] = "C19"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
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
	
		
		
	$tdatamovieview["c19"] = $fdata;
//	c20
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "c20";
	$fdata["GoodName"] = "c20";
	$fdata["ownerTable"] = "movieview";
	$fdata["Label"] = "C20"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
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
	
		
		
	$tdatamovieview["c20"] = $fdata;
//	c21
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "c21";
	$fdata["GoodName"] = "c21";
	$fdata["ownerTable"] = "movieview";
	$fdata["Label"] = "C21"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
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
	
		
		
	$tdatamovieview["c21"] = $fdata;
//	c22
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "c22";
	$fdata["GoodName"] = "c22";
	$fdata["ownerTable"] = "movieview";
	$fdata["Label"] = "C22"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
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
	
		
		
	$tdatamovieview["c22"] = $fdata;
//	c23
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "c23";
	$fdata["GoodName"] = "c23";
	$fdata["ownerTable"] = "movieview";
	$fdata["Label"] = "C23"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
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
	
		
		
	$tdatamovieview["c23"] = $fdata;
//	idSet
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "idSet";
	$fdata["GoodName"] = "idSet";
	$fdata["ownerTable"] = "movieview";
	$fdata["Label"] = "Id Set"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "idSet"; 
		$fdata["FullName"] = "idSet";
	
		
		
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
	
		
		
	$tdatamovieview["idSet"] = $fdata;
//	strSet
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "strSet";
	$fdata["GoodName"] = "strSet";
	$fdata["ownerTable"] = "movieview";
	$fdata["Label"] = "Str Set"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "strSet"; 
		$fdata["FullName"] = "strSet";
	
		
		
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
	
		
		
	$tdatamovieview["strSet"] = $fdata;
//	strFileName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "strFileName";
	$fdata["GoodName"] = "strFileName";
	$fdata["ownerTable"] = "movieview";
	$fdata["Label"] = "Str File Name"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
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
	
		
		
	$tdatamovieview["strFileName"] = $fdata;
//	strPath
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "strPath";
	$fdata["GoodName"] = "strPath";
	$fdata["ownerTable"] = "movieview";
	$fdata["Label"] = "Str Path"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
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
	
		
		
	$tdatamovieview["strPath"] = $fdata;
//	playCount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "playCount";
	$fdata["GoodName"] = "playCount";
	$fdata["ownerTable"] = "movieview";
	$fdata["Label"] = "Play Count"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
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
	
		
		
	$tdatamovieview["playCount"] = $fdata;
//	lastPlayed
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "lastPlayed";
	$fdata["GoodName"] = "lastPlayed";
	$fdata["ownerTable"] = "movieview";
	$fdata["Label"] = "Last Played"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
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
	
		
		
	$tdatamovieview["lastPlayed"] = $fdata;
//	dateAdded
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "dateAdded";
	$fdata["GoodName"] = "dateAdded";
	$fdata["ownerTable"] = "movieview";
	$fdata["Label"] = "Date Added"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
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
	
		
		
	$tdatamovieview["dateAdded"] = $fdata;
//	resumeTimeInSeconds
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "resumeTimeInSeconds";
	$fdata["GoodName"] = "resumeTimeInSeconds";
	$fdata["ownerTable"] = "movieview";
	$fdata["Label"] = "Resume Time In Seconds"; 
	$fdata["FieldType"] = 5;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
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
	
		
		
	$tdatamovieview["resumeTimeInSeconds"] = $fdata;
//	totalTimeInSeconds
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "totalTimeInSeconds";
	$fdata["GoodName"] = "totalTimeInSeconds";
	$fdata["ownerTable"] = "movieview";
	$fdata["Label"] = "Total Time In Seconds"; 
	$fdata["FieldType"] = 5;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
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
	
		
		
	$tdatamovieview["totalTimeInSeconds"] = $fdata;

	
$tables_data["movieview"]=&$tdatamovieview;
$field_labels["movieview"] = &$fieldLabelsmovieview;
$fieldToolTips["movieview"] = &$fieldToolTipsmovieview;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["movieview"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["movieview"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_movieview()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "idMovie,  idFile,  c00,  c01,  c02,  c03,  c04,  c05,  c06,  c07,  c08,  c09,  c10,  c11,  c12,  c13,  c14,  c15,  c16,  c17,  c18,  c19,  c20,  c21,  c22,  c23,  idSet,  strSet,  strFileName,  strPath,  playCount,  lastPlayed,  dateAdded,  resumeTimeInSeconds,  totalTimeInSeconds";
$proto0["m_strFrom"] = "FROM movieview";
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
	"m_strName" => "idMovie",
	"m_strTable" => "movieview"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "idFile",
	"m_strTable" => "movieview"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "c00",
	"m_strTable" => "movieview"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "c01",
	"m_strTable" => "movieview"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "c02",
	"m_strTable" => "movieview"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "c03",
	"m_strTable" => "movieview"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "c04",
	"m_strTable" => "movieview"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "c05",
	"m_strTable" => "movieview"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "c06",
	"m_strTable" => "movieview"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "c07",
	"m_strTable" => "movieview"
));

$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "c08",
	"m_strTable" => "movieview"
));

$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "c09",
	"m_strTable" => "movieview"
));

$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "c10",
	"m_strTable" => "movieview"
));

$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "c11",
	"m_strTable" => "movieview"
));

$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "c12",
	"m_strTable" => "movieview"
));

$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "c13",
	"m_strTable" => "movieview"
));

$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "c14",
	"m_strTable" => "movieview"
));

$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "c15",
	"m_strTable" => "movieview"
));

$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLField(array(
	"m_strName" => "c16",
	"m_strTable" => "movieview"
));

$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "";
$obj = new SQLFieldListItem($proto41);

$proto0["m_fieldlist"][]=$obj;
						$proto43=array();
			$obj = new SQLField(array(
	"m_strName" => "c17",
	"m_strTable" => "movieview"
));

$proto43["m_expr"]=$obj;
$proto43["m_alias"] = "";
$obj = new SQLFieldListItem($proto43);

$proto0["m_fieldlist"][]=$obj;
						$proto45=array();
			$obj = new SQLField(array(
	"m_strName" => "c18",
	"m_strTable" => "movieview"
));

$proto45["m_expr"]=$obj;
$proto45["m_alias"] = "";
$obj = new SQLFieldListItem($proto45);

$proto0["m_fieldlist"][]=$obj;
						$proto47=array();
			$obj = new SQLField(array(
	"m_strName" => "c19",
	"m_strTable" => "movieview"
));

$proto47["m_expr"]=$obj;
$proto47["m_alias"] = "";
$obj = new SQLFieldListItem($proto47);

$proto0["m_fieldlist"][]=$obj;
						$proto49=array();
			$obj = new SQLField(array(
	"m_strName" => "c20",
	"m_strTable" => "movieview"
));

$proto49["m_expr"]=$obj;
$proto49["m_alias"] = "";
$obj = new SQLFieldListItem($proto49);

$proto0["m_fieldlist"][]=$obj;
						$proto51=array();
			$obj = new SQLField(array(
	"m_strName" => "c21",
	"m_strTable" => "movieview"
));

$proto51["m_expr"]=$obj;
$proto51["m_alias"] = "";
$obj = new SQLFieldListItem($proto51);

$proto0["m_fieldlist"][]=$obj;
						$proto53=array();
			$obj = new SQLField(array(
	"m_strName" => "c22",
	"m_strTable" => "movieview"
));

$proto53["m_expr"]=$obj;
$proto53["m_alias"] = "";
$obj = new SQLFieldListItem($proto53);

$proto0["m_fieldlist"][]=$obj;
						$proto55=array();
			$obj = new SQLField(array(
	"m_strName" => "c23",
	"m_strTable" => "movieview"
));

$proto55["m_expr"]=$obj;
$proto55["m_alias"] = "";
$obj = new SQLFieldListItem($proto55);

$proto0["m_fieldlist"][]=$obj;
						$proto57=array();
			$obj = new SQLField(array(
	"m_strName" => "idSet",
	"m_strTable" => "movieview"
));

$proto57["m_expr"]=$obj;
$proto57["m_alias"] = "";
$obj = new SQLFieldListItem($proto57);

$proto0["m_fieldlist"][]=$obj;
						$proto59=array();
			$obj = new SQLField(array(
	"m_strName" => "strSet",
	"m_strTable" => "movieview"
));

$proto59["m_expr"]=$obj;
$proto59["m_alias"] = "";
$obj = new SQLFieldListItem($proto59);

$proto0["m_fieldlist"][]=$obj;
						$proto61=array();
			$obj = new SQLField(array(
	"m_strName" => "strFileName",
	"m_strTable" => "movieview"
));

$proto61["m_expr"]=$obj;
$proto61["m_alias"] = "";
$obj = new SQLFieldListItem($proto61);

$proto0["m_fieldlist"][]=$obj;
						$proto63=array();
			$obj = new SQLField(array(
	"m_strName" => "strPath",
	"m_strTable" => "movieview"
));

$proto63["m_expr"]=$obj;
$proto63["m_alias"] = "";
$obj = new SQLFieldListItem($proto63);

$proto0["m_fieldlist"][]=$obj;
						$proto65=array();
			$obj = new SQLField(array(
	"m_strName" => "playCount",
	"m_strTable" => "movieview"
));

$proto65["m_expr"]=$obj;
$proto65["m_alias"] = "";
$obj = new SQLFieldListItem($proto65);

$proto0["m_fieldlist"][]=$obj;
						$proto67=array();
			$obj = new SQLField(array(
	"m_strName" => "lastPlayed",
	"m_strTable" => "movieview"
));

$proto67["m_expr"]=$obj;
$proto67["m_alias"] = "";
$obj = new SQLFieldListItem($proto67);

$proto0["m_fieldlist"][]=$obj;
						$proto69=array();
			$obj = new SQLField(array(
	"m_strName" => "dateAdded",
	"m_strTable" => "movieview"
));

$proto69["m_expr"]=$obj;
$proto69["m_alias"] = "";
$obj = new SQLFieldListItem($proto69);

$proto0["m_fieldlist"][]=$obj;
						$proto71=array();
			$obj = new SQLField(array(
	"m_strName" => "resumeTimeInSeconds",
	"m_strTable" => "movieview"
));

$proto71["m_expr"]=$obj;
$proto71["m_alias"] = "";
$obj = new SQLFieldListItem($proto71);

$proto0["m_fieldlist"][]=$obj;
						$proto73=array();
			$obj = new SQLField(array(
	"m_strName" => "totalTimeInSeconds",
	"m_strTable" => "movieview"
));

$proto73["m_expr"]=$obj;
$proto73["m_alias"] = "";
$obj = new SQLFieldListItem($proto73);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto75=array();
$proto75["m_link"] = "SQLL_MAIN";
			$proto76=array();
$proto76["m_strName"] = "movieview";
$proto76["m_columns"] = array();
$proto76["m_columns"][] = "idMovie";
$proto76["m_columns"][] = "idFile";
$proto76["m_columns"][] = "c00";
$proto76["m_columns"][] = "c01";
$proto76["m_columns"][] = "c02";
$proto76["m_columns"][] = "c03";
$proto76["m_columns"][] = "c04";
$proto76["m_columns"][] = "c05";
$proto76["m_columns"][] = "c06";
$proto76["m_columns"][] = "c07";
$proto76["m_columns"][] = "c08";
$proto76["m_columns"][] = "c09";
$proto76["m_columns"][] = "c10";
$proto76["m_columns"][] = "c11";
$proto76["m_columns"][] = "c12";
$proto76["m_columns"][] = "c13";
$proto76["m_columns"][] = "c14";
$proto76["m_columns"][] = "c15";
$proto76["m_columns"][] = "c16";
$proto76["m_columns"][] = "c17";
$proto76["m_columns"][] = "c18";
$proto76["m_columns"][] = "c19";
$proto76["m_columns"][] = "c20";
$proto76["m_columns"][] = "c21";
$proto76["m_columns"][] = "c22";
$proto76["m_columns"][] = "c23";
$proto76["m_columns"][] = "idSet";
$proto76["m_columns"][] = "strSet";
$proto76["m_columns"][] = "strFileName";
$proto76["m_columns"][] = "strPath";
$proto76["m_columns"][] = "playCount";
$proto76["m_columns"][] = "lastPlayed";
$proto76["m_columns"][] = "dateAdded";
$proto76["m_columns"][] = "resumeTimeInSeconds";
$proto76["m_columns"][] = "totalTimeInSeconds";
$obj = new SQLTable($proto76);

$proto75["m_table"] = $obj;
$proto75["m_alias"] = "";
$proto77=array();
$proto77["m_sql"] = "";
$proto77["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto77["m_column"]=$obj;
$proto77["m_contained"] = array();
$proto77["m_strCase"] = "";
$proto77["m_havingmode"] = "0";
$proto77["m_inBrackets"] = "0";
$proto77["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto77);

$proto75["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto75);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_movieview = createSqlQuery_movieview();
																																			$tdatamovieview[".sqlquery"] = $queryData_movieview;

$tableEvents["movieview"] = new eventsBase;
$tdatamovieview[".hasEvents"] = false;

$cipherer = new RunnerCipherer("movieview");

?>