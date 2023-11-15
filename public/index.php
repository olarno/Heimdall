<?php 

require_once '../vendor/autoloader.php';

use Application\Controllers\HelloController;
// use Application\Controllers\BonsoirController;
use Api\Controllers\ApiController;
use Framework\Logger\Logger;

$GLOBALS['logger'] = new Logger(dirname(__DIR__) . '/logs/app.log');


$controller = new HelloController();
echo $controller->sayHello();

// $controller = new BonsoirController();

$godsByApi = new ApiController();
echo $godsByApi->GetResult();