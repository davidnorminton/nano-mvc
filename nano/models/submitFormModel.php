<?php
/**
 * Model for index test page
 *
 */
namespace nano\models;

class submitFormModel extends \core\model
{ 
    // main page title
    private $title = "Submitted form data";
    // array that holds parameters extracted from uri
    private $vars;
    
    
    public function __construct()
    {
  
     $this->vars['name'] = $_POST['name'];
     $this->vars['website'] = $_POST['website'];
     $this->vars['email'] = $_POST['email'];
     $this->vars['message'] = $_POST['message'];
                    
    }  
    
    /**
     * method getter getTile
     * returns page title 
     */
    public function getTitle()
    {
      return $this->title;
    }
    /**
     * return data
     */
    public function getVars()
    {
        return $this->vars;
    }    
} 
