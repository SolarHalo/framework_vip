<?php
class UserService{
	
	public  $dbutil;
    function __construct($dbutil){
	  	$this->dbutil =  $dbutil;
	} 
   /**
	 * 
	 * 修改会员的密码
	 * @param unknown_type $cardNo
	 * @param unknown_type $newPasswd
	 */
	function updatePasswd($cardNo,$newPasswd){
		return $this->dbutil-> update( "vip_users", array("pwd"=>$newPasswd), array("cardno"=>$cardNo));
	}
    /**
	 * 根据手机号用户信息
	 * Enter description here ...
	 * @param unknown_type $name
	 */
	function getUserByTel($tel){
		return $this->dbutil->get_results("select * from vip_users where tel='$tel' and  status = 0");
	}
	   
   /**
	 * 根据卡号用户信息
	 * Enter description here ...
	 * @param unknown_type $name
	 */
	function getUserByCarNo($cardNo){
		return $this->dbutil->get_results("select * from vip_users where cardno='$tel' and  status = 0");
	}
	
}