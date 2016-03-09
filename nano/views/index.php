<?php

namespace nano\views;

class index extends \core\view
{
    private $model;
    
    public function __construct(\nano\models\index $model)
    {
     $this->model = $model;

    }
    public function build()
    {
     ob_start();
     $this->title = $this->model->getTitle();
     $this->articles = $this->model->getArticles();
     include(THEME_PATH . "article.phtml");
     return ob_get_clean();   
    }
}
