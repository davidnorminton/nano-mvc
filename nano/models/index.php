<?php
/**
 * Model for index 
 *
 */
namespace nano\models;

class index extends \core\model
{
    private $title = "This is the page title";
    
    private $vars, $inc;
    
    private $articles = array(
                              ['title'=>"This is the first title",
                               'body'=>'Below is a random image',
                               'img'=> 'http://www.passmark.com/images/monitortestscreenshot5.gif'],
                              ['title'=>"This is the second title", 
                               'body'=>'Below is another random image',
                               'img'=>'http://www.passmark.com/images/monitortestscreenshot3.jpg']
                             );
    
    public function __construct($inc, $param)
    {
     $this->inc = $inc;
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
    
    public function getInc()
    {
       return $this->inc;
    }
     
} 
