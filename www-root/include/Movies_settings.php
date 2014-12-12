<?php
require_once(getabspath("classes/cipherer.php"));
$tdataMovies = array();
	$tdataMovies[".NumberOfChars"] = 80; 
	$tdataMovies[".ShortName"] = "Movies";
	$tdataMovies[".OwnerID"] = "";
	$tdataMovies[".OriginalTable"] = "movie";

//	field labels
$fieldLabelsMovies = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsMovies["English"] = array();
	$fieldToolTipsMovies["English"] = array();
	$fieldLabelsMovies["English"]["idMovie"] = "Id Movie";
	$fieldToolTipsMovies["English"]["idMovie"] = "";
	$fieldLabelsMovies["English"]["idFile"] = "Id File";
	$fieldToolTipsMovies["English"]["idFile"] = "";
	$fieldLabelsMovies["English"]["c00"] = "Movie Name";
	$fieldToolTipsMovies["English"]["c00"] = "";
	$fieldLabelsMovies["English"]["c01"] = "Plot";
	$fieldToolTipsMovies["English"]["c01"] = "";
	$fieldLabelsMovies["English"]["c02"] = "Outline";
	$fieldToolTipsMovies["English"]["c02"] = "";
	$fieldLabelsMovies["English"]["c03"] = "Tagline";
	$fieldToolTipsMovies["English"]["c03"] = "";
	$fieldLabelsMovies["English"]["c04"] = "votes";
	$fieldToolTipsMovies["English"]["c04"] = "";
	$fieldLabelsMovies["English"]["c05"] = "Rating";
	$fieldToolTipsMovies["English"]["c05"] = "";
	$fieldLabelsMovies["English"]["c06"] = "Writers";
	$fieldToolTipsMovies["English"]["c06"] = "";
	$fieldLabelsMovies["English"]["c07"] = "Year";
	$fieldToolTipsMovies["English"]["c07"] = "";
	$fieldLabelsMovies["English"]["c08"] = "Thumbnails";
	$fieldToolTipsMovies["English"]["c08"] = "";
	$fieldLabelsMovies["English"]["c09"] = "Imdb ID";
	$fieldToolTipsMovies["English"]["c09"] = "";
	$fieldLabelsMovies["English"]["c10"] = "Sorting Title";
	$fieldToolTipsMovies["English"]["c10"] = "";
	$fieldLabelsMovies["English"]["c11"] = "Runtime";
	$fieldToolTipsMovies["English"]["c11"] = "";
	$fieldLabelsMovies["English"]["c12"] = "MPAA Rating";
	$fieldToolTipsMovies["English"]["c12"] = "";
	$fieldLabelsMovies["English"]["c13"] = "IMDB Rating";
	$fieldToolTipsMovies["English"]["c13"] = "";
	$fieldLabelsMovies["English"]["c14"] = "Genre";
	$fieldToolTipsMovies["English"]["c14"] = "";
	$fieldLabelsMovies["English"]["c15"] = "Director";
	$fieldToolTipsMovies["English"]["c15"] = "";
	$fieldLabelsMovies["English"]["c16"] = "Original Title";
	$fieldToolTipsMovies["English"]["c16"] = "";
	$fieldLabelsMovies["English"]["c17"] = "C17";
	$fieldToolTipsMovies["English"]["c17"] = "";
	$fieldLabelsMovies["English"]["c18"] = "Studio";
	$fieldToolTipsMovies["English"]["c18"] = "";
	$fieldLabelsMovies["English"]["c19"] = "Trailer";
	$fieldToolTipsMovies["English"]["c19"] = "";
	$fieldLabelsMovies["English"]["c20"] = "FanArt";
	$fieldToolTipsMovies["English"]["c20"] = "";
	$fieldLabelsMovies["English"]["c21"] = "Country";
	$fieldToolTipsMovies["English"]["c21"] = "";
	$fieldLabelsMovies["English"]["c22"] = "Path";
	$fieldToolTipsMovies["English"]["c22"] = "";
	$fieldLabelsMovies["English"]["c23"] = "Pathid";
	$fieldToolTipsMovies["English"]["c23"] = "";
	$fieldLabelsMovies["English"]["idSet"] = "Id Set";
	$fieldToolTipsMovies["English"]["idSet"] = "";
	$fieldLabelsMovies["English"]["strFilename"] = "Str Filename";
	$fieldToolTipsMovies["English"]["strFilename"] = "";
	$fieldLabelsMovies["English"]["idPath"] = "Id Path";
	$fieldToolTipsMovies["English"]["idPath"] = "";
	$fieldLabelsMovies["English"]["dateAdded"] = "Date Added";
	$fieldToolTipsMovies["English"]["dateAdded"] = "";
	$fieldLabelsMovies["English"]["strPath"] = "Str Path";
	$fieldToolTipsMovies["English"]["strPath"] = "";
	$fieldLabelsMovies["English"]["strGenre"] = "Str Genre";
	$fieldToolTipsMovies["English"]["strGenre"] = "";
	$fieldLabelsMovies["English"]["idGenre"] = "Id Genre";
	$fieldToolTipsMovies["English"]["idGenre"] = "";
	$fieldLabelsMovies["English"]["strSet"] = "Str Set";
	$fieldToolTipsMovies["English"]["strSet"] = "";
	$fieldLabelsMovies["English"]["idSet1"] = "Id Set1";
	$fieldToolTipsMovies["English"]["idSet1"] = "";
	$fieldLabelsMovies["English"]["idMovie1"] = "Id Movie1";
	$fieldToolTipsMovies["English"]["idMovie1"] = "";
	$fieldLabelsMovies["English"]["idGenre1"] = "Id Genre1";
	$fieldToolTipsMovies["English"]["idGenre1"] = "";
	$fieldLabelsMovies["English"]["strTag"] = "Str Tag";
	$fieldToolTipsMovies["English"]["strTag"] = "";
	$fieldLabelsMovies["English"]["idTag"] = "Id Tag";
	$fieldToolTipsMovies["English"]["idTag"] = "";
	if (count($fieldToolTipsMovies["English"]))
		$tdataMovies[".isUseToolTips"] = true;
}
	
	
	$tdataMovies[".NCSearch"] = true;



$tdataMovies[".shortTableName"] = "Movies";
$tdataMovies[".nSecOptions"] = 0;
$tdataMovies[".recsPerRowList"] = 1;
$tdataMovies[".mainTableOwnerID"] = "";
$tdataMovies[".moveNext"] = 1;
$tdataMovies[".nType"] = 1;

$tdataMovies[".strOriginalTableName"] = "movie";




$tdataMovies[".showAddInPopup"] = false;

$tdataMovies[".showEditInPopup"] = false;

$tdataMovies[".showViewInPopup"] = false;

$tdataMovies[".fieldsForRegister"] = array();

$tdataMovies[".listAjax"] = false;

	$tdataMovies[".audit"] = false;

	$tdataMovies[".locking"] = false;

$tdataMovies[".listIcons"] = true;
$tdataMovies[".edit"] = true;
$tdataMovies[".inlineEdit"] = true;
$tdataMovies[".inlineAdd"] = true;
$tdataMovies[".view"] = true;

$tdataMovies[".exportTo"] = true;

$tdataMovies[".printFriendly"] = true;

$tdataMovies[".delete"] = true;

$tdataMovies[".showSimpleSearchOptions"] = false;

$tdataMovies[".showSearchPanel"] = true;

if (isMobile())
	$tdataMovies[".isUseAjaxSuggest"] = false;
else 
	$tdataMovies[".isUseAjaxSuggest"] = true;

$tdataMovies[".rowHighlite"] = true;

// button handlers file names

$tdataMovies[".addPageEvents"] = false;

