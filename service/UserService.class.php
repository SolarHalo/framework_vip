<?php
class UserService{
	
	public  $dbutil;
    function __construct($dbutil){
	  	$this->dbutil =  $dbutil;
	} 
	public  function checkPassword($username,$passwd){
		$md5_pwd = md5 ( $passwd );
		//连接数据库查询用户名，密码
	     $admin = $this->getUserByName($name);
		if($admin){
			if($admin->pwd == $password){
				return $admin;
			}else{
				return false;
			}
		}else{
			return false;
		}
		 
		return $admin; 
	}
   /**
	 * 根据手机号用户信息
	 * Enter description here ...
	 * @param unknown_type $name
	 */
	function getUserByTel($tel){
		return $this->dbutil->get_results("select * from vip_users where tel='$tel' and  status = 0");
	}
	   
}