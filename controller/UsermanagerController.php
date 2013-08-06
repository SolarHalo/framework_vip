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
		$arr = array ('success'=>true,'oldpwdvar'=>true);
		echo json_encode($arr);
	}
}