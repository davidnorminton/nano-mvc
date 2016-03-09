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

    //private $theme;    
    
    public function __construct($params)
    {

        $this->model = new \nano\models\index($param[0]);

        // pass model and theme objects to view object

        $view = new \nano\views\index($this->model);
        $view_build = $view->build();
        // theme is set in bootstrap.php
        $use_theme = THEME_NAMESPACE ;
        // create an instance of template class
        $this->theme = new $use_theme();
        $this->theme->setTitle($this->model->getTitle());
        $this->theme->render($view_build);        
    }
} 
