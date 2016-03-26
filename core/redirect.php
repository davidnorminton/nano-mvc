<?php
/**
 * Redirect users with a message
 */
namespace core;

class redirect {

    /**
     * @param string $url - redirect to
     * @param string $param - ie error, success
     *                        this will become /?param=message
     * @param string $message - a message to add to query
     */
    public function __construct($url, $param=NULL, $message=NULL)
    {
        if (!$url){
           throw new \Exception("A valid url is required for a redirect");
        }
        // message will be in url so needs formatting
        if ($message != NULL) {    
           $msg = urlencode($message);
        }
        
        if ($pram) {
           $param = urlencode($param);
        }
        // if there are no parameters just redirect 
        if ($param != NULL) {
            $message = $url . '/?'.$param.'=' . $msg;
            die(header("Location: $message"));
        } else {
            die(header("Location: $url"));
        }
        
    }
} 
