<?php
define('ROOT',dirname(dirname(__FILE__)));
define('DS','/'); 
require_once ROOT.DS.'framework'.DS.'framework'.DS."App.php";
$app = new App();
$app->main();