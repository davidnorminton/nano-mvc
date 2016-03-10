<?php
/**
 * Autoload for any objects that are instansitaed within a class that extends
 * this view class
 */
namespace core;

class view
{

    public function render($vars, $html)
    {
         ob_start();
         $vars;
         include($html);
         return ob_get_clean(); 
    }   
    
}

 
