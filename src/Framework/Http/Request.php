<?php

namespace Framework\Http;

class Request {
      public function __construct() {}

      
      public function getQueryParams()  {

            return $_GET ;
      }
      //POST, PUT, PATCH
      public function getParsedBody()  {

            return $_POST ?? null;
      }

      
}
