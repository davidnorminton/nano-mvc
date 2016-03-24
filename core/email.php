<?php
/**
 * Email class to send any number of emails
 * sendmail or postfix must be installed on server
 */
namespace core;

class email {
 
    // store sender set in bootstrap
    private $sender = EMAIL_SENDER;
    
    // store recipients array
    private $recipients;
    
    // store message
    private $message;
    
    // subject
    private $subject;
    
    // mail headers
    private $headers;
    
    // cc
    private $cc;
    
    public function __construct($recipients, $message, $subject, $cc=NULL)
    {
        
        $headers = "From: " . $this->sender . "\r\n";
        $headers .= "MIME-VERSION: 1.0\r\n";
        $headers .= "Content-type: text/html\r\n";
        $this->headers = $headers;
        $this->message = $message;
        $this->recipients = $recipients;
        $this->subject = $subject;
    }   
    
    /**
     * method send - sends a email to each recipient
     *
     */
    public function send()
    {
       
        // In case any of our lines are larger than 70 characters, we should use wordwrap()
        $message = wordwrap( $this->message, 70, "\r\n");

        // Send
        if (is_array($this->recipients)) {
            foreach($this->recipients as $to) {
                mail($to, $this->subject, $message, $this->headers);        
            }
        } else {
                mail($this->recipients, $this->subject, $this->message, $this->headers);        
        }    
        return 1;
    }
} 
