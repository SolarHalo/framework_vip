<?php
class LoginController extends  Controller{
	
	public function index(){ 
		 $smaryt = $this->getSmarty();
		 //如果不是post方式的提交，直接转向
		 if(!CommonBase::isPost()){
		 	$this->smarty->display("login.tpl"); 
		 	return;
		 } 
		 $username = $passwd  = $verify_code = '';
	     extract ( $_POST, EXTR_IF_EXISTS ); 
	     //资料不全的情况
		 if($username=='请输入会员卡号或手机号码任意一项' || $passwd ==''){ 
		 	$this->smarty->assign("loginErrorWin",$this->loginErrWinHtmlZlBQ()); 
		 	$this->smarty->assign("_POST",$_POST); 
		 	$this->smarty->display("login.tpl");     
		 	return;
		 } 
		 //验证码不对的情况下
	     if(strtolower($verify_code) != strtolower($_SESSION['osa_verify_code'])){
		    $this->smarty->assign("loginErrorWin",$this->ModifyHtmlWord("您输入的验证码不正确，请重新输入")); 
		    $this->smarty->assign("_POST",$_POST); 
		 	$this->smarty->display("login.tpl");  
		 	return;
		 }  
		 //ppt第35页,用户不存在的情况下
		 if($username!="admin"){
		 	
		 }else{
		 	//密码不对的情况下
		 	if($passwd != "admin"){
		 		
		 	}else{ 
		 		//还要查看登记的卡的个数 
		 		//if 用户信息中的card 个数大于1
		 	}
		 	
		 } 
		   $this->smarty->assign("loginErrorWin",$this->loginErrorJump(WEBSITE_URL."usermanager")); 
		    $this->smarty->assign("_POST",$_POST); 
		 $this->smarty->display("login.tpl"); 
	}
	
	public function loginErrWinHtmlZlBQ(){ 
		$errohtml="<div class=\"windbox\" id='windbox'><div class=\"wind\" >	<a href=\"#\" class=\"fr\" onclick=\"javascript:closeWin();\"><img src=\"".WEBSITE_URL."public/img/Close-ioc.gif\"/></a><span class=\"Dataerror\">".
        	      "<img src=\"".WEBSITE_URL."public/img/Dataerror.gif\" border=\"0\"/> ".
                  "</span>  </div>	<div class=\"windbg\"></div></div>";
		return $errohtml;
		
	}
	 
   public function loginErrorJump($url){ 
		$errohtml="<div class=\"windbox\" id='windbox'><div class=\"wind\" >	<a href=\"#\" class=\"fr\" onclick=\"javascript:closeWinJump('$url');\"><img src=\"".WEBSITE_URL."public/img/Close-ioc.gif\"/></a><span class=\"firstlogin-y\">".
        	      "<img src=\"".WEBSITE_URL."public/img/firstlogin-y.gif\" border=\"0\" usemap=\"#Map02\"/> <map name=\"Map02\"> <area shape=\"rect\" coords=\"4,112,74,136\" href=\"#\"></map>".
                  "</span>  </div>	<div class=\"windbg\"></div></div>";
		return $errohtml;
		
	}
   public function ModifyHtmlWord($content){ 
		$errohtml="<div class=\"windbox\" id='windbox'><div class=\"wind\" >	<a href=\"#\" class=\"fr\" onclick=\"javascript:closeWin();\"><img src=\"".WEBSITE_URL."public/img/Close-ioc.gif\"/></a><span class=\"recordlistpagewind zh\">".
        	      "$content".
                  "</span>  </div>	<div class=\"windbg\"></div></div>";
		return $errohtml;
		
	}
}