// use timepicker for search panel
$tdataMovies[".isUseTimeForSearch"] = false;




$tdataMovies[".allSearchFields"] = array();

$tdataMovies[".allSearchFields"][] = "idMovie";
$tdataMovies[".allSearchFields"][] = "idFile";
$tdataMovies[".allSearchFields"][] = "c00";
$tdataMovies[".allSearchFields"][] = "c01";
$tdataMovies[".allSearchFields"][] = "c02";
$tdataMovies[".allSearchFields"][] = "c03";
$tdataMovies[".allSearchFields"][] = "c04";
$tdataMovies[".allSearchFields"][] = "c05";
$tdataMovies[".allSearchFields"][] = "c06";
$tdataMovies[".allSearchFields"][] = "c07";
$tdataMovies[".allSearchFields"][] = "c08";
$tdataMovies[".allSearchFields"][] = "c09";
$tdataMovies[".allSearchFields"][] = "c10";
$tdataMovies[".allSearchFields"][] = "c11";
$tdataMovies[".allSearchFields"][] = "c12";
$tdataMovies[".allSearchFields"][] = "c13";
$tdataMovies[".allSearchFields"][] = "c14";
$tdataMovies[".allSearchFields"][] = "c15";
$tdataMovies[".allSearchFields"][] = "c16";
$tdataMovies[".allSearchFields"][] = "c18";
$tdataMovies[".allSearchFields"][] = "c19";
$tdataMovies[".allSearchFields"][] = "c20";
$tdataMovies[".allSearchFields"][] = "c21";
$tdataMovies[".allSearchFields"][] = "c22";
$tdataMovies[".allSearchFields"][] = "c23";
$tdataMovies[".allSearchFields"][] = "idSet";
$tdataMovies[".allSearchFields"][] = "strFilename";
$tdataMovies[".allSearchFields"][] = "idPath";
$tdataMovies[".allSearchFields"][] = "dateAdded";
$tdataMovies[".allSearchFields"][] = "strPath";
$tdataMovies[".allSearchFields"][] = "strGenre";
$tdataMovies[".allSearchFields"][] = "idGenre";
$tdataMovies[".allSearchFields"][] = "strSet";
$tdataMovies[".allSearchFields"][] = "idSet1";
$tdataMovies[".allSearchFields"][] = "strTag";
$tdataMovies[".allSearchFields"][] = "idTag";

$tdataMovies[".googleLikeFields"][] = "idMovie";
$tdataMovies[".googleLikeFields"][] = "idFile";
$tdataMovies[".googleLikeFields"][] = "c00";
$tdataMovies[".googleLikeFields"][] = "c01";
$tdataMovies[".googleLikeFields"][] = "c02";
$tdataMovies[".googleLikeFields"][] = "c03";
$tdataMovies[".googleLikeFields"][] = "c04";
$tdataMovies[".googleLikeFields"][] = "c05";
$tdataMovies[".googleLikeFields"][] = "c06";
$tdataMovies[".googleLikeFields"][] = "c07";
$tdataMovies[".googleLikeFields"][] = "c08";
$tdataMovies[".googleLikeFields"][] = "c09";
$tdataMovies[".googleLikeFields"][] = "c10";
$tdataMovies[".googleLikeFields"][] = "c11";
$tdataMovies[".googleLikeFields"][] = "c12";
$tdataMovies[".googleLikeFields"][] = "c13";
$tdataMovies[".googleLikeFields"][] = "c14";
$tdataMovies[".googleLikeFields"][] = "c15";
$tdataMovies[".googleLikeFields"][] = "c16";
$tdataMovies[".googleLikeFields"][] = "c17";
$tdataMovies[".googleLikeFields"][] = "c18";
$tdataMovies[".googleLikeFields"][] = "c19";
$tdataMovies[".googleLikeFields"][] = "c20";
$tdataMovies[".googleLikeFields"][] = "c21";
$tdataMovies[".googleLikeFields"][] = "c22";
$tdataMovies[".googleLikeFields"][] = "c23";
$tdataMovies[".googleLikeFields"][] = "idSet";
$tdataMovies[".googleLikeFields"][] = "strFilename";
$tdataMovies[".googleLikeFields"][] = "idPath";
$tdataMovies[".googleLikeFields"][] = "dateAdded";
$tdataMovies[".googleLikeFields"][] = "strPath";
$tdataMovies[".googleLikeFields"][] = "strGenre";
$tdataMovies[".googleLikeFields"][] = "idGenre";
$tdataMovies[".googleLikeFields"][] = "strSet";
$tdataMovies[".googleLikeFields"][] = "idSet1";
$tdataMovies[".googleLikeFields"][] = "idMovie1";
$tdataMovies[".googleLikeFields"][] = "idGenre1";
$tdataMovies[".googleLikeFields"][] = "strTag";
$tdataMovies[".googleLikeFields"][] = "idTag";


$tdataMovies[".advSearchFields"][] = "idMovie";
$tdataMovies[".advSearchFields"][] = "idFile";
$tdataMovies[".advSearchFields"][] = "c00";
$tdataMovies[".advSearchFields"][] = "c01";
$tdataMovies[".advSearchFields"][] = "c02";
$tdataMovies[".advSearchFields"][] = "c03";
$tdataMovies[".advSearchFields"][] = "c04";
$tdataMovies[".advSearchFields"][] = "c05";
$tdataMovies[".advSearchFields"][] = "c06";
$tdataMovies[".advSearchFields"][] = "c07";
$tdataMovies[".advSearchFields"][] = "c08";
$tdataMovies[".advSearchFields"][] = "c09";
$tdataMovies[".advSearchFields"][] = "c10";
$tdataMovies[".advSearchFields"][] = "c11";
$tdataMovies[".advSearchFields"][] = "c12";
$tdataMovies[".advSearchFields"][] = "c13";
$tdataMovies[".advSearchFields"][] = "c14";
$tdataMovies[".advSearchFields"][] = "c15";
$tdataMovies[".advSearchFields"][] = "c16";
$tdataMovies[".advSearchFields"][] = "c18";
$tdataMovies[".advSearchFields"][] = "c19";
$tdataMovies[".advSearchFields"][] = "c20";
$tdataMovies[".advSearchFields"][] = "c21";
$tdataMovies[".advSearchFields"][] = "c22";
$tdataMovies[".advSearchFields"][] = "c23";
$tdataMovies[".advSearchFields"][] = "idSet";
$tdataMovies[".advSearchFields"][] = "strFilename";
$tdataMovies[".advSearchFields"][] = "idPath";
$tdataMovies[".advSearchFields"][] = "dateAdded";
$tdataMovies[".advSearchFields"][] = "strPath";
$tdataMovies[".advSearchFields"][] = "strGenre";
$tdataMovies[".advSearchFields"][] = "idGenre";
$tdataMovies[".advSearchFields"][] = "strSet";
$tdataMovies[".advSearchFields"][] = "idSet1";
$tdataMovies[".advSearchFields"][] = "strTag";
$tdataMovies[".advSearchFields"][] = "idTag";

$tdataMovies[".isTableType"] = "list";

	

$tdataMovies[".isDisplayLoading"] = true;


// Access doesn't support subqueries from the same table as main



