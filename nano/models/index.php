<?php
/**
 * Model for index test page
 *
 */
namespace nano\models;

class index extends \core\model
{ 
    // main page title
    private $title = "Nano mvc test page";
    // array that holds parameters extracted from uri
    private $vars;
    // array of articles 
    private $articles = array(
                              ['title'=>"This is foo",
                               'body'=>'Pellentesque odio sem, aliquam sed viverra placerat, placerat ut leo. Nam laoreet vehicula risus, sed pharetra purus lacinia at. Etiam ac semper urna, maximus ultrices nisi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque nec mollis eros. Ut ut est est. Curabitur congue pellentesque urna id pulvinar. Suspendisse sollicitudin a ex a convallis. Ut vitae odio commodo, eleifend odio id, pulvinar lacus. Curabitur tellus nisi, lacinia vitae sagittis in, dapibus vitae nibh. Vivamus varius, metus a blandit molestie, dolor risus eleifend orci, nec porttitor mi felis at quam. Curabitur blandit massa in rutrum facilisis. Proin lacinia accumsan imperdiet.',
                               'img'=> '/images/foo.jpg'],
                              ['title'=>"This is bar", 
                               'body'=>'Nullam ullamcorper neque eu tincidunt volutpat. Morbi tincidunt rutrum velit. Praesent non luctus nulla, et condimentum neque. Donec fringilla risus lacus, at vestibulum diam tincidunt eget. Donec in porta mauris. In hac habitasse platea dictumst. Curabitur mi nisl, blandit at tempus eu, sollicitudin vel lacus. Sed facilisis, justo ullamcorper ullamcorper dignissim, neque risus cursus leo, non euismod orci dolor at lectus. Vivamus suscipit ante vel magna vehicula, non ornare erat faucibus.',
                               'img'=>'/images/bar.jpg']
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
