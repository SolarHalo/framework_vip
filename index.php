<?php
define('ROOT',dirname(dirname(__FILE__)));
define('DS','/'); 
define('PROJECT',ROOT.DS.'framework');  
require_once PROJECT.DS.'framework'.DS."App.php"; 
$app = new App();
$app->main();