$tdataMovies[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataMovies[".strOrderBy"] = $tstrOrderBy;

$tdataMovies[".orderindexes"] = array();

$tdataMovies[".sqlHead"] = "SELECT movie.idMovie,  movie.idFile,  movie.c00,  movie.c01,  movie.c02,  movie.c03,  movie.c04,  movie.c05,  movie.c06,  movie.c07,  movie.c08,  movie.c09,  movie.c10,  movie.c11,  movie.c12,  movie.c13,  movie.c14,  movie.c15,  movie.c16,  movie.c17,  movie.c18,  movie.c19,  movie.c20,  movie.c21,  movie.c22,  movie.c23,  movie.idSet,  files.strFilename,  files.idPath,  files.dateAdded,  \"path\".strPath,  genre.strGenre,  genre.idGenre,  \"sets\".strSet,  \"sets\".idSet AS idSet1,  genrelinkmovie.idMovie AS idMovie1,  genrelinkmovie.idGenre AS idGenre1,  tag.strTag,  tag.idTag";
$tdataMovies[".sqlFrom"] = "FROM movie  , files  , \"path\"  , genre  , \"sets\"  , genrelinkmovie  , tag";
$tdataMovies[".sqlWhereExpr"] = "";
$tdataMovies[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataMovies[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataMovies[".arrGroupsPerPage"] = $arrGPP;

$tableKeysMovies = array();
$tableKeysMovies[] = "idMovie";
$tdataMovies[".Keys"] = $tableKeysMovies;

$tdataMovies[".listFields"] = array();
$tdataMovies[".listFields"][] = "idTag";
$tdataMovies[".listFields"][] = "idSet1";
$tdataMovies[".listFields"][] = "strSet";
$tdataMovies[".listFields"][] = "idGenre";
$tdataMovies[".listFields"][] = "strGenre";
$tdataMovies[".listFields"][] = "strPath";
$tdataMovies[".listFields"][] = "dateAdded";
$tdataMovies[".listFields"][] = "idPath";
$tdataMovies[".listFields"][] = "strFilename";
$tdataMovies[".listFields"][] = "strTag";
$tdataMovies[".listFields"][] = "idMovie";
$tdataMovies[".listFields"][] = "idFile";
$tdataMovies[".listFields"][] = "c00";
$tdataMovies[".listFields"][] = "c01";
$tdataMovies[".listFields"][] = "c02";
$tdataMovies[".listFields"][] = "c03";
$tdataMovies[".listFields"][] = "c04";
$tdataMovies[".listFields"][] = "c05";
$tdataMovies[".listFields"][] = "c06";
$tdataMovies[".listFields"][] = "c07";
$tdataMovies[".listFields"][] = "c08";
$tdataMovies[".listFields"][] = "c09";
$tdataMovies[".listFields"][] = "c10";
$tdataMovies[".listFields"][] = "c11";
$tdataMovies[".listFields"][] = "c12";
$tdataMovies[".listFields"][] = "c13";
$tdataMovies[".listFields"][] = "c14";
$tdataMovies[".listFields"][] = "c15";
$tdataMovies[".listFields"][] = "c16";
$tdataMovies[".listFields"][] = "c18";
$tdataMovies[".listFields"][] = "c19";
$tdataMovies[".listFields"][] = "c20";
$tdataMovies[".listFields"][] = "c21";
$tdataMovies[".listFields"][] = "c22";
$tdataMovies[".listFields"][] = "c23";
$tdataMovies[".listFields"][] = "idSet";

$tdataMovies[".viewFields"] = array();
$tdataMovies[".viewFields"][] = "idMovie";
$tdataMovies[".viewFields"][] = "idFile";
$tdataMovies[".viewFields"][] = "c00";
$tdataMovies[".viewFields"][] = "c01";
$tdataMovies[".viewFields"][] = "c02";
$tdataMovies[".viewFields"][] = "c03";
$tdataMovies[".viewFields"][] = "c04";
$tdataMovies[".viewFields"][] = "c05";
$tdataMovies[".viewFields"][] = "c06";
$tdataMovies[".viewFields"][] = "c07";
$tdataMovies[".viewFields"][] = "c08";
$tdataMovies[".viewFields"][] = "c09";
$tdataMovies[".viewFields"][] = "c10";
$tdataMovies[".viewFields"][] = "c11";
$tdataMovies[".viewFields"][] = "c12";
$tdataMovies[".viewFields"][] = "c13";
$tdataMovies[".viewFields"][] = "c14";
$tdataMovies[".viewFields"][] = "c15";
$tdataMovies[".viewFields"][] = "c16";
$tdataMovies[".viewFields"][] = "c18";
$tdataMovies[".viewFields"][] = "c19";
$tdataMovies[".viewFields"][] = "c20";
$tdataMovies[".viewFields"][] = "c21";
$tdataMovies[".viewFields"][] = "c22";
$tdataMovies[".viewFields"][] = "c23";
$tdataMovies[".viewFields"][] = "idSet";
$tdataMovies[".viewFields"][] = "strFilename";
$tdataMovies[".viewFields"][] = "idPath";
$tdataMovies[".viewFields"][] = "dateAdded";
$tdataMovies[".viewFields"][] = "strPath";
$tdataMovies[".viewFields"][] = "strGenre";
$tdataMovies[".viewFields"][] = "idGenre";
$tdataMovies[".viewFields"][] = "strSet";
$tdataMovies[".viewFields"][] = "idSet1";
$tdataMovies[".viewFields"][] = "strTag";
$tdataMovies[".viewFields"][] = "idTag";

$tdataMovies[".addFields"] = array();
$tdataMovies[".addFields"][] = "idMovie";
$tdataMovies[".addFields"][] = "idFile";
$tdataMovies[".addFields"][] = "c00";
$tdataMovies[".addFields"][] = "c01";
$tdataMovies[".addFields"][] = "c02";
$tdataMovies[".addFields"][] = "c03";
$tdataMovies[".addFields"][] = "c04";
$tdataMovies[".addFields"][] = "c05";
$tdataMovies[".addFields"][] = "c06";
$tdataMovies[".addFields"][] = "c07";
$tdataMovies[".addFields"][] = "c08";
$tdataMovies[".addFields"][] = "c09";
$tdataMovies[".addFields"][] = "c10";
$tdataMovies[".addFields"][] = "c11";
$tdataMovies[".addFields"][] = "c12";
$tdataMovies[".addFields"][] = "c13";
$tdataMovies[".addFields"][] = "c14";
$tdataMovies[".addFields"][] = "c15";
$tdataMovies[".addFields"][] = "c16";
$tdataMovies[".addFields"][] = "c18";
$tdataMovies[".addFields"][] = "c19";
$tdataMovies[".addFields"][] = "c20";
$tdataMovies[".addFields"][] = "c21";
$tdataMovies[".addFields"][] = "c22";
$tdataMovies[".addFields"][] = "c23";
$tdataMovies[".addFields"][] = "idSet";
$tdataMovies[".addFields"][] = "strFilename";
$tdataMovies[".addFields"][] = "idPath";
$tdataMovies[".addFields"][] = "dateAdded";
$tdataMovies[".addFields"][] = "strPath";
$tdataMovies[".addFields"][] = "strGenre";
$tdataMovies[".addFields"][] = "idGenre";
$tdataMovies[".addFields"][] = "strSet";
$tdataMovies[".addFields"][] = "idSet1";
$tdataMovies[".addFields"][] = "strTag";
$tdataMovies[".addFields"][] = "idTag";

$tdataMovies[".inlineAddFields"] = array();
$tdataMovies[".inlineAddFields"][] = "idTag";
$tdataMovies[".inlineAddFields"][] = "idSet1";
$tdataMovies[".inlineAddFields"][] = "strSet";
$tdataMovies[".inlineAddFields"][] = "idGenre";
$tdataMovies[".inlineAddFields"][] = "strGenre";
$tdataMovies[".inlineAddFields"][] = "strPath";
$tdataMovies[".inlineAddFields"][] = "dateAdded";
$tdataMovies[".inlineAddFields"][] = "idPath";
$tdataMovies[".inlineAddFields"][] = "strFilename";
$tdataMovies[".inlineAddFields"][] = "strTag";
$tdataMovies[".inlineAddFields"][] = "idMovie";
$tdataMovies[".inlineAddFields"][] = "idFile";
$tdataMovies[".inlineAddFields"][] = "c00";
$tdataMovies[".inlineAddFields"][] = "c01";
$tdataMovies[".inlineAddFields"][] = "c02";
$tdataMovies[".inlineAddFields"][] = "c03";
$tdataMovies[".inlineAddFields"][] = "c04";
$tdataMovies[".inlineAddFields"][] = "c05";
$tdataMovies[".inlineAddFields"][] = "c06";
$tdataMovies[".inlineAddFields"][] = "c07";
$tdataMovies[".inlineAddFields"][] = "c08";
$tdataMovies[".inlineAddFields"][] = "c09";
$tdataMovies[".inlineAddFields"][] = "c10";
$tdataMovies[".inlineAddFields"][] = "c11";
$tdataMovies[".inlineAddFields"][] = "c12";
$tdataMovies[".inlineAddFields"][] = "c13";
$tdataMovies[".inlineAddFields"][] = "c14";
$tdataMovies[".inlineAddFields"][] = "c15";
$tdataMovies[".inlineAddFields"][] = "c16";
$tdataMovies[".inlineAddFields"][] = "c18";
$tdataMovies[".inlineAddFields"][] = "c19";
$tdataMovies[".inlineAddFields"][] = "c20";
$tdataMovies[".inlineAddFields"][] = "c21";
$tdataMovies[".inlineAddFields"][] = "c22";
$tdataMovies[".inlineAddFields"][] = "c23";
$tdataMovies[".inlineAddFields"][] = "idSet";

$tdataMovies[".editFields"] = array();
$tdataMovies[".editFields"][] = "idMovie";
$tdataMovies[".editFields"][] = "idFile";
$tdataMovies[".editFields"][] = "c00";
$tdataMovies[".editFields"][] = "c01";
$tdataMovies[".editFields"][] = "c02";
$tdataMovies[".editFields"][] = "c03";
$tdataMovies[".editFields"][] = "c04";
$tdataMovies[".editFields"][] = "c05";
$tdataMovies[".editFields"][] = "c06";
$tdataMovies[".editFields"][] = "c07";
$tdataMovies[".editFields"][] = "c08";
$tdataMovies[".editFields"][] = "c09";
$tdataMovies[".editFields"][] = "c10";
$tdataMovies[".editFields"][] = "c11";
$tdataMovies[".editFields"][] = "c12";
$tdataMovies[".editFields"][] = "c13";
$tdataMovies[".editFields"][] = "c14";
$tdataMovies[".editFields"][] = "c15";
$tdataMovies[".editFields"][] = "c16";
$tdataMovies[".editFields"][] = "c18";
$tdataMovies[".editFields"][] = "c19";
$tdataMovies[".editFields"][] = "c20";
$tdataMovies[".editFields"][] = "c21";
$tdataMovies[".editFields"][] = "c22";
$tdataMovies[".editFields"][] = "c23";
$tdataMovies[".editFields"][] = "idSet";
$tdataMovies[".editFields"][] = "strFilename";
$tdataMovies[".editFields"][] = "idPath";
$tdataMovies[".editFields"][] = "dateAdded";
$tdataMovies[".editFields"][] = "strPath";
$tdataMovies[".editFields"][] = "strGenre";
$tdataMovies[".editFields"][] = "idGenre";
$tdataMovies[".editFields"][] = "strSet";
$tdataMovies[".editFields"][] = "idSet1";
$tdataMovies[".editFields"][] = "strTag";
$tdataMovies[".editFields"][] = "idTag";

$tdataMovies[".inlineEditFields"] = array();
$tdataMovies[".inlineEditFields"][] = "idTag";
$tdataMovies[".inlineEditFields"][] = "idSet1";
$tdataMovies[".inlineEditFields"][] = "strSet";
$tdataMovies[".inlineEditFields"][] = "idGenre";
$tdataMovies[".inlineEditFields"][] = "strGenre";
$tdataMovies[".inlineEditFields"][] = "strPath";
$tdataMovies[".inlineEditFields"][] = "dateAdded";
$tdataMovies[".inlineEditFields"][] = "idPath";
$tdataMovies[".inlineEditFields"][] = "strFilename";
$tdataMovies[".inlineEditFields"][] = "strTag";
$tdataMovies[".inlineEditFields"][] = "idMovie";
$tdataMovies[".inlineEditFields"][] = "idFile";
$tdataMovies[".inlineEditFields"][] = "c00";
$tdataMovies[".inlineEditFields"][] = "c01";
$tdataMovies[".inlineEditFields"][] = "c02";
$tdataMovies[".inlineEditFields"][] = "c03";
$tdataMovies[".inlineEditFields"][] = "c04";
$tdataMovies[".inlineEditFields"][] = "c05";
$tdataMovies[".inlineEditFields"][] = "c06";
$tdataMovies[".inlineEditFields"][] = "c07";
$tdataMovies[".inlineEditFields"][] = "c08";
$tdataMovies[".inlineEditFields"][] = "c09";
$tdataMovies[".inlineEditFields"][] = "c10";
$tdataMovies[".inlineEditFields"][] = "c11";
$tdataMovies[".inlineEditFields"][] = "c12";
$tdataMovies[".inlineEditFields"][] = "c13";
$tdataMovies[".inlineEditFields"][] = "c14";
$tdataMovies[".inlineEditFields"][] = "c15";
$tdataMovies[".inlineEditFields"][] = "c16";
$tdataMovies[".inlineEditFields"][] = "c18";
$tdataMovies[".inlineEditFields"][] = "c19";
$tdataMovies[".inlineEditFields"][] = "c20";
$tdataMovies[".inlineEditFields"][] = "c21";
$tdataMovies[".inlineEditFields"][] = "c22";
$tdataMovies[".inlineEditFields"][] = "c23";
$tdataMovies[".inlineEditFields"][] = "idSet";

$tdataMovies[".exportFields"] = array();
$tdataMovies[".exportFields"][] = "idMovie";
$tdataMovies[".exportFields"][] = "idFile";
$tdataMovies[".exportFields"][] = "c00";
$tdataMovies[".exportFields"][] = "c01";
$tdataMovies[".exportFields"][] = "c02";
$tdataMovies[".exportFields"][] = "c03";
$tdataMovies[".exportFields"][] = "c04";
$tdataMovies[".exportFields"][] = "c05";
$tdataMovies[".exportFields"][] = "c06";
$tdataMovies[".exportFields"][] = "c07";
$tdataMovies[".exportFields"][] = "c08";
$tdataMovies[".exportFields"][] = "c09";
$tdataMovies[".exportFields"][] = "c10";
$tdataMovies[".exportFields"][] = "c11";
$tdataMovies[".exportFields"][] = "c12";
$tdataMovies[".exportFields"][] = "c13";
$tdataMovies[".exportFields"][] = "c14";
$tdataMovies[".exportFields"][] = "c15";
$tdataMovies[".exportFields"][] = "c16";
$tdataMovies[".exportFields"][] = "c18";
$tdataMovies[".exportFields"][] = "c19";
$tdataMovies[".exportFields"][] = "c20";
$tdataMovies[".exportFields"][] = "c21";
$tdataMovies[".exportFields"][] = "c22";
$tdataMovies[".exportFields"][] = "c23";
$tdataMovies[".exportFields"][] = "idSet";
$tdataMovies[".exportFields"][] = "strFilename";
$tdataMovies[".exportFields"][] = "idPath";
$tdataMovies[".exportFields"][] = "dateAdded";
$tdataMovies[".exportFields"][] = "strPath";
$tdataMovies[".exportFields"][] = "strGenre";
$tdataMovies[".exportFields"][] = "idGenre";
$tdataMovies[".exportFields"][] = "strSet";
$tdataMovies[".exportFields"][] = "idSet1";
$tdataMovies[".exportFields"][] = "strTag";
$tdataMovies[".exportFields"][] = "idTag";

$tdataMovies[".printFields"] = array();
$tdataMovies[".printFields"][] = "idMovie";
$tdataMovies[".printFields"][] = "idFile";
$tdataMovies[".printFields"][] = "c00";
$tdataMovies[".printFields"][] = "c01";
$tdataMovies[".printFields"][] = "c02";
$tdataMovies[".printFields"][] = "c03";
$tdataMovies[".printFields"][] = "c04";
$tdataMovies[".printFields"][] = "c05";
$tdataMovies[".printFields"][] = "c06";
$tdataMovies[".printFields"][] = "c07";
$tdataMovies[".printFields"][] = "c08";
$tdataMovies[".printFields"][] = "c09";
$tdataMovies[".printFields"][] = "c10";
$tdataMovies[".printFields"][] = "c11";
$tdataMovies[".printFields"][] = "c12";
$tdataMovies[".printFields"][] = "c13";
$tdataMovies[".printFields"][] = "c14";
$tdataMovies[".printFields"][] = "c15";
$tdataMovies[".printFields"][] = "c16";
$tdataMovies[".printFields"][] = "c18";
$tdataMovies[".printFields"][] = "c19";
$tdataMovies[".printFields"][] = "c20";
$tdataMovies[".printFields"][] = "c21";
$tdataMovies[".printFields"][] = "c22";
$tdataMovies[".printFields"][] = "c23";
$tdataMovies[".printFields"][] = "idSet";
$tdataMovies[".printFields"][] = "strFilename";
$tdataMovies[".printFields"][] = "idPath";
$tdataMovies[".printFields"][] = "dateAdded";
$tdataMovies[".printFields"][] = "strPath";
$tdataMovies[".printFields"][] = "strGenre";
$tdataMovies[".printFields"][] = "idGenre";
$tdataMovies[".printFields"][] = "strSet";
$tdataMovies[".printFields"][] = "idSet1";
$tdataMovies[".printFields"][] = "strTag";
$tdataMovies[".printFields"][] = "idTag";

//	idMovie
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idMovie";
	$fdata["GoodName"] = "idMovie";
	$fdata["ownerTable"] = "movie";
	$fdata["Label"] = "Id Movie"; 
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
	
		$fdata["strField"] = "idMovie"; 
		$fdata["FullName"] = "movie.idMovie";
	
		
		
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataMovies["idMovie"] = $fdata;
//	idFile
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "idFile";
	$fdata["GoodName"] = "idFile";
	$fdata["ownerTable"] = "movie";
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
		$fdata["FullName"] = "movie.idFile";
	
		
		
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataMovies["idFile"] = $fdata;
//	c00
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "c00";
	$fdata["GoodName"] = "c00";
	$fdata["ownerTable"] = "movie";
	$fdata["Label"] = "Movie Name"; 
	$fdata["FieldType"] = 202;
	
		
		
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
		$fdata["FullName"] = "movie.c00";
	
		
		
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
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataMovies["c00"] = $fdata;
//	c01
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "c01";
	$fdata["GoodName"] = "c01";
	$fdata["ownerTable"] = "movie";
	$fdata["Label"] = "Plot"; 
	$fdata["FieldType"] = 202;
	
		
		
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
		$fdata["FullName"] = "movie.c01";
	
		
		
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
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataMovies["c01"] = $fdata;
//	c02
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "c02";
	$fdata["GoodName"] = "c02";
	$fdata["ownerTable"] = "movie";
	$fdata["Label"] = "Outline"; 
	$fdata["FieldType"] = 202;
	
		
		
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
		$fdata["FullName"] = "movie.c02";
	
		
		
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
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataMovies["c02"] = $fdata;
//	c03
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "c03";
	$fdata["GoodName"] = "c03";
	$fdata["ownerTable"] = "movie";
	$fdata["Label"] = "Tagline"; 
	$fdata["FieldType"] = 202;
	
		
		
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
		$fdata["FullName"] = "movie.c03";
	
		
		
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
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataMovies["c03"] = $fdata;
//	c04
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "c04";
	$fdata["GoodName"] = "c04";
	$fdata["ownerTable"] = "movie";
	$fdata["Label"] = "votes"; 
	$fdata["FieldType"] = 202;
	
		
		
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
		$fdata["FullName"] = "movie.c04";
	
		
		
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
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataMovies["c04"] = $fdata;
//	c05
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "c05";
	$fdata["GoodName"] = "c05";
	$fdata["ownerTable"] = "movie";
	$fdata["Label"] = "Rating"; 
	$fdata["FieldType"] = 202;
	
		
		
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
		$fdata["FullName"] = "movie.c05";
	
		
		
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
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataMovies["c05"] = $fdata;
//	c06
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "c06";
	$fdata["GoodName"] = "c06";
	$fdata["ownerTable"] = "movie";
	$fdata["Label"] = "Writers"; 
	$fdata["FieldType"] = 202;
	
		
		
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
		$fdata["FullName"] = "movie.c06";
	
		
		
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
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataMovies["c06"] = $fdata;
//	c07
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "c07";
	$fdata["GoodName"] = "c07";
	$fdata["ownerTable"] = "movie";
	$fdata["Label"] = "Year"; 
	$fdata["FieldType"] = 202;
	
		
		
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
		$fdata["FullName"] = "movie.c07";
	
		
		
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
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataMovies["c07"] = $fdata;
//	c08
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "c08";
	$fdata["GoodName"] = "c08";
	$fdata["ownerTable"] = "movie";
	$fdata["Label"] = "Thumbnails"; 
	$fdata["FieldType"] = 202;
	
		
		
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
		$fdata["FullName"] = "movie.c08";
	
		
		
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
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataMovies["c08"] = $fdata;
//	c09
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "c09";
	$fdata["GoodName"] = "c09";
	$fdata["ownerTable"] = "movie";
	$fdata["Label"] = "Imdb ID"; 
	$fdata["FieldType"] = 202;
	
		
		
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
		$fdata["FullName"] = "movie.c09";
	
		
		
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
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataMovies["c09"] = $fdata;
//	c10
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "c10";
	$fdata["GoodName"] = "c10";
	$fdata["ownerTable"] = "movie";
	$fdata["Label"] = "Sorting Title"; 
	$fdata["FieldType"] = 202;
	
		
		
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
		$fdata["FullName"] = "movie.c10";
	
		
		
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
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataMovies["c10"] = $fdata;
//	c11
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "c11";
	$fdata["GoodName"] = "c11";
	$fdata["ownerTable"] = "movie";
	$fdata["Label"] = "Runtime"; 
	$fdata["FieldType"] = 202;
	
		
		
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
		$fdata["FullName"] = "movie.c11";
	
		
		
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
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataMovies["c11"] = $fdata;
//	c12
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "c12";
	$fdata["GoodName"] = "c12";
	$fdata["ownerTable"] = "movie";
	$fdata["Label"] = "MPAA Rating"; 
	$fdata["FieldType"] = 202;
	
		
		
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
		$fdata["FullName"] = "movie.c12";
	
		
		
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
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataMovies["c12"] = $fdata;
//	c13
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "c13";
	$fdata["GoodName"] = "c13";
	$fdata["ownerTable"] = "movie";
	$fdata["Label"] = "IMDB Rating"; 
	$fdata["FieldType"] = 202;
	
		
		
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
		$fdata["FullName"] = "movie.c13";
	
		
		
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
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataMovies["c13"] = $fdata;
//	c14
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "c14";
	$fdata["GoodName"] = "c14";
	$fdata["ownerTable"] = "movie";
	$fdata["Label"] = "Genre"; 
	$fdata["FieldType"] = 202;
	
		
		
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
		$fdata["FullName"] = "movie.c14";
	
		
		
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
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataMovies["c14"] = $fdata;
//	c15
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "c15";
	$fdata["GoodName"] = "c15";
	$fdata["ownerTable"] = "movie";
	$fdata["Label"] = "Director"; 
	$fdata["FieldType"] = 202;
	
		
		
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
		$fdata["FullName"] = "movie.c15";
	
		
		
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
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataMovies["c15"] = $fdata;
//	c16
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "c16";
	$fdata["GoodName"] = "c16";
	$fdata["ownerTable"] = "movie";
	$fdata["Label"] = "Original Title"; 
	$fdata["FieldType"] = 202;
	
		
		
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
		$fdata["FullName"] = "movie.c16";
	
		
		
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
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataMovies["c16"] = $fdata;
//	c17
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "c17";
	$fdata["GoodName"] = "c17";
	$fdata["ownerTable"] = "movie";
	$fdata["Label"] = "C17"; 
	$fdata["FieldType"] = 202;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "c17"; 
		$fdata["FullName"] = "movie.c17";
	
		
		
				
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
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataMovies["c17"] = $fdata;
//	c18
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "c18";
	$fdata["GoodName"] = "c18";
	$fdata["ownerTable"] = "movie";
	$fdata["Label"] = "Studio"; 
	$fdata["FieldType"] = 202;
	
		
		
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
		$fdata["FullName"] = "movie.c18";
	
		
		
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
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataMovies["c18"] = $fdata;
//	c19
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "c19";
	$fdata["GoodName"] = "c19";
	$fdata["ownerTable"] = "movie";
	$fdata["Label"] = "Trailer"; 
	$fdata["FieldType"] = 202;
	
		
		
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
		$fdata["FullName"] = "movie.c19";
	
		
		
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
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataMovies["c19"] = $fdata;
//	c20
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "c20";
	$fdata["GoodName"] = "c20";
	$fdata["ownerTable"] = "movie";
	$fdata["Label"] = "FanArt"; 
	$fdata["FieldType"] = 202;
	
		
		
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
		$fdata["FullName"] = "movie.c20";
	
		
		
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
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataMovies["c20"] = $fdata;
//	c21
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "c21";
	$fdata["GoodName"] = "c21";
	$fdata["ownerTable"] = "movie";
	$fdata["Label"] = "Country"; 
	$fdata["FieldType"] = 202;
	
		
		
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
		$fdata["FullName"] = "movie.c21";
	
		
		
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
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataMovies["c21"] = $fdata;
//	c22
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "c22";
	$fdata["GoodName"] = "c22";
	$fdata["ownerTable"] = "movie";
	$fdata["Label"] = "Path"; 
	$fdata["FieldType"] = 202;
	
		
		
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
		$fdata["FullName"] = "movie.c22";
	
		
		
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
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataMovies["c22"] = $fdata;
//	c23
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "c23";
	$fdata["GoodName"] = "c23";
	$fdata["ownerTable"] = "movie";
	$fdata["Label"] = "Pathid"; 
	$fdata["FieldType"] = 202;
	
		
		
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
		$fdata["FullName"] = "movie.c23";
	
		
		
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
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataMovies["c23"] = $fdata;
//	idSet
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "idSet";
	$fdata["GoodName"] = "idSet";
	$fdata["ownerTable"] = "movie";
	$fdata["Label"] = "Id Set"; 
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
	
		$fdata["strField"] = "idSet"; 
		$fdata["FullName"] = "movie.idSet";
	
		
		
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataMovies["idSet"] = $fdata;
//	strFilename
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "strFilename";
	$fdata["GoodName"] = "strFilename";
	$fdata["ownerTable"] = "files";
	$fdata["Label"] = "Str Filename"; 
	$fdata["FieldType"] = 202;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "strFilename"; 
		$fdata["FullName"] = "files.strFilename";
	
		
		
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
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataMovies["strFilename"] = $fdata;
//	idPath
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "idPath";
	$fdata["GoodName"] = "idPath";
	$fdata["ownerTable"] = "files";
	$fdata["Label"] = "Id Path"; 
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
	
		$fdata["strField"] = "idPath"; 
		$fdata["FullName"] = "files.idPath";
	
		
		
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
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataMovies["idPath"] = $fdata;
//	dateAdded
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "dateAdded";
	$fdata["GoodName"] = "dateAdded";
	$fdata["ownerTable"] = "files";
	$fdata["Label"] = "Date Added"; 
	$fdata["FieldType"] = 202;
	
		
		
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
		$fdata["FullName"] = "files.dateAdded";
	
		
		
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
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataMovies["dateAdded"] = $fdata;
//	strPath
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "strPath";
	$fdata["GoodName"] = "strPath";
	$fdata["ownerTable"] = "path";
	$fdata["Label"] = "Str Path"; 
	$fdata["FieldType"] = 202;
	
		
		
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
		$fdata["FullName"] = "\"path\".strPath";
	
		
		
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
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataMovies["strPath"] = $fdata;
//	strGenre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "strGenre";
	$fdata["GoodName"] = "strGenre";
	$fdata["ownerTable"] = "genre";
	$fdata["Label"] = "Str Genre"; 
	$fdata["FieldType"] = 202;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "strGenre"; 
		$fdata["FullName"] = "genre.strGenre";
	
		
		
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
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataMovies["strGenre"] = $fdata;
//	idGenre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "idGenre";
	$fdata["GoodName"] = "idGenre";
	$fdata["ownerTable"] = "genre";
	$fdata["Label"] = "Id Genre"; 
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
	
		$fdata["strField"] = "idGenre"; 
		$fdata["FullName"] = "genre.idGenre";
	
		
		
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
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataMovies["idGenre"] = $fdata;
//	strSet
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "strSet";
	$fdata["GoodName"] = "strSet";
	$fdata["ownerTable"] = "sets";
	$fdata["Label"] = "Str Set"; 
	$fdata["FieldType"] = 202;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "strSet"; 
		$fdata["FullName"] = "\"sets\".strSet";
	
		
		
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
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataMovies["strSet"] = $fdata;
//	idSet1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "idSet1";
	$fdata["GoodName"] = "idSet1";
	$fdata["ownerTable"] = "sets";
	$fdata["Label"] = "Id Set1"; 
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
	
		$fdata["strField"] = "idSet"; 
		$fdata["FullName"] = "\"sets\".idSet";
	
		
		
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
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataMovies["idSet1"] = $fdata;
//	idMovie1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "idMovie1";
	$fdata["GoodName"] = "idMovie1";
	$fdata["ownerTable"] = "genrelinkmovie";
	$fdata["Label"] = "Id Movie1"; 
	$fdata["FieldType"] = 3;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "idMovie"; 
		$fdata["FullName"] = "genrelinkmovie.idMovie";
	
		
		
				
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
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataMovies["idMovie1"] = $fdata;
//	idGenre1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "idGenre1";
	$fdata["GoodName"] = "idGenre1";
	$fdata["ownerTable"] = "genrelinkmovie";
	$fdata["Label"] = "Id Genre1"; 
	$fdata["FieldType"] = 3;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "idGenre"; 
		$fdata["FullName"] = "genrelinkmovie.idGenre";
	
		
		
				
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
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataMovies["idGenre1"] = $fdata;
//	strTag
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "strTag";
	$fdata["GoodName"] = "strTag";
	$fdata["ownerTable"] = "tag";
	$fdata["Label"] = "Str Tag"; 
	$fdata["FieldType"] = 202;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "strTag"; 
		$fdata["FullName"] = "tag.strTag";
	
		
		
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
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataMovies["strTag"] = $fdata;
//	idTag
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "idTag";
	$fdata["GoodName"] = "idTag";
	$fdata["ownerTable"] = "tag";
	$fdata["Label"] = "Id Tag"; 
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
	
		$fdata["strField"] = "idTag"; 
		$fdata["FullName"] = "tag.idTag";
	
		
		
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
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataMovies["idTag"] = $fdata;

	
$tables_data["Movies"]=&$tdataMovies;
$field_labels["Movies"] = &$fieldLabelsMovies;
$fieldToolTips["Movies"] = &$fieldToolTipsMovies;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Movies"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Movies"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Movies()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "movie.idMovie,  movie.idFile,  movie.c00,  movie.c01,  movie.c02,  movie.c03,  movie.c04,  movie.c05,  movie.c06,  movie.c07,  movie.c08,  movie.c09,  movie.c10,  movie.c11,  movie.c12,  movie.c13,  movie.c14,  movie.c15,  movie.c16,  movie.c17,  movie.c18,  movie.c19,  movie.c20,  movie.c21,  movie.c22,  movie.c23,  movie.idSet,  files.strFilename,  files.idPath,  files.dateAdded,  \"path\".strPath,  genre.strGenre,  genre.idGenre,  \"sets\".strSet,  \"sets\".idSet AS idSet1,  genrelinkmovie.idMovie AS idMovie1,  genrelinkmovie.idGenre AS idGenre1,  tag.strTag,  tag.idTag";
$proto0["m_strFrom"] = "FROM movie  , files  , \"path\"  , genre  , \"sets\"  , genrelinkmovie  , tag";
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
	"m_strTable" => "movie"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "idFile",
	"m_strTable" => "movie"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "c00",
	"m_strTable" => "movie"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "c01",
	"m_strTable" => "movie"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "c02",
	"m_strTable" => "movie"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "c03",
	"m_strTable" => "movie"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "c04",
	"m_strTable" => "movie"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "c05",
	"m_strTable" => "movie"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "c06",
	"m_strTable" => "movie"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "c07",
	"m_strTable" => "movie"
));

$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "c08",
	"m_strTable" => "movie"
));

