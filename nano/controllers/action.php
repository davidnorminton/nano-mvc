<?php
namespace nano\controllers;

class action
{
    public function __construct()
    {
       echo "hello from " . __METHOD__ ; 
    }
    
    public static function help(){
       echo "hello world from " . __METHOD__;
    }
}
