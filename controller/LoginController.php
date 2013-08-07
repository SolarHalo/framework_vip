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
		 	require_once SERVICE.DS.'UserService.class.php';
		 	$userSerivce = new UserService($this->getDB());
		 	$usersTel = $userSerivce->getUserByTel($username); 
		 	$userCard = $userSerivce->getUserByCarNo($username); 
		 	$user;
		 //ppt第35页,用户不存在的情况下
		 if(empty($usersTel) and empty($userCard)){
		 	$this->smarty->assign("loginErrorWin",$this->loginErrWinNoUser());  
		 	$this->smarty->assign("_POST",$_POST); 
		 	$this->smarty->display("login.tpl");     
		 	return; 
		 }else{
		 	 //用户存在的情况下，先判断用户是登录的卡号，还是手机号
		    if(!empty($usersTel)){	
			 	//手机号登录，要判断下面挂 的是不是一张卡
			 	if(count($usersTel) > 1){
				 	$this->smarty->assign("loginErrorWin",$this->loginErrWinMoreOneUser(count($users)));  
				 	$this->smarty->assign("_POST",$_POST); 
				 	$this->smarty->display("login.tpl");     
				 	return;
			 	}else{ 
			 	    $user = $usersTel[0];  
			 	}
		     }else{
		     	$user = $userCard[0]; 
		     } 
		     //确认用户存在了，判断密码
		     if(md5($passwd) != $user->pwd){
				 		//密码问题，这里还要判断 这个用户是否是第一次登录
				 		$this->smarty->assign("loginErrorWin",$this->loginErrForgetpassword2()); 
					    $this->smarty->assign("_POST",$_POST); 
					 	$this->smarty->display("login.tpl");  
					 	return;
			  }else{ 
			  	  //密码正确，还要判断是不是第一次登录，如果第一次登录转向修改密码，如果非第一次登录转向信息
			 	   $_SESSION['loginuser'] = $user;  
			  }
		 } 
		 
		  $this->smarty->assign("loginErrorWin",$this->loginErrorJump(WEBSITE_URL."usermanager/mdfpasswd")); 
		  $this->smarty->assign("_POST",$_POST); 
		 $this->smarty->display("login.tpl"); 
	}
	//资料要全
	public function loginErrWinHtmlZlBQ(){ 
		$errohtml="<div class=\"windbox\" id='windbox'><div class=\"wind\" >	<a href=\"#\" class=\"fr\" onclick=\"javascript:closeWin();\"><img src=\"".WEBSITE_URL."public/img/Close-ioc.gif\"/></a><span class=\"Dataerror\">".
        	      "<img src=\"".WEBSITE_URL."public/img/Dataerror.gif\" border=\"0\"/> ".
                  "</span>  </div>	<div class=\"windbg\"></div></div>";
		return $errohtml;
		
	}
	 //成功以后的跳转
   public function loginErrorJump($url){ 
		$errohtml="<div class=\"windbox\" id='windbox'><div class=\"wind\" >	<a href=\"#\" class=\"fr\" onclick=\"javascript:closeWinJump('$url');\"><img src=\"".WEBSITE_URL."public/img/Close-ioc.gif\"/></a><span class=\"firstlogin-y\">".
        	      "<img src=\"".WEBSITE_URL."public/img/firstlogin-y.gif\" border=\"0\" usemap=\"#Map02\"/> <map name=\"Map02\"> <area shape=\"rect\" coords=\"4,112,74,136\" href=\"$url\"></map>".
                  "</span>  </div>	<div class=\"windbg\"></div></div>";
		return $errohtml;
		
	}
	//文字的框
   public function ModifyHtmlWord($content){ 
		$errohtml="<div class=\"windbox\" id='windbox'><div class=\"wind\" >	<a href=\"#\" class=\"fr\" onclick=\"javascript:closeWin();\"><img src=\"".WEBSITE_URL."public/img/Close-ioc.gif\"/></a><span class=\"recordlistpagewind zh\">".
        	      "$content".
                  "</span>  </div>	<div class=\"windbg\"></div></div>";
		return $errohtml;
		
	}
    //查不到此用户
	public function loginErrWinNoUser(){ 
		$errohtml="<div class=\"windbox\" id='windbox'><div class=\"wind\" >	<a href=\"#\" class=\"fr\" onclick=\"javascript:closeWin();\"><img src=\"".WEBSITE_URL."public/img/Close-ioc.gif\"/></a><span class=\"validationerror zh\">".
        	      "<img src=\"".WEBSITE_URL."public/img/iderror.gif\" border=\"0\"/> ".
                  "</span>  </div>	<div class=\"windbg\"></div></div>";
		return $errohtml;
		
	}
    //多卡用户
	public function loginErrWinMoreOneUser($n){ 
		$errohtml="<div class=\"windbox\" id='windbox'><div class=\"wind\" >	<a href=\"#\" class=\"fr\" onclick=\"javascript:closeWin();\"><img src=\"".WEBSITE_URL."public/img/Close-ioc.gif\"/></a><span class=\"vipidtitle zh\">".
        	      "您的手机号码共登记<font><b>$n</b></font>张VIP卡，<br>请输入您所需查询的卡号登录。".
                  "</span>  </div>	<div class=\"windbg\"></div></div>";
		return $errohtml;
		
	}
 //再次登录，忘记密码
	public function loginErrForgetpassword2(){ 
		$errohtml="<div class=\"windbox\" id='windbox'><div class=\"wind\" >	<a href=\"#\" class=\"fr\" onclick=\"javascript:closeWin();\"><img src=\"".WEBSITE_URL."public/img/Close-ioc.gif\"/></a><span class=\"forgotpassword\">".
        	     "<img src=\"".WEBSITE_URL."public/img/forgotpassword.gif\" border=\"0\"/> ".
                  "</span>  </div>	<div class=\"windbg\"></div></div>";
		return $errohtml;
		
	}
}