<?php
require_once(getabspath("classes/cipherer.php"));
$tdatatvshowcounts = array();
	$tdatatvshowcounts[".NumberOfChars"] = 80; 
	$tdatatvshowcounts[".ShortName"] = "tvshowcounts";
	$tdatatvshowcounts[".OwnerID"] = "";
	$tdatatvshowcounts[".OriginalTable"] = "tvshowcounts";

//	field labels
$fieldLabelstvshowcounts = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstvshowcounts["English"] = array();
	$fieldToolTipstvshowcounts["English"] = array();
	$fieldLabelstvshowcounts["English"]["idShow"] = "Id Show";
	$fieldToolTipstvshowcounts["English"]["idShow"] = "";
	$fieldLabelstvshowcounts["English"]["lastPlayed"] = "Last Played";
	$fieldToolTipstvshowcounts["English"]["lastPlayed"] = "";
	$fieldLabelstvshowcounts["English"]["totalCount"] = "Total Count";
	$fieldToolTipstvshowcounts["English"]["totalCount"] = "";
	$fieldLabelstvshowcounts["English"]["watchedcount"] = "Watchedcount";
	$fieldToolTipstvshowcounts["English"]["watchedcount"] = "";
	$fieldLabelstvshowcounts["English"]["totalSeasons"] = "Total Seasons";
	$fieldToolTipstvshowcounts["English"]["totalSeasons"] = "";
	$fieldLabelstvshowcounts["English"]["dateAdded"] = "Date Added";
	$fieldToolTipstvshowcounts["English"]["dateAdded"] = "";
	if (count($fieldToolTipstvshowcounts["English"]))
		$tdatatvshowcounts[".isUseToolTips"] = true;
}
	
	
	$tdatatvshowcounts[".NCSearch"] = true;



$tdatatvshowcounts[".shortTableName"] = "tvshowcounts";
$tdatatvshowcounts[".nSecOptions"] = 0;
$tdatatvshowcounts[".recsPerRowList"] = 1;
$tdatatvshowcounts[".mainTableOwnerID"] = "";
$tdatatvshowcounts[".moveNext"] = 1;
$tdatatvshowcounts[".nType"] = 0;

$tdatatvshowcounts[".strOriginalTableName"] = "tvshowcounts";




$tdatatvshowcounts[".showAddInPopup"] = false;

$tdatatvshowcounts[".showEditInPopup"] = false;

$tdatatvshowcounts[".showViewInPopup"] = false;

$tdatatvshowcounts[".fieldsForRegister"] = array();

$tdatatvshowcounts[".listAjax"] = false;

	$tdatatvshowcounts[".audit"] = false;

	$tdatatvshowcounts[".locking"] = false;

$tdatatvshowcounts[".listIcons"] = true;

$tdatatvshowcounts[".exportTo"] = true;

$tdatatvshowcounts[".printFriendly"] = true;


$tdatatvshowcounts[".showSimpleSearchOptions"] = false;

$tdatatvshowcounts[".showSearchPanel"] = true;

if (isMobile())
	$tdatatvshowcounts[".isUseAjaxSuggest"] = false;
else 
	$tdatatvshowcounts[".isUseAjaxSuggest"] = true;

$tdatatvshowcounts[".rowHighlite"] = true;

// button handlers file names

