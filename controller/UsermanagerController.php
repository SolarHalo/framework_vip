<?php
require_once SERVICE.DS.'UserService.class.php';

class UsermanagerController extends  Controller{
	
	public function index(){ 
		 $smaryt = $this->getSmarty();  
		 //把所有的女士品牌抽出
		 $ladaybrands = array("ochirly","Five Plus","MiuMiu","MARC JACOBS","MICHAEL KORS","initial","Mo&Co","DAZZLE","I.T","Vero Moda","ZARA","H&M","其它/Others");
		 //在session中，取到现在选中的品牌：格式是 品牌1,品牌2...
		   $vipInfoArr = $_SESSION['vipInfoArr'] ;  
		   $brandStr = $vipInfoArr["brand"];
		   $ladaybrandsStr;
		   
		 foreach($ladaybrands as $brandtemp){ 
			  if(strpos($brandStr,$brandtemp)=== false){
			  	$ladaybrandsStr.=$this->returnBrandStr(0,$brandtemp);
			  }else{
			  	$ladaybrandsStr.=$this->returnBrandStr(1,$brandtemp); 
			  }
		 } 
		 $this->smarty->assign("ladaybrand",$ladaybrandsStr); 
		 
		 $this->smarty->display("account.tpl"); 
		  
	}
	
	public function returnBrandStr($selected,$brand){
		//没有选中状态
		if($selected == 0){
			return "<font class='en'><img src='".WEBSITE_URL."public/img/n-iocn.gif'/>$brand </font>";
		}else{//选 中状态 
			return "<font class='en'><img src='".WEBSITE_URL."public/img/y-iocn.gif'/>$brand </font>";
		}
		
	}
	
	public function mdfpasswd(){ 
		 $smaryt = $this->getSmarty();
		 //如果不是post方式的提交，直接转向
		 if(!CommonBase::isPost()){
		 	$this->smarty->display("modifypwd.tpl"); 
		 	return;
		 } 
		 $this->smarty->display("modifypwd.tpl"); 
	} 
	public function mdfuserinfo(){ 
		 $smaryt = $this->getSmarty();
		 //如果不是post方式的提交，直接转向
		 if(!CommonBase::isPost()){
		 	$this->smarty->display("userinfomdf.tpl"); 
		 	return;
		 } 
		 $this->smarty->display("userinfomdf.tpl"); 
	} 
   public function checkinfos(){ 
		 $smaryt = $this->getSmarty();
		 //如果不是post方式的提交，直接转向
		 if(!CommonBase::isPost()){
		 	$this->smarty->display("checkinfos.tpl"); 
		 	return;
		 } 
		 $this->smarty->display("checkinfos.tpl"); 
	} 
	public function morecheckinfos(){ 
		 $smaryt = $this->getSmarty();
		 //如果不是post方式的提交，直接转向
		 if(!CommonBase::isPost()){
		 	$this->smarty->display("morecheckinfo.tpl"); 
		 	return;
		 } 
		 $this->smarty->display("morecheckinfo.tpl"); 
	} 
	
	public function savepwd(){
		$oldpwd = $_POST['oldpwd'];
		$newpwd = $_POST['newpwd'];
		
		$renewpwd = $_POST['renewpwd'];
		
		$user = $_SESSION['loginuser'];
		$pwd = $user->pwd;
		$cardNo = $user->cardno;
		
		$arr = null;
		if($pwd == md5($oldpwd)){
			
			if(strlen($newpwd) < 6 || strlen($newpwd) > 16){
				$arr = array ('success'=>true,'oldpwd'=>true,'vlid'=>false);
			}else{
				if($newpwd != $renewpwd){
					$arr = array ('success'=>true,'oldpwd'=>true,'vlid'=>true,'same'=>false);
				}else{
					if($oldpwd == $newpwd){
						$arr = array ('success'=>true,'oldpwd'=>true,'vlid'=>true,'same'=>true,'change'=>false);
					}else{
						
						//更新
						$dbutil = $this->getDB();
							
						$service = new UserService($dbutil);
							
						$service->updatePasswd($cardNo, md5($newpwd));
							
						$user->pwd = md5($newpwd);
						$arr = array ('success'=>true,'oldpwd'=>true,'vlid'=>true,'same'=>true,'change'=>true);
					}
				}
			}
		}else{
			$arr = array ('success'=>true,'oldpwd'=>false);
		}
		echo json_encode($arr);
		
		
	}
}