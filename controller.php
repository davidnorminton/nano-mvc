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
        $url = str_replace('/', '', $url);
        $fp = '/var/www/nano/cache/'.$url.'.html';
        if (is_writable('/var/www/nano/cache')) {
            
           $myfile = fopen($fp, "w") or die("Unable to open file!");
           chmod($myfile, 0644);
           fwrite($myfile, $contents);
           fclose($myfile);
        }   
    }

}

