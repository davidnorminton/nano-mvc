<?php
/**
 * the core controller class - 
 * The controller is also responsible for creating an instance of the theme class,
 * which is used to build the page.
 * Author David Norminton
 * davidnorminton@gmail.com
 */
namespace core;

class controller {

    
    public static function getTheme()
    {
        // theme is set in bootstrap.php
        $theme = THEME_NAMESPACE ;
        // create an instance of template class
        return new $theme();
    }
    
    public function cacheFile($contents)
    {

        $url = $_SERVER['REQUEST_URI'];
        
        // create file friendly name for cache file
        $url = str_replace('/', '', $url);
        
        // cache file path
        $fp = CACHE_PATH . $url . '.html';
        
        if (is_writable(CACHE_PATH)) {

           // create file and make ready to write 
           $myfile = fopen($fp, "w") or die("Unable to open file!");

           // give correct permissions
           chmod($myfile, 0644);

           // write contents
           fwrite($myfile, $contents);
           fclose($myfile);
        }   
    }
    
    public function __destruct()
    {
      // check we have a theme object instansiated
      if ($this->theme  instanceof theme ) {   
        // run cache function
        $this->cacheFile($this->theme->getCache());
      } else {
          // inform dev of error
          throw new \core\Exception('An object of type theme must be instansiated');

      }   
        
    }

}

