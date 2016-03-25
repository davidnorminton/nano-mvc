<?php
/**
 * bootstrap - defines app wide constants
 *           - adds the class autoloader
 *           - creates an instance of the front controller
 * @author David Norminton
 * @email -davidnorminton@gmail.com
 */
// start a session if one hasn't already been created
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
// uncomment in development mode
error_reporting(E_ALL);

define('DS', DIRECTORY_SEPARATOR);

// load autoloader script
include('nano/autoload.php');

// Define a constant to represent the full path from root
define("APP_PATH", dirname(__FILE__) . DS);

// define required paths for controllers, models and views
define('CONTROLLERS_PATH', APP_PATH . 'nano' . DS . 'controllers' . DS);
define('MODELS_PATH', APP_PATH . 'nano' . DS . 'models' . DS);
define('MVC_VIEW_PATH', APP_PATH . 'nano' . DS . 'views' . DS);
// define theme - directory name!
define('THEME', 'original');
// path to theme
define('THEME_PATH', APP_PATH . 'nano' . DS . 'themes' . DS . THEME . DS);
// default header path
define('THEME_HEADER', THEME_PATH . 'header.phtml');
// default footer path
define('THEME_FOOTER', THEME_PATH . 'footer.phtml');
// theme namespace
define('THEME_NAMESPACE', "\\core\\theme");
// enable cache true or false
define('CACHE', True);
// path to cache directory
define('CACHE_PATH', APP_PATH . 'nano' . DS . 'cache' . DS);
// default controller index page
define('DEFAULT_CONTROLLER', 'index');
// create instance of front controller
$class = new \core\frontcontroller();  

        



