<?php
/**
 * Default index page of test website
 *
 */
namespace nano\controllers;

class submitForm extends \core\controller
{
    // instance of model 
    private $model;
    
    
    public function __construct($params)
    {

        // create instance of model and pass any parameters
        $this->model = new \nano\models\submitFormModel();

        // pass an instance of model as parameter to view 
        $view = new \nano\views\submitFormView($this->model);

        // get theme from parent class
        $this->theme = $this->getTheme();
        
        // theme will set header and footer variables
        $this->theme->setTitle($this->model->getTitle());
        
        // pass view output to theme to be rendered with header and footer       
        $this->theme->render($view->build());

    }
} 
