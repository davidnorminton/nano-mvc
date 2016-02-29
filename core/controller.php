<?php
namespace core;



class controller{
    
    public static function run()
    {
		$url = $_SERVER['REQUEST_URI'];
	    $query = explode('/',$_SERVER['REQUEST_URI']);
        if (! isset($query[1])) {
            $classname = "index";
        } else {
            $classname = $query[1];
        }
        if (isset($query[2])) {
            $methodname = $query[2];
        }
        $path = "\\nano\\controllers\\{$classname}";
        $class = new $path();
        $class::help();
    }
}

