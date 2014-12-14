<?php
require_once(getabspath("classes/cipherer.php"));
$tdataseasonview = array();
	$tdataseasonview[".NumberOfChars"] = 80; 
	$tdataseasonview[".ShortName"] = "seasonview";
	$tdataseasonview[".OwnerID"] = "";
	$tdataseasonview[".OriginalTable"] = "seasonview";

//	field labels
$fieldLabelsseasonview = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsseasonview["English"] = array();
	$fieldToolTipsseasonview["English"] = array();
	$fieldLabelsseasonview["English"]["idSeason"] = "Id Season";
	$fieldToolTipsseasonview["English"]["idSeason"] = "";
	$fieldLabelsseasonview["English"]["idShow"] = "Id Show";
	$fieldToolTipsseasonview["English"]["idShow"] = "";
	$fieldLabelsseasonview["English"]["season"] = "Season";
	$fieldToolTipsseasonview["English"]["season"] = "";
	$fieldLabelsseasonview["English"]["strPath"] = "Str Path";
	$fieldToolTipsseasonview["English"]["strPath"] = "";
	$fieldLabelsseasonview["English"]["showTitle"] = "Show Title";
	$fieldToolTipsseasonview["English"]["showTitle"] = "";
	$fieldLabelsseasonview["English"]["plot"] = "Plot";
	$fieldToolTipsseasonview["English"]["plot"] = "";
	$fieldLabelsseasonview["English"]["premiered"] = "Premiered";
	$fieldToolTipsseasonview["English"]["premiered"] = "";
	$fieldLabelsseasonview["English"]["genre"] = "Genre";
	$fieldToolTipsseasonview["English"]["genre"] = "";
	$fieldLabelsseasonview["English"]["strStudio"] = "Str Studio";
	$fieldToolTipsseasonview["English"]["strStudio"] = "";
	$fieldLabelsseasonview["English"]["mpaa"] = "Mpaa";
	$fieldToolTipsseasonview["English"]["mpaa"] = "";
	$fieldLabelsseasonview["English"]["episodes"] = "Episodes";
	$fieldToolTipsseasonview["English"]["episodes"] = "";
	$fieldLabelsseasonview["English"]["playCount"] = "Play Count";
	$fieldToolTipsseasonview["English"]["playCount"] = "";
	if (count($fieldToolTipsseasonview["English"]))
		$tdataseasonview[".isUseToolTips"] = true;
}
	
	
	$tdataseasonview[".NCSearch"] = true;



$tdataseasonview[".shortTableName"] = "seasonview";
$tdataseasonview[".nSecOptions"] = 0;
$tdataseasonview[".recsPerRowList"] = 1;
$tdataseasonview[".mainTableOwnerID"] = "";
$tdataseasonview[".moveNext"] = 1;
$tdataseasonview[".nType"] = 0;

$tdataseasonview[".strOriginalTableName"] = "seasonview";




$tdataseasonview[".showAddInPopup"] = false;

$tdataseasonview[".showEditInPopup"] = false;

$tdataseasonview[".showViewInPopup"] = false;

$tdataseasonview[".fieldsForRegister"] = array();

$tdataseasonview[".listAjax"] = false;

	$tdataseasonview[".audit"] = false;

	$tdataseasonview[".locking"] = false;

$tdataseasonview[".listIcons"] = true;

$tdataseasonview[".exportTo"] = true;

$tdataseasonview[".printFriendly"] = true;


$tdataseasonview[".showSimpleSearchOptions"] = false;

$tdataseasonview[".showSearchPanel"] = true;

if (isMobile())
	$tdataseasonview[".isUseAjaxSuggest"] = false;
else 
	$tdataseasonview[".isUseAjaxSuggest"] = true;

$tdataseasonview[".rowHighlite"] = true;

// button handlers file names

$tdataseasonview[".addPageEvents"] = false;

