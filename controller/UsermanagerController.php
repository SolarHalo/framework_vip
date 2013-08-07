<?php
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
		
		$user = $_SESSION['loginuser'];
		$pwd = $user->pwd;
		
		$arr = null;
		if($pwd == $oldpwd){
			//更新
			$dbutil = $this->getDB();
			$service = new UserService($dbutil);
			
			$cardNo = $user->cardno;
			
			$service->updatePasswd($cardNo, $newpwd);
			
			$arr = array ('success'=>true,'oldpwd'=>true);
		}else{
			$arr = array ('success'=>true,'oldpwd'=>false);
		}
		echo json_encode($arr);
	}
}