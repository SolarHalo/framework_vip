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
		 $log = array("cardno"=>$user->cardno,"login_type"=>1,"login_time"=> date('Y-m-d  H:i:s', time()));
		return $this->dbutil->insert("vipuser_loginlog", $log);
	}
	 /**
	 *  
	 * 判断此用户是否是有登录日志
	 * @param unknown_type $cardno
	 */
	function getOneLoginLog($cardno){
		$logs = $this->dbutil->get_results("select * from vipuser_loginlog where cardno='$cardno' limit 1");
		return $logs[0];
	}
	
	 /**
	 *  
	 * 接口更新手机号码
	 * @param unknown_type $cardno
	 */
	function updateUserPhone($tel, $cardNo){
		return $this->dbutil-> update( "vip_users", array("tel"=>$tel.trim()), array("cardno"=>$cardNo));
	}
	
}