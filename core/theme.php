<?php
/**
 * main template class
 *
 */
namespace core;

class theme{
    // header html to be used set in bootstrap
	protected $header = THEME_HEADER;
	// footer html to be used set in bootstrap
	protected $footer = THEME_FOOTER;
	// <head><title>?</title></head>
	private $title;
	// strores paresed html of page
	private $cache;
	// turn cache on / off temp
	private $cache_on = True;
    //page name
    private $pageName;
	
	public function __get($name){
		return $this->$name;
	}

    /**
     * Turn cache off - Possible usage during POST requests
     */
    public function cacheOn($binary)
    {
       $this->cache_on = $binary;
    
    }
    
    /**
     * method render
     * @param string $view - paresed html of page body
     * renders header, footer with page body
     * if cache is set to on will store a string of page html in
     * $var cache 
     */
	public function render($view, $includes=True){
	    ob_start();
	    
	    if ($includes == True) {

		    include($this->header);
	 	    echo $view;
	     	include($this->footer);

        } else {
           
            echo $view;  
        }	
   		// store contents of page to be used in cache
		if (CACHE == True && $this->cache_on == True) {
		    $this->cache = ob_get_contents();
		}
		ob_end_flush();
     	
	}
	
	/**
	 * method setTitle - set page title for seo and browser tab
	 * @param string $title
	 */
	public function setTitle($title)
	{
	  $this->title = $title;
	}

    /**
     * method getCache - returns a string containing the parsed html of page
     */	
	public function getCache()
	{
	  return $this->cache;
	}
	
	/**
	 * setPageName
	 * @param string $pageName - set the page name
	 */
    public function setPageName($pageName)
    {
       $this->pageName = $pageName;
    }	
   
   /**
    * setHeader
    * @param string $file
    * this file should be in the theme directory
    */ 
   public function setHeader($file)
   {
      $this->header = THEME_PATH . $file;
   } 
   
  /**
   * setFooter
   * @param string $file
   * this file should be in the theme directory
   */ 
  public function setFooter($file)
  {
     $this->footer = THEME_PATH . $file;
  } 
}
