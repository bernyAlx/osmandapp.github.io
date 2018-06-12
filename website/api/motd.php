<?php
// lang, version
if(isset($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] == '82.217.128.95' && 
   isset($_REQUEST['version']) && substr($_REQUEST['version'] , 0, 1 ) == '3' ) {
	echo file_get_contents("messages/top_wikivoyage.json");	
} else if(isset($_GET['os']) && $_GET['os'] == 'ios') {
  // url supported: 
  // 1. screen in app [screen:in_apps], [in_app:<inappid>]
  // 2. http url supported
  echo file_get_contents("messages/discount_ios.json");
} else {
 // url supported: 
 // 1. "osmand-market-app:net.osmand.plus" - market redirect
 // 2. http url supported
  echo file_get_contents("messages/discount.json");
}

?>