$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "c09",
	"m_strTable" => "movie"
));

$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "c10",
	"m_strTable" => "movie"
));

$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "c11",
	"m_strTable" => "movie"
));

$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "c12",
	"m_strTable" => "movie"
));

$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "c13",
	"m_strTable" => "movie"
));

$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "c14",
	"m_strTable" => "movie"
));

$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "c15",
	"m_strTable" => "movie"
));

$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLField(array(
	"m_strName" => "c16",
	"m_strTable" => "movie"
));

$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "";
$obj = new SQLFieldListItem($proto41);

$proto0["m_fieldlist"][]=$obj;
						$proto43=array();
			$obj = new SQLField(array(
	"m_strName" => "c17",
	"m_strTable" => "movie"
));

$proto43["m_expr"]=$obj;
$proto43["m_alias"] = "";
$obj = new SQLFieldListItem($proto43);

$proto0["m_fieldlist"][]=$obj;
						$proto45=array();
			$obj = new SQLField(array(
	"m_strName" => "c18",
	"m_strTable" => "movie"
));

$proto45["m_expr"]=$obj;
$proto45["m_alias"] = "";
$obj = new SQLFieldListItem($proto45);

$proto0["m_fieldlist"][]=$obj;
						$proto47=array();
			$obj = new SQLField(array(
	"m_strName" => "c19",
	"m_strTable" => "movie"
));

