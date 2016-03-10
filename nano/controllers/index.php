<?php
/**
 * Default index page of website
 *
 */
namespace nano\controllers;

class index extends \core\controller
{
    // instance of model 
    private $model;
    
    private $page;
    
    public function __construct($params)
    {
        // create instance of model and pass any parameters
        $this->model = new \nano\models\index($param[0]);
        // pass an instance of model as parameter to view 
        $view = new \nano\views\index($this->model);
        $view_build = $view->build();
        // get them from parent class
        $theme = $this->getTheme();
        // theme will set header and footer variables
        $theme->setTitle($this->model->getTitle());
        // pass view output to theme to be rendered with header and footer       
        $this->page = $theme->render($view_build);
        // create a cache file of contents
        $this->cacheFile($theme->getCache());
    }
} 