$tdatatvshowcounts[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatvshowcounts[".isUseTimeForSearch"] = false;




$tdatatvshowcounts[".allSearchFields"] = array();

$tdatatvshowcounts[".allSearchFields"][] = "idShow";
$tdatatvshowcounts[".allSearchFields"][] = "lastPlayed";
$tdatatvshowcounts[".allSearchFields"][] = "totalCount";
$tdatatvshowcounts[".allSearchFields"][] = "watchedcount";
$tdatatvshowcounts[".allSearchFields"][] = "totalSeasons";
$tdatatvshowcounts[".allSearchFields"][] = "dateAdded";

$tdatatvshowcounts[".googleLikeFields"][] = "idShow";
$tdatatvshowcounts[".googleLikeFields"][] = "lastPlayed";
$tdatatvshowcounts[".googleLikeFields"][] = "totalCount";
$tdatatvshowcounts[".googleLikeFields"][] = "watchedcount";
$tdatatvshowcounts[".googleLikeFields"][] = "totalSeasons";
$tdatatvshowcounts[".googleLikeFields"][] = "dateAdded";


$tdatatvshowcounts[".advSearchFields"][] = "idShow";
$tdatatvshowcounts[".advSearchFields"][] = "lastPlayed";
$tdatatvshowcounts[".advSearchFields"][] = "totalCount";
$tdatatvshowcounts[".advSearchFields"][] = "watchedcount";
$tdatatvshowcounts[".advSearchFields"][] = "totalSeasons";
$tdatatvshowcounts[".advSearchFields"][] = "dateAdded";

$tdatatvshowcounts[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatatvshowcounts[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatvshowcounts[".strOrderBy"] = $tstrOrderBy;

$tdatatvshowcounts[".orderindexes"] = array();

$tdatatvshowcounts[".sqlHead"] = "SELECT idShow,   lastPlayed,   totalCount,   watchedcount,   totalSeasons,   dateAdded";
$tdatatvshowcounts[".sqlFrom"] = "FROM tvshowcounts";
$tdatatvshowcounts[".sqlWhereExpr"] = "";
$tdatatvshowcounts[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatvshowcounts[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatvshowcounts[".arrGroupsPerPage"] = $arrGPP;

$tableKeystvshowcounts = array();
$tdatatvshowcounts[".Keys"] = $tableKeystvshowcounts;

$tdatatvshowcounts[".listFields"] = array();
$tdatatvshowcounts[".listFields"][] = "idShow";
$tdatatvshowcounts[".listFields"][] = "lastPlayed";
$tdatatvshowcounts[".listFields"][] = "totalCount";
$tdatatvshowcounts[".listFields"][] = "watchedcount";
$tdatatvshowcounts[".listFields"][] = "totalSeasons";
$tdatatvshowcounts[".listFields"][] = "dateAdded";

$tdatatvshowcounts[".viewFields"] = array();
$tdatatvshowcounts[".viewFields"][] = "idShow";
$tdatatvshowcounts[".viewFields"][] = "lastPlayed";
$tdatatvshowcounts[".viewFields"][] = "totalCount";
$tdatatvshowcounts[".viewFields"][] = "watchedcount";
$tdatatvshowcounts[".viewFields"][] = "totalSeasons";
$tdatatvshowcounts[".viewFields"][] = "dateAdded";

$tdatatvshowcounts[".addFields"] = array();
$tdatatvshowcounts[".addFields"][] = "idShow";
$tdatatvshowcounts[".addFields"][] = "lastPlayed";
$tdatatvshowcounts[".addFields"][] = "totalCount";
$tdatatvshowcounts[".addFields"][] = "watchedcount";
$tdatatvshowcounts[".addFields"][] = "totalSeasons";
$tdatatvshowcounts[".addFields"][] = "dateAdded";

$tdatatvshowcounts[".inlineAddFields"] = array();
$tdatatvshowcounts[".inlineAddFields"][] = "idShow";
$tdatatvshowcounts[".inlineAddFields"][] = "lastPlayed";
$tdatatvshowcounts[".inlineAddFields"][] = "totalCount";
$tdatatvshowcounts[".inlineAddFields"][] = "watchedcount";
$tdatatvshowcounts[".inlineAddFields"][] = "totalSeasons";
$tdatatvshowcounts[".inlineAddFields"][] = "dateAdded";

$tdatatvshowcounts[".editFields"] = array();
$tdatatvshowcounts[".editFields"][] = "idShow";
$tdatatvshowcounts[".editFields"][] = "lastPlayed";
$tdatatvshowcounts[".editFields"][] = "totalCount";
$tdatatvshowcounts[".editFields"][] = "watchedcount";
$tdatatvshowcounts[".editFields"][] = "totalSeasons";
$tdatatvshowcounts[".editFields"][] = "dateAdded";

$tdatatvshowcounts[".inlineEditFields"] = array();
$tdatatvshowcounts[".inlineEditFields"][] = "idShow";
$tdatatvshowcounts[".inlineEditFields"][] = "lastPlayed";
$tdatatvshowcounts[".inlineEditFields"][] = "totalCount";
$tdatatvshowcounts[".inlineEditFields"][] = "watchedcount";
$tdatatvshowcounts[".inlineEditFields"][] = "totalSeasons";
$tdatatvshowcounts[".inlineEditFields"][] = "dateAdded";

$tdatatvshowcounts[".exportFields"] = array();
$tdatatvshowcounts[".exportFields"][] = "idShow";
$tdatatvshowcounts[".exportFields"][] = "lastPlayed";
$tdatatvshowcounts[".exportFields"][] = "totalCount";
$tdatatvshowcounts[".exportFields"][] = "watchedcount";
$tdatatvshowcounts[".exportFields"][] = "totalSeasons";
$tdatatvshowcounts[".exportFields"][] = "dateAdded";

$tdatatvshowcounts[".printFields"] = array();
$tdatatvshowcounts[".printFields"][] = "idShow";
$tdatatvshowcounts[".printFields"][] = "lastPlayed";
$tdatatvshowcounts[".printFields"][] = "totalCount";
$tdatatvshowcounts[".printFields"][] = "watchedcount";
$tdatatvshowcounts[".printFields"][] = "totalSeasons";
$tdatatvshowcounts[".printFields"][] = "dateAdded";

//	idShow
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idShow";
	$fdata["GoodName"] = "idShow";
	$fdata["ownerTable"] = "tvshowcounts";
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
	
		
		
	$tdatatvshowcounts["idShow"] = $fdata;
//	lastPlayed
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "lastPlayed";
	$fdata["GoodName"] = "lastPlayed";
	$fdata["ownerTable"] = "tvshowcounts";
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
	
		
		
	$tdatatvshowcounts["lastPlayed"] = $fdata;
//	totalCount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "totalCount";
	$fdata["GoodName"] = "totalCount";
	$fdata["ownerTable"] = "tvshowcounts";
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
	
		
		
	$tdatatvshowcounts["totalCount"] = $fdata;
//	watchedcount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "watchedcount";
	$fdata["GoodName"] = "watchedcount";
	$fdata["ownerTable"] = "tvshowcounts";
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
	
		
		
	$tdatatvshowcounts["watchedcount"] = $fdata;
//	totalSeasons
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "totalSeasons";
	$fdata["GoodName"] = "totalSeasons";
	$fdata["ownerTable"] = "tvshowcounts";
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
	
		
		
	$tdatatvshowcounts["totalSeasons"] = $fdata;
//	dateAdded
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "dateAdded";
	$fdata["GoodName"] = "dateAdded";
	$fdata["ownerTable"] = "tvshowcounts";
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
	
		
		
	$tdatatvshowcounts["dateAdded"] = $fdata;

	
$tables_data["tvshowcounts"]=&$tdatatvshowcounts;
$field_labels["tvshowcounts"] = &$fieldLabelstvshowcounts;
$fieldToolTips["tvshowcounts"] = &$fieldToolTipstvshowcounts;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tvshowcounts"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["tvshowcounts"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_tvshowcounts()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "idShow,   lastPlayed,   totalCount,   watchedcount,   totalSeasons,   dateAdded";
$proto0["m_strFrom"] = "FROM tvshowcounts";
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
	"m_strTable" => "tvshowcounts"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "lastPlayed",
	"m_strTable" => "tvshowcounts"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "totalCount",
	"m_strTable" => "tvshowcounts"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "watchedcount",
	"m_strTable" => "tvshowcounts"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "totalSeasons",
	"m_strTable" => "tvshowcounts"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "dateAdded",
	"m_strTable" => "tvshowcounts"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto17=array();
$proto17["m_link"] = "SQLL_MAIN";
			$proto18=array();
$proto18["m_strName"] = "tvshowcounts";
$proto18["m_columns"] = array();
$proto18["m_columns"][] = "idShow";
$proto18["m_columns"][] = "lastPlayed";
$proto18["m_columns"][] = "totalCount";
$proto18["m_columns"][] = "watchedcount";
$proto18["m_columns"][] = "totalSeasons";
$proto18["m_columns"][] = "dateAdded";
$obj = new SQLTable($proto18);

$proto17["m_table"] = $obj;
$proto17["m_alias"] = "";
$proto19=array();
$proto19["m_sql"] = "";
$proto19["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto19["m_column"]=$obj;
$proto19["m_contained"] = array();
$proto19["m_strCase"] = "";
$proto19["m_havingmode"] = "0";
$proto19["m_inBrackets"] = "0";
$proto19["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto19);

$proto17["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto17);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tvshowcounts = createSqlQuery_tvshowcounts();
						$tdatatvshowcounts[".sqlquery"] = $queryData_tvshowcounts;

$tableEvents["tvshowcounts"] = new eventsBase;
$tdatatvshowcounts[".hasEvents"] = false;

$cipherer = new RunnerCipherer("tvshowcounts");

?>