<?php

 class Logger
 {
     private static $instance;

     protected function __construct(){

     }
     private function __clone(){

     }
     private function __wakeup(){

     }
     public static function getInstance()
     {
         if(!isset(self::$instance))
         {
             self::$instance = new self;
         }
     }
 }