// use timepicker for search panel
$tdataseasonview[".isUseTimeForSearch"] = false;




$tdataseasonview[".allSearchFields"] = array();

$tdataseasonview[".allSearchFields"][] = "idSeason";
$tdataseasonview[".allSearchFields"][] = "idShow";
$tdataseasonview[".allSearchFields"][] = "season";
$tdataseasonview[".allSearchFields"][] = "strPath";
$tdataseasonview[".allSearchFields"][] = "showTitle";
$tdataseasonview[".allSearchFields"][] = "plot";
$tdataseasonview[".allSearchFields"][] = "premiered";
$tdataseasonview[".allSearchFields"][] = "genre";
$tdataseasonview[".allSearchFields"][] = "strStudio";
$tdataseasonview[".allSearchFields"][] = "mpaa";
$tdataseasonview[".allSearchFields"][] = "episodes";
$tdataseasonview[".allSearchFields"][] = "playCount";

$tdataseasonview[".googleLikeFields"][] = "idSeason";
$tdataseasonview[".googleLikeFields"][] = "idShow";
$tdataseasonview[".googleLikeFields"][] = "season";
$tdataseasonview[".googleLikeFields"][] = "strPath";
$tdataseasonview[".googleLikeFields"][] = "showTitle";
$tdataseasonview[".googleLikeFields"][] = "plot";
$tdataseasonview[".googleLikeFields"][] = "premiered";
$tdataseasonview[".googleLikeFields"][] = "genre";
$tdataseasonview[".googleLikeFields"][] = "strStudio";
$tdataseasonview[".googleLikeFields"][] = "mpaa";
$tdataseasonview[".googleLikeFields"][] = "episodes";
$tdataseasonview[".googleLikeFields"][] = "playCount";


$tdataseasonview[".advSearchFields"][] = "idSeason";
$tdataseasonview[".advSearchFields"][] = "idShow";
$tdataseasonview[".advSearchFields"][] = "season";
$tdataseasonview[".advSearchFields"][] = "strPath";
$tdataseasonview[".advSearchFields"][] = "showTitle";
$tdataseasonview[".advSearchFields"][] = "plot";
$tdataseasonview[".advSearchFields"][] = "premiered";
$tdataseasonview[".advSearchFields"][] = "genre";
$tdataseasonview[".advSearchFields"][] = "strStudio";
$tdataseasonview[".advSearchFields"][] = "mpaa";
$tdataseasonview[".advSearchFields"][] = "episodes";
$tdataseasonview[".advSearchFields"][] = "playCount";

