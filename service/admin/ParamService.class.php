<?php

class ParamService{
	public  $dbutil;

	function __construct($dbutil){
		$this->dbutil =  $dbutil;
	}

	/**
	 *
	 * 获取指定系统参数的内容
	 * @param unknown_type $paramname
	 */
	function getParamByname($paramname){
		return $this->dbutil->get_results("select * from vip_param where paramname='$paramname' limit 1");
	}

	function update($id,$paramname,$paramvalue){
		return $this->dbutil->update("vip_param", array("paramname"=>$paramname,"paramvalue"=>$paramvalue), array("id"=>$id));
	}
	
 
}
?>