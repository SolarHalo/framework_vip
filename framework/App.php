<?php  
define('PROJECT',ROOT.DS.'framework_vip');
define('CORE',PROJECT.DS.'framework'.DS.'core');
define('CONTROLLER',PROJECT.DS.'controller');
define('COMMON',PROJECT.DS.'common');
define('SERVICE',PROJECT.DS.'service');
define('WEBSITE_URL','http://localhost/');
require_once CORE.DS.'config.php';
require_once CORE.DS.'Router.class.php';
require_once CORE.DS.'Controller.class.php';
require_once CORE.DS.'SmartySetup.class.php';
require_once CORE.DS.'DBUtil.class.php';
require_once COMMON.DS.'ErrorMessage.class.php';
require_once COMMON.DS.'HtmlWrap.class.php';
require_once COMMON.DS.'CommonBase.class.php';

class App{
	function main(){
		$reqUri = $_SERVER['REQUEST_URI'];   
		$route = new Router($reqUri); 
		$filePath = $route->getControllerFilePath();
		if (!file_exists($filePath)) {
            die("con't find the Constroller file!!! <br>the filepath is ".$filePath);
        }   
        session_start();  
        require_once  $filePath;
		$class = $route->getControllerClassName();
		$method = $route->getMethodName();
		$params = $route->getParam();
		if(empty($params)){
			$controller = new $class;
			$controller->$method();
			
		}else{
			call_user_func_array(array($class,$method), $params);
		}
	}
}
 