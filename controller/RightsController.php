<?php
class RightsController extends  Controller{

	public function index(){
		$smaryt = $this->getSmarty();
		require_once SERVICE.DS.'admin'.DS.'ParamService.class.php';
		$this->getSmarty();
		$params = 'rights';
		$paramService = new ParamService($this->getDB());
		$parame = $paramService->getParamByname($params);

		//print_r($parame[0]->id);

		if(count($parame) >=1){
			//			$this->smarty->assign("id",$parame[0]->id);
			//			$this->smarty->assign("name",$parame[0]->paramname);

			$parvalue =str_replace('{{$smarty.const.WEBSITE_URL}}',WEBSITE_URL, $parame[0]->paramvalue);
			$this->smarty->assign("paramvalue",$parvalue);
		}
		//		$this->smarty->display("admin/param.tpl");

		$this->smarty->display("rights.tpl");
	}
}