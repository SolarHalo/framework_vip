<?php

class ParamController  extends  Controller{
	public function index(){
		require_once SERVICE.DS.'admin'.DS.'ParamService.class.php';
		$this->getSmarty();
		$params = 'faq';
		$paramService = new ParamService($this->getDB());
		$parame = $paramService->getParamByname($params);

		//print_r($parame[0]->id);

		if(count($parame) >=1){
			$this->smarty->assign("id",$parame[0]->id);
			$this->smarty->assign("name",$parame[0]->paramname);
			$this->smarty->assign("value",$parame[0]->paramvalue);
		}
		$this->smarty->display("admin/param.tpl");
	}


	public function update(){

		require_once SERVICE.DS.'admin'.DS.'ParamService.class.php';
		$this->getSmarty();

		$id = $_POST['id'];
		$paramname = $_POST['paramname'];
		$paramvalue = stripslashes($_POST['paramvalue']);
		$paramService = new ParamService($this->getDB());
		$updata = $paramService->update($id,$paramname,$paramvalue);
		$this->index();
	}
 
}
?>