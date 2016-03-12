<?php
/**
 * Load cache file if available else load relevant controllers to build page
 *
 */
namespace core;

class frontcontroller{
   
   /*
    * @var string $uri - url of page
    * access private
    */ 
   private $uri;
   
   /**
    * __construct stores the uri in $uri property
    * 
    */
   public function __construct()
   {
       $this->uri = $_SERVER['REQUEST_URI'];
       
       // remove / from url to form file name
       $cache_file = str_replace('/', '', $this->uri);
       
       // cache file path
       $fp = CACHE_PATH . $cache_file . '.html';

       // make sure the cache file exists and developer wants to use the cache sys
       if (file_exists($fp) && CACHE == True){
           // load cache file
           echo file_get_contents($fp);
       } else {
          // no cache file so run the correct page controller
          $this->loadController();
       }   
   }

   /**
    * method to load correct controller based on first parameter of uri
    *
    */
   public function loadController()
   {
       $query = explode('/',$this->uri);
       // remove first item in $query array
       array_shift($query);
	   
	   // if only domain name given load a default controller
       if (empty($query[0])) {
          // set in bootstrap
          $classname = DEFAULT_CONTROLLER;
       } else {
          $classname = $query[0];
       }        
       // remove controller name from $query array
       array_shift($query);
     
       // controller namespace to use to start app
       $controller_namespace = "\\nano\\controllers\\{$classname}";
       // create instance of controller
       $class = new $controller_namespace($query);  
   }
} 
