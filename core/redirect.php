<?php
/**
 * Redirect users with a message
 */
namespace core;

class redirect {

    public function __construct($url, $query=NULL, $message=NULL)
    {
        if ($msg != NULL) {    
           $msg = urlencode($message);
        }
        if ($query) {
           $query = 'error';
        }
        if ($query == NULL || $query == 'error') {
            $message = $url . '?'.$query.'=' . $msg;
            die(header("Location: $message"));
        }
    }

} 
