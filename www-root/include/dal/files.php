<?php
$dalTablefiles = array();
$dalTablefiles["idFile"] = array("type"=>3,"varname"=>"idFile");
$dalTablefiles["idPath"] = array("type"=>3,"varname"=>"idPath");
$dalTablefiles["strFilename"] = array("type"=>202,"varname"=>"strFilename");
$dalTablefiles["playCount"] = array("type"=>3,"varname"=>"playCount");
$dalTablefiles["lastPlayed"] = array("type"=>202,"varname"=>"lastPlayed");
$dalTablefiles["dateAdded"] = array("type"=>202,"varname"=>"dateAdded");
	$dalTablefiles["idFile"]["key"]=true;
$dal_info["files"]=&$dalTablefiles;

?>