$proto47["m_expr"]=$obj;
$proto47["m_alias"] = "";
$obj = new SQLFieldListItem($proto47);

$proto0["m_fieldlist"][]=$obj;
						$proto49=array();
			$obj = new SQLField(array(
	"m_strName" => "c20",
	"m_strTable" => "movie"
));

$proto49["m_expr"]=$obj;
$proto49["m_alias"] = "";
$obj = new SQLFieldListItem($proto49);

$proto0["m_fieldlist"][]=$obj;
						$proto51=array();
			$obj = new SQLField(array(
	"m_strName" => "c21",
	"m_strTable" => "movie"
));

$proto51["m_expr"]=$obj;
$proto51["m_alias"] = "";
$obj = new SQLFieldListItem($proto51);

$proto0["m_fieldlist"][]=$obj;
						$proto53=array();
			$obj = new SQLField(array(
	"m_strName" => "c22",
	"m_strTable" => "movie"
));

$proto53["m_expr"]=$obj;
$proto53["m_alias"] = "";
$obj = new SQLFieldListItem($proto53);

$proto0["m_fieldlist"][]=$obj;
						$proto55=array();
			$obj = new SQLField(array(
	"m_strName" => "c23",
	"m_strTable" => "movie"
));

$proto55["m_expr"]=$obj;
$proto55["m_alias"] = "";
$obj = new SQLFieldListItem($proto55);

