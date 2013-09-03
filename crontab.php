<?php

define('ROOT',dirname(dirname(__FILE__))); //项目部署目录的上一级 
	define('PROJECT',dirname(__FILE__));       //项目部署目录
	define('DS',DIRECTORY_SEPARATOR );         //系统提供文件路径分隔符  
	$appPhpFile = PROJECT.DS.'framework'.DS."App.php"; //系统MVC统一入口
	define('CORE',PROJECT.DS.'framework'.DS.'core');
	define('CONTROLLER',PROJECT.DS.'controller');
	define('COMMON',PROJECT.DS.'common');
	define('LIB',PROJECT.DS.'framework'.DS.'lib');
	define('SERVICE',PROJECT.DS.'service');
	define('SMARTY_DIR', PROJECT.'/framework/lib/Smarty-3.1.13/libs/');
	define('NUSOAP_DIR',PROJECT.'/framework/lib/nusoap-0.9.5/lib/');
	define('DRIVER',PROJECT.DS.'framework'.DS.'driver');

    
    require_once DRIVER.DS.'WebServiceInit.class.php';
	$webServiceInit = new WebServiceInit();
	$client = $webServiceInit->getProxy();
	require_once SERVICE.DS.'InterfaceService.class.php';
	$interfaceService = new InterfaceService($client);
	echo $CONFIG;
	global $CONFIG;
		
	$returnInfo = $interfaceService->syncVipInfo($CONFIG['WEBSERVICE']['userName'], $CONFIG['WEBSERVICE']['passWord'], null);
	
	var_dump($returnInfo);
	
		
/*ignore_user_abort(); //即使Client断开(如关掉浏览器)，PHP脚本也可以继续执行.
set_time_limit(0); // 执行时间为无限制，php默认的执行时间是30秒，通过set_time_limit(0)可以让程序无限制的执行下去
$interval=30*1; // 每隔5分钟运行
do{
	echo "sss";
	
	sleep($interval); // 等待5分钟
}while(true);*/
?>