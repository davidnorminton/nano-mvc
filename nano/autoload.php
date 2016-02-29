<?php

spl_autoload_register(function ($classname) {

    $file = APP_PATH . str_replace('\\', DS, $classname) . '.php';

    if (file_exists($file)) {  
        require_once ($file);   
    }

}, true, false);

?>
