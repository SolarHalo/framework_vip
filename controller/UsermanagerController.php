<?php
require_once SERVICE.DS.'UserService.class.php';

class UsermanagerController extends  Controller{
	
	public function index(){ 
		 $smaryt = $this->getSmarty(); 
		 $this->smarty->display("account.tpl"); 
		  
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