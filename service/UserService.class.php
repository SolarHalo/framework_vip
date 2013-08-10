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
		return $this->dbutil->get_results("select * from vip_users where cardno='$cardNo' and  status = 0");
	}
	
    /**
	 * 记录用户的登录日志
	 *  
	 * @param unknown_type $user
	 */
	function recoredLoginLog($user){
		 $log = array("cardno"=>$user->cardno,"login_type"=>1,"login_time"=> date('Y-m-d', time()));
		return $this->dbutil->insert("vipuser_loginlog", $log);
	}
	 /**
	 *  
	 * 判断此用户是否是有登录日志
	 * @param unknown_type $cardno
	 */
	function getOneLoginLog($cardno){
		return $this->dbutil->get_results("select * from vipuser_loginlog where cardno='$cardno' limit 1");
	}
	
	
}