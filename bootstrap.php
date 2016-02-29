<?php
// uncomment in development mode
error_reporting(E_ALL);

define("DS", DIRECTORY_SEPARATOR);

// load autoloader script
include("nano/autoload.php");

// full path from root
define("APP_PATH", dirname(__FILE__) . DS);

// define required paths for controllers, models and views
define("CONTROLLERS_PATH", APP_PATH."controllers".DS);
define("MODELS_PATH", APP_PATH."models".DS);
define("MVC_VIEW_PATH", APP_PATH."views".DS);
define("THEME_PATH", APP_PATH."themes".DS);
// run main controller    
\core\controller::run();

        



