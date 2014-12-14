<?php
	// create menu nodes arr
	$menuNodesObject->menuNodes = array();
		
	if(!$menuNodesObject->isAdminTable()){
		$menuNode = array();
		$menuNode["id"] = "1";
		$menuNode["name"] = "";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "Movies";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "0";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Movies";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "2";
		$menuNode["name"] = "";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "movieview";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "0";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Movieview";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "3";
		$menuNode["name"] = "";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "episodeview";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "0";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Episodeview";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "4";
		$menuNode["name"] = "";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "musicvideoview";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "0";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Musicvideoview";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "5";
		$menuNode["name"] = "";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "seasonview";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "0";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Seasonview";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "6";
		$menuNode["name"] = "";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "tvshowview";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "0";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Tvshowview";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "7";
		$menuNode["name"] = "";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "tvshowcounts";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "0";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Tvshowcounts";
		$menuNodesObject->menuNodes[] = $menuNode;
			if($menuNodesObject->pageType == PAGE_MENU && IsAdmin())
		{
				}
	}else{
		//Admin Area menu items
	}	
	
?>