$tdataseasonview[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdataseasonview[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataseasonview[".strOrderBy"] = $tstrOrderBy;

$tdataseasonview[".orderindexes"] = array();

$tdataseasonview[".sqlHead"] = "SELECT idSeason,   idShow,   season,   strPath,   showTitle,   plot,   premiered,   genre,   strStudio,   mpaa,   episodes,   playCount";
$tdataseasonview[".sqlFrom"] = "FROM seasonview";
$tdataseasonview[".sqlWhereExpr"] = "";
$tdataseasonview[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataseasonview[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataseasonview[".arrGroupsPerPage"] = $arrGPP;

$tableKeysseasonview = array();
$tdataseasonview[".Keys"] = $tableKeysseasonview;

$tdataseasonview[".listFields"] = array();
$tdataseasonview[".listFields"][] = "idSeason";
$tdataseasonview[".listFields"][] = "idShow";
$tdataseasonview[".listFields"][] = "season";
$tdataseasonview[".listFields"][] = "strPath";
$tdataseasonview[".listFields"][] = "showTitle";
$tdataseasonview[".listFields"][] = "plot";
$tdataseasonview[".listFields"][] = "premiered";
$tdataseasonview[".listFields"][] = "genre";
$tdataseasonview[".listFields"][] = "strStudio";
$tdataseasonview[".listFields"][] = "mpaa";
$tdataseasonview[".listFields"][] = "episodes";
$tdataseasonview[".listFields"][] = "playCount";

$tdataseasonview[".viewFields"] = array();
$tdataseasonview[".viewFields"][] = "idSeason";
$tdataseasonview[".viewFields"][] = "idShow";
$tdataseasonview[".viewFields"][] = "season";
$tdataseasonview[".viewFields"][] = "strPath";
$tdataseasonview[".viewFields"][] = "showTitle";
$tdataseasonview[".viewFields"][] = "plot";
$tdataseasonview[".viewFields"][] = "premiered";
$tdataseasonview[".viewFields"][] = "genre";
$tdataseasonview[".viewFields"][] = "strStudio";
$tdataseasonview[".viewFields"][] = "mpaa";
$tdataseasonview[".viewFields"][] = "episodes";
$tdataseasonview[".viewFields"][] = "playCount";

$tdataseasonview[".addFields"] = array();
$tdataseasonview[".addFields"][] = "idSeason";
$tdataseasonview[".addFields"][] = "idShow";
$tdataseasonview[".addFields"][] = "season";
$tdataseasonview[".addFields"][] = "strPath";
$tdataseasonview[".addFields"][] = "showTitle";
$tdataseasonview[".addFields"][] = "plot";
$tdataseasonview[".addFields"][] = "premiered";
$tdataseasonview[".addFields"][] = "genre";
$tdataseasonview[".addFields"][] = "strStudio";
$tdataseasonview[".addFields"][] = "mpaa";
$tdataseasonview[".addFields"][] = "episodes";
$tdataseasonview[".addFields"][] = "playCount";

$tdataseasonview[".inlineAddFields"] = array();
$tdataseasonview[".inlineAddFields"][] = "idSeason";
$tdataseasonview[".inlineAddFields"][] = "idShow";
$tdataseasonview[".inlineAddFields"][] = "season";
$tdataseasonview[".inlineAddFields"][] = "strPath";
$tdataseasonview[".inlineAddFields"][] = "showTitle";
$tdataseasonview[".inlineAddFields"][] = "plot";
$tdataseasonview[".inlineAddFields"][] = "premiered";
$tdataseasonview[".inlineAddFields"][] = "genre";
$tdataseasonview[".inlineAddFields"][] = "strStudio";
$tdataseasonview[".inlineAddFields"][] = "mpaa";
$tdataseasonview[".inlineAddFields"][] = "episodes";
$tdataseasonview[".inlineAddFields"][] = "playCount";

$tdataseasonview[".editFields"] = array();
$tdataseasonview[".editFields"][] = "idSeason";
$tdataseasonview[".editFields"][] = "idShow";
$tdataseasonview[".editFields"][] = "season";
$tdataseasonview[".editFields"][] = "strPath";
$tdataseasonview[".editFields"][] = "showTitle";
$tdataseasonview[".editFields"][] = "plot";
$tdataseasonview[".editFields"][] = "premiered";
$tdataseasonview[".editFields"][] = "genre";
$tdataseasonview[".editFields"][] = "strStudio";
$tdataseasonview[".editFields"][] = "mpaa";
$tdataseasonview[".editFields"][] = "episodes";
$tdataseasonview[".editFields"][] = "playCount";

$tdataseasonview[".inlineEditFields"] = array();
$tdataseasonview[".inlineEditFields"][] = "idSeason";
$tdataseasonview[".inlineEditFields"][] = "idShow";
$tdataseasonview[".inlineEditFields"][] = "season";
$tdataseasonview[".inlineEditFields"][] = "strPath";
$tdataseasonview[".inlineEditFields"][] = "showTitle";
$tdataseasonview[".inlineEditFields"][] = "plot";
$tdataseasonview[".inlineEditFields"][] = "premiered";
$tdataseasonview[".inlineEditFields"][] = "genre";
$tdataseasonview[".inlineEditFields"][] = "strStudio";
$tdataseasonview[".inlineEditFields"][] = "mpaa";
$tdataseasonview[".inlineEditFields"][] = "episodes";
$tdataseasonview[".inlineEditFields"][] = "playCount";

$tdataseasonview[".exportFields"] = array();
$tdataseasonview[".exportFields"][] = "idSeason";
$tdataseasonview[".exportFields"][] = "idShow";
$tdataseasonview[".exportFields"][] = "season";
$tdataseasonview[".exportFields"][] = "strPath";
$tdataseasonview[".exportFields"][] = "showTitle";
$tdataseasonview[".exportFields"][] = "plot";
$tdataseasonview[".exportFields"][] = "premiered";
$tdataseasonview[".exportFields"][] = "genre";
$tdataseasonview[".exportFields"][] = "strStudio";
$tdataseasonview[".exportFields"][] = "mpaa";
$tdataseasonview[".exportFields"][] = "episodes";
$tdataseasonview[".exportFields"][] = "playCount";

$tdataseasonview[".printFields"] = array();
$tdataseasonview[".printFields"][] = "idSeason";
$tdataseasonview[".printFields"][] = "idShow";
$tdataseasonview[".printFields"][] = "season";
$tdataseasonview[".printFields"][] = "strPath";
$tdataseasonview[".printFields"][] = "showTitle";
$tdataseasonview[".printFields"][] = "plot";
$tdataseasonview[".printFields"][] = "premiered";
$tdataseasonview[".printFields"][] = "genre";
$tdataseasonview[".printFields"][] = "strStudio";
$tdataseasonview[".printFields"][] = "mpaa";
$tdataseasonview[".printFields"][] = "episodes";
$tdataseasonview[".printFields"][] = "playCount";

//	idSeason
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idSeason";
	$fdata["GoodName"] = "idSeason";
	$fdata["ownerTable"] = "seasonview";
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
	
		
		
	$tdataseasonview["idSeason"] = $fdata;
//	idShow
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "idShow";
	$fdata["GoodName"] = "idShow";
	$fdata["ownerTable"] = "seasonview";
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
	
		
		
	$tdataseasonview["idShow"] = $fdata;
//	season
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "season";
	$fdata["GoodName"] = "season";
	$fdata["ownerTable"] = "seasonview";
	$fdata["Label"] = "Season"; 
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
	
		$fdata["strField"] = "season"; 
		$fdata["FullName"] = "season";
	
		
		
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
	
		
		
	$tdataseasonview["season"] = $fdata;
//	strPath
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "strPath";
	$fdata["GoodName"] = "strPath";
	$fdata["ownerTable"] = "seasonview";
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
	
		
		
	$tdataseasonview["strPath"] = $fdata;
//	showTitle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "showTitle";
	$fdata["GoodName"] = "showTitle";
	$fdata["ownerTable"] = "seasonview";
	$fdata["Label"] = "Show Title"; 
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
	
		$fdata["strField"] = "showTitle"; 
		$fdata["FullName"] = "showTitle";
	
		
		
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
	
		
		
	$tdataseasonview["showTitle"] = $fdata;
//	plot
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "plot";
	$fdata["GoodName"] = "plot";
	$fdata["ownerTable"] = "seasonview";
	$fdata["Label"] = "Plot"; 
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
	
		$fdata["strField"] = "plot"; 
		$fdata["FullName"] = "plot";
	
		
		
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
	
		
		
	$tdataseasonview["plot"] = $fdata;
//	premiered
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "premiered";
	$fdata["GoodName"] = "premiered";
	$fdata["ownerTable"] = "seasonview";
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
	
		
		
	$tdataseasonview["premiered"] = $fdata;
//	genre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "genre";
	$fdata["GoodName"] = "genre";
	$fdata["ownerTable"] = "seasonview";
	$fdata["Label"] = "Genre"; 
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
	
		$fdata["strField"] = "genre"; 
		$fdata["FullName"] = "genre";
	
		
		
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
	
		
		
	$tdataseasonview["genre"] = $fdata;
//	strStudio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "strStudio";
	$fdata["GoodName"] = "strStudio";
	$fdata["ownerTable"] = "seasonview";
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
	
		
		
	$tdataseasonview["strStudio"] = $fdata;
//	mpaa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "mpaa";
	$fdata["GoodName"] = "mpaa";
	$fdata["ownerTable"] = "seasonview";
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
	
		
		
	$tdataseasonview["mpaa"] = $fdata;
//	episodes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "episodes";
	$fdata["GoodName"] = "episodes";
	$fdata["ownerTable"] = "seasonview";
	$fdata["Label"] = "Episodes"; 
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
	
		$fdata["strField"] = "episodes"; 
		$fdata["FullName"] = "episodes";
	
		
		
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
	
		
		
	$tdataseasonview["episodes"] = $fdata;
//	playCount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "playCount";
	$fdata["GoodName"] = "playCount";
	$fdata["ownerTable"] = "seasonview";
	$fdata["Label"] = "Play Count"; 
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
	
		
		
	$tdataseasonview["playCount"] = $fdata;

	
$tables_data["seasonview"]=&$tdataseasonview;
$field_labels["seasonview"] = &$fieldLabelsseasonview;
$fieldToolTips["seasonview"] = &$fieldToolTipsseasonview;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["seasonview"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["seasonview"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_seasonview()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "idSeason,   idShow,   season,   strPath,   showTitle,   plot,   premiered,   genre,   strStudio,   mpaa,   episodes,   playCount";
$proto0["m_strFrom"] = "FROM seasonview";
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
	"m_strName" => "idSeason",
	"m_strTable" => "seasonview"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "idShow",
	"m_strTable" => "seasonview"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "season",
	"m_strTable" => "seasonview"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "strPath",
	"m_strTable" => "seasonview"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "showTitle",
	"m_strTable" => "seasonview"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "plot",
	"m_strTable" => "seasonview"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "premiered",
	"m_strTable" => "seasonview"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "genre",
	"m_strTable" => "seasonview"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "strStudio",
	"m_strTable" => "seasonview"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "mpaa",
	"m_strTable" => "seasonview"
));

$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "episodes",
	"m_strTable" => "seasonview"
));

$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "playCount",
	"m_strTable" => "seasonview"
));

