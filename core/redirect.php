<?php
/**
 * Redirect users with a message
 */
namespace core;

class redirect {

    public function __construct($url, $message)
    {
        $error = urlencode($message);
        $msg = $url . '?error=' . $error;
        die(header("Location: $msg"));
    }

} 
