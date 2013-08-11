<?php
class Activities{
	
	public  $dbutil;
    function __construct($dbutil){
	  	$this->dbutil =  $dbutil;
	} 
	 
	public function getAllActivities(){
		$sql = "select *  from activities";
    	return 	$this->dbutil->get_results($sql);
	}
	
	
	public function countNum(){
		$sql = "select count(id) countnum from admin_users";
    	$resutrnarry=	$this->dbutil->get_results($sql);
    	return $resutrnarry[0]->countnum;
	}
	
	public function addAdUser($data){
		return	$this->dbutil->insert("admin_users", $data);
	}

}