<?php
/**
 * Autoload for any objects that are instansitaed within a class that extends
 * this view class
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

class view
{
    public $x = "beach";
    
}

 