$proto0["m_fieldlist"][]=$obj;
						$proto57=array();
			$obj = new SQLField(array(
	"m_strName" => "idSet",
	"m_strTable" => "movie"
));

$proto57["m_expr"]=$obj;
$proto57["m_alias"] = "";
$obj = new SQLFieldListItem($proto57);

$proto0["m_fieldlist"][]=$obj;
						$proto59=array();
			$obj = new SQLField(array(
	"m_strName" => "strFilename",
	"m_strTable" => "files"
));

$proto59["m_expr"]=$obj;
$proto59["m_alias"] = "";
$obj = new SQLFieldListItem($proto59);

$proto0["m_fieldlist"][]=$obj;
						$proto61=array();
			$obj = new SQLField(array(
	"m_strName" => "idPath",
	"m_strTable" => "files"
));

$proto61["m_expr"]=$obj;
$proto61["m_alias"] = "";
$obj = new SQLFieldListItem($proto61);

$proto0["m_fieldlist"][]=$obj;
						$proto63=array();
			$obj = new SQLField(array(
	"m_strName" => "dateAdded",
	"m_strTable" => "files"
));

$proto63["m_expr"]=$obj;
$proto63["m_alias"] = "";
$obj = new SQLFieldListItem($proto63);

$proto0["m_fieldlist"][]=$obj;
						$proto65=array();
			$obj = new SQLField(array(
	"m_strName" => "strPath",
	"m_strTable" => "path"
));

