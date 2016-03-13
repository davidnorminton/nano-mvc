<?php
/**
 * Model for index test page
 *
 */
namespace nano\models;

class aboutModel extends \core\model
{ 
    // main page title
    private $title = "Nano mvc test page";
    // array that holds parameters extracted from uri
    private $vars;
    // array of articles 
    private $articles = array(
                              ['title'=>"What is nano mvc?",
                               'body'=>'Nano MVC allows the design of your web application to be separated from your PHP code. And further allow your PHP code to be divided into logical partions.'],
                              ['title'=>"How to use", 
                               'body'=>'Step 1 - Place nano into your web root directory, check with your web server provider as you may need to rename the html folder to either public or httdocs.<br />Step 2 - build a simple controller ....<br />Step 2 - A simple Model ...<br />Step 3 - The view<br />Step 4 - Add some HTML']
                             );
    
    
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
    
    /**
     * method getter getArticles - return array of artiles
     */
    public function getArticles()
    {
      return $this->articles;
    } 
     
} 
