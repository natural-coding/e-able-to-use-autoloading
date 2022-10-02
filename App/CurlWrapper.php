<?php

namespace App;
use Interfaces\BrowserInterface;

class CurlWrapper implements BrowserInterface
{
   public function DoGetRequest()
   {
      print __METHOD__ . PHP_EOL;
   }
}