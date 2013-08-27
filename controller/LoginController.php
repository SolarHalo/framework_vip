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
	        
		    $this->smarty->assign("loginErrorWin",$this->verifyCodeHtml()); 
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
				 	$this->smarty->assign("loginErrorWin",$this->loginErrWinMoreOneUser(count($usersTel)));  
				 	$this->smarty->assign("_POST",$_POST); 
				 	$this->smarty->display("login.tpl");     
				 	return;
			 	}else{ 
			 	    $user = $usersTel[0];  
			 	}
		     }else{
		     	$user = $userCard[0]; 
		     } 
		     $log =  $userSerivce->getOneLoginLog($user->cardno); 
		     //确认用户存在了，判断密码
		     if(md5($passwd) != $user->pwd){
		     	       
				 		//密码问题，这里还要判断 这个用户是否是第一次登录 
		     	        if(empty($log)){ 
				 			$this->smarty->assign("loginErrorWin",$this->loginErrForgetpassword1()); 
		     	        }else{
		     	        	$this->smarty->assign("loginErrorWin",$this->loginErrForgetpassword2()); 
		     	        }
					    $this->smarty->assign("_POST",$_POST); 
					 	$this->smarty->display("login.tpl");  
					 	return;
			  }else{ 
			  	  //密码正确，还要判断是不是第一次登录，如果第一次登录转向修改密码，如果非第一次登录转向信息
			 	   $_SESSION['loginuser'] = $user;  
			 	   $vipid = $user->cardid;
			 	   //这里，如果连不上接口，程序等待。。。所以，先注掉，能连接口时开启
			 	   require_once DRIVER.DS.'WebServiceInit.class.php';
			 	   $webServiceInit = new WebServiceInit();
			 	   $client = $webServiceInit->getProxy();
			 	   require_once SERVICE.DS.'InterfaceService.class.php';
			 	   $interfaceService = new InterfaceService($client);
			 	   global $CONFIG;
			 	   $vipInfoArr = $interfaceService->getVipInfo($CONFIG['WEBSERVICE']['userName'], $CONFIG['WEBSERVICE']['passWord'], $vipid);
                   //模拟数据开始
//                   $vipInfoArr =array("vip_no"=>"00001032","name"=>"赵莹莹","sex"=>"女","birthday"=>"1987-08-24","IDCard"=>"210102198708243029","mobilePhones"=>NULL,"eMail"=>NULL,"brand"=>"MiuMiu;MARC JACOBS;","vocation"=>NULL,"ysr"=>NULL,"myxfe"=>NULL,"smsAllow"=>"是");
			 	   $_SESSION['vipInfoArr'] = $vipInfoArr;  
			 	   $userSerivce->recoredLoginLog($user);
			       //正常登录这里还要判断 这个用户是否是第一次登录 
		     	        if(empty($log)){ 
		     	        	$this->smarty->assign("loginErrorWin",$this->loginErrorJump(WEBSITE_URL."usermanager/mdfpasswd")); 
		     	        }else{ 
	     	        	 	//CommonBase::jumpUrl("usermanager"); 
	     	        	 	$url = WEBSITE_URL."usermanager";  
	     	        	 	$redirect = "<script language='javascript' type='text/javascript'>";  
							$redirect .= "window.location.href='$url'";  
							$redirect .= "</script>";  
	     	        	$url = 
	     	        	$this->smarty->assign("loginErrorWin",$redirect); 
	     	        	 
		     	        }
			  }
		 }  
		 
		   
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
	//验证码错误 
  public function verifyCodeHtml(){ 
			$errohtml="<div class=\"windbox\" id='windbox'><div class=\"wind\" >	<a href=\"#\" class=\"fr\" onclick=\"javascript:closeWin();\"><img src=\"".WEBSITE_URL."public/img/Close-ioc.gif\"/></a><span class=\"validationerror zh\">".
        	      "<img src=\"".WEBSITE_URL."public/img/validationerror.gif\" border=\"0\"/> ".
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
//初次登录，忘记密码
	public function loginErrForgetpassword1(){ 
		$errohtml="<div class=\"windbox\" id='windbox'><div class=\"wind\" >	<a href=\"#\" class=\"fr\" onclick=\"javascript:closeWin();\"><img src=\"".WEBSITE_URL."public/img/Close-ioc.gif\"/></a><span class=\"errorpassword\">".
        	     "<img src=\"".WEBSITE_URL."public/img/errorpassword.gif\" border=\"0\"/> ".
                  "</span>  </div>	<div class=\"windbg\"></div></div>";
		return $errohtml;
		
	}
	public function loginout(){ 
		   $_SESSION['loginuser'] = NUll;
		   $_SESSION['vipInfoArr'] = NULL;  
		   $_SESSION['s_date'] = NULL;
		   $_SESSION['e_date'] = NULL;
		   $_SESSION['vipInfoArr'] = NULL;
		   $smaryt = $this->getSmarty();  
	       $this->smarty->display("index.tpl"); 
		   
	}
}