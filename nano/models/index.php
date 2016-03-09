<?php
/**
 * Model for index 
 *
 */
namespace nano\models;

class index extends \core\model
{
    private $title = "This title is set from the model";
    
    private $vars;
    
    private $articles = array(
                              ['title'=>"title1", 'body'=>'hello from 1'],
                              ['title'=>"title2", 'body'=>'hello from 2']
                             );
    
    public function __construct($param)
    {
     $this->vars = $param;
    }  
    
    public function getTitle()
    {
      return $this->title;
    }
    
    public function getArticles()
    {
      return $this->articles;
    }

    
} 
