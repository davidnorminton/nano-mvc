<?php

namespace nano\views;

class index extends \core\view
{
    private $model;
    
    private $vars;
    
    public function __construct(\nano\models\index $model)
    {
     $this->model = $model;
    }
    
    public function build()
    {
     $this->vars['title'] = $this->model->getTitle();
     $this->vars['articles'] = $this->model->getArticles();
     return $this->render( $this->vars, THEME_PATH . "article.phtml");   
    }
}
