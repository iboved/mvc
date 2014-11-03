<?php

require_once 'vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Iboved\IbovedKernel;

$request = Request::createFromGlobals();

$kernel = new IbovedKernel();
$response = $kernel->handle($request);

$response->send();
