<?php

class ParamController  extends  Controller{
	public function index(){

		$this->getSmarty();
		$this->smarty->assign("id","数据库id "); 
		$this->smarty->assign("name","数据库查标题 "); 
		$this->smarty->assign("value","数据库查内容");  
		$this->smarty->display("admin/param.tpl");
	}

	public function getUserLog($condition){

		$page = $_POST['page'];
		$limit = $_POST['rows'];
		
		require_once SERVICE.DS.'admin'.DS.'UserLogService.class.php';
		$userLogService = new UserLogService($this->getDB());

		$results = $userLogService->getUseLog($page,$limit,$condition);
		
		echo json_encode($results);

	}

	
}
?>