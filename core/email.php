<?php
/**
 * Email class to send any number of emails
 *
 */
namespace core;

class email {
 
    // store sender set in bootstrap
    private $email_reciever = EMAIL_RECIEVER;
    
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
    
    public function __construct($sender, $message, $subject, $cc=NULL)
    {
        if (!filter_var($sender, FILTER_VALIDATE_EMAIL) === false) {
           throw new \Exception("Not a valid email address");           
        }
        if (!filter_var($this->email_reciever, FiLTER_VALIDATE_EMAIL) === false){
           throw new \Exception("Reciever email is not valid");
        }
        $headers = "From: " . $sender . "\r\n";
        $headers .= "MIME-VERSION: 1.0\r\n";
        $headers .= "Content-type: text/html\r\n";
        $this->headers = $headers;
        $this->message = $message;
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
         mail($this->email_reciever, $this->subject, $this->message, $this->headers);        
           
        return 1;
    }
} 
