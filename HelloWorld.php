<?php

// I created it just for learning GitHub/Packagist. Do not take it seriously!

namespace Nimasdj;

class HelloWorld (
      
      private $message;
      
      public function __construct($message) {
             $this->message = $message;
      }

     public function doSomething() {
            return $this->message;
     }
);
