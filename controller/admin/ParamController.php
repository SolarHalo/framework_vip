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
	public function load($data){
		require_once SERVICE.DS.'admin'.DS.'ParamService.class.php';
		$this->getSmarty();
		$params = $data[0];
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
		$paramService->update($id,$paramname,$paramvalue);
		$arr = array();
		array_push($arr,$paramname);
		 		$this->load($arr);
//		$this->smarty->assign("admin_action_alert",$this->modifySucess());
//		$this->smarty->assign("_POST",$_POST);
//		$this->smarty->display("admin/param.tpl");
		return;
	}
	//查不到此用户
	public function modifySucess(){
		$errohtml="<div class=\"windbox\" id='windbox'><div class=\"wind\" >	<a href=\"#\" class=\"fr\" onclick=\"javascript:closeWin();\"><img src=\"".WEBSITE_URL."public/img/Close-ioc.gif\"/></a><span class=\"Dataerror\">".
        	      "<img src=\"".WEBSITE_URL."public/img/Dataerror.gif\" border=\"0\"/> ".
                  "</span>  </div>	<div class=\"windbg\"></div></div>";
		return $errohtml;

	}
	//查不到此用户
	public function modifyError(){
		$errohtml="<div class=\"windbox\" id='windbox'><div class=\"wind\" >	<a href=\"#\" class=\"fr\" onclick=\"javascript:closeWin();\"><img src=\"".WEBSITE_URL."public/img/Close-ioc.gif\"/></a><span class=\"validationerror zh\">".
        	      "<img src=\"".WEBSITE_URL."public/img/iderror.gif\" border=\"0\"/> ".
                  "</span>  </div>	<div class=\"windbg\"></div></div>";
		return $errohtml;

	}
}
?>