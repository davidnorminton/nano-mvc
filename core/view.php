<?php
/**
 * core view class
 * 
 */
namespace core;

abstract class view 
{

    // an instance of the model used
    protected $model;
    
    
    /**
     * method construct - loads the model instance into the $model property
     * Ensure the model is of type model
     */    
    public function __construct($model)
    {
         $this->model = $model;
    }
    
    
    /**
     * render method
     * @param array $vars - containd data to be added to html
     * @param string $html - file within template folder to be used
     * note - path to template folder set in bootstrap file
     * return a string containing the parsed html
     */
    public function render($vars, $html)
    {
         ob_start();
         $vars;
         include($html);
         return ob_get_clean(); 
    }   
    
    abstract public function build();
    
}
