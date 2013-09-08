<?php

class CrontabController extends  Controller{
	public function index(){ 
		require_once DRIVER.DS.'WebServiceInit.class.php';
		$webServiceInit = new WebServiceInit();
		$client = $webServiceInit->getProxy();
		require_once SERVICE.DS.'InterfaceService.class.php';
		$interfaceService = new InterfaceService($client, $this->getDB());
		global $CONFIG;
		ignore_user_abort(); //即使Client断开(如关掉浏览器)，PHP脚本也可以继续执行.
		set_time_limit(0); // 执行时间为无限制，php默认的执行时间是30秒，通过set_time_limit(0)可以让程序无限制的执行下去
		$interval=3600*2; // 每隔2小时运行
		do{
			$db =  $this->getDB();
			$dtsstate = $db->get_var('select dtsstate from vip_users where id = (SELECT max(id) FROM vip_users);');
			$returnInfo = $interfaceService->syncVipInfo($CONFIG['WEBSERVICE']['userName'], $CONFIG['WEBSERVICE']['passWord'], empty($dtsstate)?null:$dtsstate);
			sleep($interval); // 等待2小时
		}while(true);
	}
}