$proto65["m_expr"]=$obj;
$proto65["m_alias"] = "";
$obj = new SQLFieldListItem($proto65);

$proto0["m_fieldlist"][]=$obj;
						$proto67=array();
			$obj = new SQLField(array(
	"m_strName" => "strGenre",
	"m_strTable" => "genre"
));

$proto67["m_expr"]=$obj;
$proto67["m_alias"] = "";
$obj = new SQLFieldListItem($proto67);

$proto0["m_fieldlist"][]=$obj;
						$proto69=array();
			$obj = new SQLField(array(
	"m_strName" => "idGenre",
	"m_strTable" => "genre"
));

$proto69["m_expr"]=$obj;
$proto69["m_alias"] = "";
$obj = new SQLFieldListItem($proto69);

$proto0["m_fieldlist"][]=$obj;
						$proto71=array();
			$obj = new SQLField(array(
	"m_strName" => "strSet",
	"m_strTable" => "sets"
));

$proto71["m_expr"]=$obj;
$proto71["m_alias"] = "";
$obj = new SQLFieldListItem($proto71);

$proto0["m_fieldlist"][]=$obj;
						$proto73=array();
			$obj = new SQLField(array(
	"m_strName" => "idSet",
	"m_strTable" => "sets"
));

$proto73["m_expr"]=$obj;
$proto73["m_alias"] = "idSet1";
$obj = new SQLFieldListItem($proto73);

