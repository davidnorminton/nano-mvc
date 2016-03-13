<?php
/**
 * test page
 */
namespace nano\views;


class index extends \core\view {

    // an instance of the model used
    private $model;
    // an array of data used to parse varibaes on the html page
    private $vars;
    
    /**
     * method construct - loads the model instance into the $model property
     * Ensure the model is of type model
     */
    public function __construct(\nano\models\index $model)
    {
     $this->model = $model;
    }
    
    /**
     * method build - sets elements into the $vars array getting data from model
     *
     */
    public function build()
    {
     $this->vars['title'] = $this->model->getTitle();
     $this->vars['articles'] = $this->model->getArticles();
     // render method is in the \core\view class
     // used to build the page contents
     return $this->render( $this->vars, THEME_PATH . "article.phtml");   
    }
}
