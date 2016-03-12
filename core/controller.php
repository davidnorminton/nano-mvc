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

    /**
     * static method getTheme
     * returns an object of type \core\theme
     */
    public static function getTheme()
    {
        // theme is set in bootstrap.php
        $theme = THEME_NAMESPACE ;
        // create an instance of template class
        return new $theme();
    }

    /**
     * method cacheFile - creates a cache of page
     * @param string $contents - a parsed html string which will be written to file
     *
     */    
    public function cacheFile($contents)
    {
        if (empty($contents)) {
           throw new \Exception("Problem in " . __CLASS__ . " " . __METHOD__);
        }
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
    
    /**
     * destruct method - create a cache of page when object has finished running
     */
    public function __destruct()
    {
      // check we have a theme object instansiated otherwise this will not work!
      if ($this->theme  instanceof theme ) {   
        // run cache function
        $this->cacheFile($this->theme->getCache());
      } else {
          // inform dev an error
          throw new \Exception('An object of type theme must be instansiated');

      }   
        
    }

}

