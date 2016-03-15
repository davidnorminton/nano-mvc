<?php
/**
 * test page
 */
namespace nano\views;


class submitFormView extends \core\view {


    // an array of data used to parse varibaes on the html page
    protected $vars;


    /**
     * method build - sets elements into the $vars array getting data from model
     *
     */
    public function build()
    {

     $this->vars['title'] = $this->model->getTitle();
     $email_data =  $this->model->getVars();
     $this->vars['name'] = $email_data['name'];
     $this->vars['website'] = $email_data['website'];
     $this->vars['email'] = $email_data['email'];
     $this->vars['message'] = $email_data['message'];          
     // render method is in the \core\view class
     // used to build the page contents
     return $this->render( $this->vars, THEME_PATH . "submitForm.phtml");   
    }
}
