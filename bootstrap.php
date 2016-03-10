<?php
// start a session if one hasn't already been created
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
// uncomment in development mode
error_reporting(E_ALL);

define("DS", DIRECTORY_SEPARATOR);

// load autoloader script
include("nano/autoload.php");

// Define a constant to represent the full path from root
define("APP_PATH", dirname(__FILE__) . DS);

// define required paths for controllers, models and views
define("CONTROLLERS_PATH", APP_PATH . "nano" . DS . "controllers" . DS);
define("MODELS_PATH", APP_PATH . "nano" . DS . "models" . DS);
define("MVC_VIEW_PATH", APP_PATH . "nano" . DS . "views" . DS);
define("THEME", "original");
define("THEME_PATH", APP_PATH . "nano" . DS . "themes" . DS . THEME . DS);
define("THEME_HEADER", THEME_PATH . "header.phtml");
define("THEME_FOOTER", THEME_PATH . "footer.phtml");
define("THEME_NAMESPACE", "\\nano\\themes\\original\\theme");
define("CACHE", True);

// test time
$time1 = microtime();
// if page in cache load 
$url = $_SERVER['REQUEST_URI'];
$url = str_replace('/', '', $url);
$fp = '/var/www/nano/cache/'.$url.'.html';
if(file_exists($fp) && CACHE == True){
   echo "using cache";
   echo file_get_contents($fp);
 $time2 = microtime();
 echo "\n Time Taken " .$time2 - $time1;  
} else {       
  // file not in cache so create page
  echo "creating new";
/**
 * get url - and load correct controller
 */
 $query = explode('/',$_SERVER['REQUEST_URI']);
 // remove first item in $query array
 array_shift($query);
	   
 if (empty($query[0])) {
     $classname = "index";
 } else {
     $classname = $query[0];
 }        
 // remove controller name from $query array
 array_shift($query);
     
 // create instance of controller for page
 $controller_namespace = "\\nano\\controllers\\{$classname}";
 $class = new $controller_namespace($query);  
  $time2 = microtime();
 echo "\n Time Taken " .$time2 - $time1; 
}
        



