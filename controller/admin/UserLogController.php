<?php

class UserLogController  extends  Controller{
	public function index(){

		$this->getSmarty();
		$this->smarty->display("admin/userlog.tpl");
	}

	public function getUserLog($condition){

		$page = $_POST['page'];
		$limit = $_POST['rows'];


		require_once SERVICE.DS.'admin'.DS.'UserLogService.class.php';
		$userLogService = new UserLogService($this->getDB());

		$results = $userLogService->getUseLog($page,$limit,$condition);
		
		echo json_encode($results);

	}
	
	public function exportExcel(){
		
	}

	
}
?>