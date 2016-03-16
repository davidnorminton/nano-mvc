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
    // store email object
    private $email;
    // return message
    private $return_msg;
    
    public function __construct()
    {
  
        $this->vars['name'] = $_POST['name'];
        $this->vars['website'] = $_POST['website'];
        $this->vars['email'] = $_POST['email'];
        $this->vars['message'] = $_POST['message'];
        $this->email = new \core\email($this->vars['email'],
                                       $this->vars['message'],
                                       'Sent from contact form');
        if ( $this->email->send()) {
           $this->return_msg = "Successfully sent";
        } else {
           $this->return_msg = "Problem sending message";
        }                                              
    }  
    
    public function getReturnMsg()
    {
        return $this->return_msg;
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