$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto29=array();
$proto29["m_link"] = "SQLL_MAIN";
			$proto30=array();
$proto30["m_strName"] = "seasonview";
$proto30["m_columns"] = array();
$proto30["m_columns"][] = "idSeason";
$proto30["m_columns"][] = "idShow";
$proto30["m_columns"][] = "season";
$proto30["m_columns"][] = "strPath";
$proto30["m_columns"][] = "showTitle";
$proto30["m_columns"][] = "plot";
$proto30["m_columns"][] = "premiered";
$proto30["m_columns"][] = "genre";
$proto30["m_columns"][] = "strStudio";
$proto30["m_columns"][] = "mpaa";
$proto30["m_columns"][] = "episodes";
$proto30["m_columns"][] = "playCount";
$obj = new SQLTable($proto30);

$proto29["m_table"] = $obj;
$proto29["m_alias"] = "";
$proto31=array();
$proto31["m_sql"] = "";
$proto31["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto31["m_column"]=$obj;
$proto31["m_contained"] = array();
$proto31["m_strCase"] = "";
$proto31["m_havingmode"] = "0";
$proto31["m_inBrackets"] = "0";
$proto31["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto31);

$proto29["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto29);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_seasonview = createSqlQuery_seasonview();
												$tdataseasonview[".sqlquery"] = $queryData_seasonview;

$tableEvents["seasonview"] = new eventsBase;
$tdataseasonview[".hasEvents"] = false;

$cipherer = new RunnerCipherer("seasonview");

?>