<?php
class FaqController extends  Controller{

	public function index(){
		$smaryt = $this->getSmarty();

		require_once SERVICE.DS.'admin'.DS.'ParamService.class.php';
		$this->getSmarty();
		$params = 'faq';
		$paramService = new ParamService($this->getDB());
		$parame = $paramService->getParamByname($params);

		//print_r($parame[0]->id);

		if(count($parame) >=1){
//			$this->smarty->assign("id",$parame[0]->id);
//			$this->smarty->assign("name",$parame[0]->paramname);
			$this->smarty->assign("paramvalue",$parame[0]->paramvalue);
		}
//		$this->smarty->display("admin/param.tpl");
			
		$this->smarty->display("faq.tpl");
	}
}