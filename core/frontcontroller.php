<?php
/**
 * Load cache file if available else load relevant controllers to build page
 *
 */
namespace core;

class frontcontroller{
   
    
   private $uri;

   public function __construct()
   {
       $this->uri = $_SERVER['REQUEST_URI'];
       $url = str_replace('/', '', $url);
       $fp = '/var/www/nano/cache/'.$url.'.html';
       if (file_exists($fp) && CACHE == True){
          echo "using cache";
          echo file_get_contents($fp);
       } else {
          $this->loadController();
       }   
   }

   public function loadController()
   {
       $query = explode('/',$this->uri);
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
   }
} 
