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
define("THEME_PATH", APP_PATH . "nano" . DS . "themes" . DS);
define("THEME", "\\nano\\themes\\original\\theme");
// run main controller    
$controller = new \core\controller();

        


