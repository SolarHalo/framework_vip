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
	$CONFIG['DB']= array(
    'db_host'           =>      '127.0.0.1',
    'db_user'           =>      'root',
    'db_password'       =>      '',
    'db_database'       =>      'test1',
    'db_table_prefix'   =>      'app_',
    'db_charset'        =>      'urf8'   
	);
	$CONFIG['WEBSERVICE']= array(
	    "url"               => "http://172.17.3.196/Test/service/VipService?wsdl",
	    "userName" 			=> "trendy",
	    "passWord" 			=> "webvip_7uj*IK-2013"
	);
	global $CONFIG;
    require_once DRIVER.DS.'WebServiceInit.class.php';
	$webServiceInit = new WebServiceInit();
	$client = $webServiceInit->getProxy();
    require_once CORE.DS.'DBUtil.class.php';
	$db = new DbUtil($CONFIG['DB']['db_host'], $CONFIG['DB']['db_user'], $CONFIG['DB']['db_password'], $CONFIG['DB']['db_database']);
	require_once SERVICE.DS.'InterfaceService.class.php';
	$interfaceService = new InterfaceService($client, $db);
		
		
ignore_user_abort(); //即使Client断开(如关掉浏览器)，PHP脚本也可以继续执行.
set_time_limit(0); // 执行时间为无限制，php默认的执行时间是30秒，通过set_time_limit(0)可以让程序无限制的执行下去
$interval=30*1; // 每隔5分钟运行
do{
	$dtsstate = $db->get_var('select dtsstate from vip_users where id = (SELECT max(id) FROM vip_users);');
	$returnInfo = $interfaceService->syncVipInfo($CONFIG['WEBSERVICE']['userName'], $CONFIG['WEBSERVICE']['passWord'], empty($dtsstate)?null:$dtsstate);
	
	file_put_contents('F:\\log.txt',$returnInfo);
	sleep($interval); // 等待5分钟
}while(true);
?>