<?php

use App\CurlWrapper;

spl_autoload_register();

$obj = new MyObj();

$curl = new CurlWrapper();

$curl->DoGetRequest();