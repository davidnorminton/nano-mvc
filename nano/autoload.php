<?php
/**
 * autloader - takes a namespace and replaces \ with / o create a filepath,
 * a check to see if this file exists is run and if it is then the file is
 * included if not a 404 is given.
 */
spl_autoload_register(function ($classname) {

    $file = APP_PATH . str_replace('\\', DS, $classname) . '.php';
    if (file_exists($file)) {
       require_once ($file);   
    } else {
        header('HTTP/1.0 404 Not Found');
        die(header('Location: 404.html'));
        return False;
    }
}, true, false);

?>
