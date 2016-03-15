<?php
/**
 * Model for index test page
 *
 */
namespace nano\models;

class contactModel extends \core\model
{ 
    // main page title
    private $title = "Contact";
    // array that holds parameters extracted from uri
    private $vars;
    
    
    public function __construct($param)
    {

     $this->vars = $param;
    }  
    
    /**
     * method getter getTile
     * returns page title 
     */
    public function getTitle()
    {
      return $this->title;
    }
     
} 