$proto0["m_fieldlist"][]=$obj;
						$proto75=array();
			$obj = new SQLField(array(
	"m_strName" => "idMovie",
	"m_strTable" => "genrelinkmovie"
));

$proto75["m_expr"]=$obj;
$proto75["m_alias"] = "idMovie1";
$obj = new SQLFieldListItem($proto75);

$proto0["m_fieldlist"][]=$obj;
						$proto77=array();
			$obj = new SQLField(array(
	"m_strName" => "idGenre",
	"m_strTable" => "genrelinkmovie"
));

$proto77["m_expr"]=$obj;
$proto77["m_alias"] = "idGenre1";
$obj = new SQLFieldListItem($proto77);

$proto0["m_fieldlist"][]=$obj;
						$proto79=array();
			$obj = new SQLField(array(
	"m_strName" => "strTag",
	"m_strTable" => "tag"
));

$proto79["m_expr"]=$obj;
$proto79["m_alias"] = "";
$obj = new SQLFieldListItem($proto79);

$proto0["m_fieldlist"][]=$obj;
						$proto81=array();
			$obj = new SQLField(array(
	"m_strName" => "idTag",
	"m_strTable" => "tag"
));

$proto81["m_expr"]=$obj;
$proto81["m_alias"] = "";
$obj = new SQLFieldListItem($proto81);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto83=array();
$proto83["m_link"] = "SQLL_MAIN";
			$proto84=array();
$proto84["m_strName"] = "movie";
$proto84["m_columns"] = array();
$proto84["m_columns"][] = "idMovie";
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
$proto84["m_columns"][] = "idSet";
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
												$proto87=array();
$proto87["m_link"] = "SQLL_CROSSJOIN";
			$proto88=array();
$proto88["m_strName"] = "files";
$proto88["m_columns"] = array();
$proto88["m_columns"][] = "idFile";
$proto88["m_columns"][] = "idPath";
$proto88["m_columns"][] = "strFilename";
$proto88["m_columns"][] = "playCount";
$proto88["m_columns"][] = "lastPlayed";
$proto88["m_columns"][] = "dateAdded";
$obj = new SQLTable($proto88);

$proto87["m_table"] = $obj;
$proto87["m_alias"] = "";
$proto89=array();
$proto89["m_sql"] = "";
$proto89["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto89["m_column"]=$obj;
$proto89["m_contained"] = array();
$proto89["m_strCase"] = "";
$proto89["m_havingmode"] = "0";
$proto89["m_inBrackets"] = "0";
$proto89["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto89);

$proto87["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto87);

$proto0["m_fromlist"][]=$obj;
												$proto91=array();
$proto91["m_link"] = "SQLL_CROSSJOIN";
			$proto92=array();
$proto92["m_strName"] = "path";
$proto92["m_columns"] = array();
$proto92["m_columns"][] = "idPath";
$proto92["m_columns"][] = "strPath";
$proto92["m_columns"][] = "strContent";
$proto92["m_columns"][] = "strScraper";
$proto92["m_columns"][] = "strHash";
$proto92["m_columns"][] = "scanRecursive";
$proto92["m_columns"][] = "useFolderNames";
$proto92["m_columns"][] = "strSettings";
$proto92["m_columns"][] = "noUpdate";
$proto92["m_columns"][] = "exclude";
$proto92["m_columns"][] = "dateAdded";
$proto92["m_columns"][] = "idParentPath";
$obj = new SQLTable($proto92);

$proto91["m_table"] = $obj;
$proto91["m_alias"] = "";
$proto93=array();
$proto93["m_sql"] = "";
$proto93["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto93["m_column"]=$obj;
$proto93["m_contained"] = array();
$proto93["m_strCase"] = "";
$proto93["m_havingmode"] = "0";
$proto93["m_inBrackets"] = "0";
$proto93["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto93);

$proto91["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto91);

$proto0["m_fromlist"][]=$obj;
												$proto95=array();
$proto95["m_link"] = "SQLL_CROSSJOIN";
			$proto96=array();
$proto96["m_strName"] = "genre";
$proto96["m_columns"] = array();
$proto96["m_columns"][] = "idGenre";
$proto96["m_columns"][] = "strGenre";
$obj = new SQLTable($proto96);

$proto95["m_table"] = $obj;
$proto95["m_alias"] = "";
$proto97=array();
$proto97["m_sql"] = "";
$proto97["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto97["m_column"]=$obj;
$proto97["m_contained"] = array();
$proto97["m_strCase"] = "";
$proto97["m_havingmode"] = "0";
$proto97["m_inBrackets"] = "0";
$proto97["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto97);

$proto95["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto95);

$proto0["m_fromlist"][]=$obj;
												$proto99=array();
$proto99["m_link"] = "SQLL_CROSSJOIN";
			$proto100=array();
$proto100["m_strName"] = "sets";
$proto100["m_columns"] = array();
$proto100["m_columns"][] = "idSet";
$proto100["m_columns"][] = "strSet";
$obj = new SQLTable($proto100);

$proto99["m_table"] = $obj;
$proto99["m_alias"] = "";
$proto101=array();
$proto101["m_sql"] = "";
$proto101["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto101["m_column"]=$obj;
$proto101["m_contained"] = array();
$proto101["m_strCase"] = "";
$proto101["m_havingmode"] = "0";
$proto101["m_inBrackets"] = "0";
$proto101["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto101);

$proto99["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto99);

$proto0["m_fromlist"][]=$obj;
												$proto103=array();
$proto103["m_link"] = "SQLL_CROSSJOIN";
			$proto104=array();
$proto104["m_strName"] = "genrelinkmovie";
$proto104["m_columns"] = array();
$proto104["m_columns"][] = "idGenre";
$proto104["m_columns"][] = "idMovie";
$obj = new SQLTable($proto104);

$proto103["m_table"] = $obj;
$proto103["m_alias"] = "";
$proto105=array();
$proto105["m_sql"] = "";
$proto105["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto105["m_column"]=$obj;
$proto105["m_contained"] = array();
$proto105["m_strCase"] = "";
$proto105["m_havingmode"] = "0";
$proto105["m_inBrackets"] = "0";
$proto105["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto105);

$proto103["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto103);

$proto0["m_fromlist"][]=$obj;
												$proto107=array();
$proto107["m_link"] = "SQLL_CROSSJOIN";
			$proto108=array();
$proto108["m_strName"] = "tag";
$proto108["m_columns"] = array();
$proto108["m_columns"][] = "idTag";
$proto108["m_columns"][] = "strTag";
$obj = new SQLTable($proto108);

$proto107["m_table"] = $obj;
$proto107["m_alias"] = "";
$proto109=array();
$proto109["m_sql"] = "";
$proto109["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto109["m_column"]=$obj;
$proto109["m_contained"] = array();
$proto109["m_strCase"] = "";
$proto109["m_havingmode"] = "0";
$proto109["m_inBrackets"] = "0";
$proto109["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto109);

$proto107["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto107);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Movies = createSqlQuery_Movies();
																																							$tdataMovies[".sqlquery"] = $queryData_Movies;

$tableEvents["Movies"] = new eventsBase;
$tdataMovies[".hasEvents"] = false;

$cipherer = new RunnerCipherer("Movies");

?>