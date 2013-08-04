<?php
define('ROOT',dirname(dirname(__FILE__)));
echo ROOT;
define('DS','/'); 
require_once ROOT.DS.'framework_vip'.DS.'framework'.DS."App.php";
$app = new App();
$app->main();