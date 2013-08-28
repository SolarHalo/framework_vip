<?php
 
class IndexController extends  Controller{
	
	public function index(){ 
	 $smaryt = $this->getSmarty(); 
	  require_once SERVICE.DS.'admin'.DS.'ParamService.class.php';
	 
		$params = 'google';
		$paramService = new ParamService($this->getDB());
		$parame = $paramService->getParamByname($params);
		$this->smarty->assign("googleanylze",$parame);
	    $this->smarty->display("index.tpl"); 
	}
	
}