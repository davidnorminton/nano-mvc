<?php
/**
 * the core controller class - 
 * Once the uri has been exploded the chunks are used to load the relevant
 * page controller, and its parameters.
 * The controller is also responsible for creating an instance of the theme class,
 * which is used to build the page.
 * Author David Norminton
 * davidnorminton@gmail.com
 */
namespace core;

spl_autoload_register(function ($classname) {

    $file = APP_PATH . str_replace('\\', DS, $classname) . '.php';
    echo $file;
    if (file_exists($file)) {
       echo "exists";
       require_once ($file);   
    } else {
        header('HTTP/1.0 404 Not Found');
        die('<h1>404 Not Found</h1><p>This file doesn\'t seem to exist</p><hr />');
        return False;
    }

}, true, false);

class controller {
    
    //public $theme;
    
    public function __construct()
    {
      //  $theme = THEME ;
      //  $set_theme = new $theme();

      //  $this->theme = $set_theme;

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
        $path = "\\nano\\controllers\\{$classname}";
        echo $path;
        $class = new $path($query);  

    }
}

