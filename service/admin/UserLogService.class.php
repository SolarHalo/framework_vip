<?php

 class UserLogService{
 	public  $dbutil;
 	
 	function __construct($dbutil){
 		$this->dbutil =  $dbutil;
 	}
 	
 	
 	
 	/**
 	 * 获取分页用户登陆日志
 	 * @param unknown $page
 	 * @param unknown $page_size
 	 * @param string $conditions
 	 * @return unknown
 	 */
 	function getUseLog($page,$page_size,$conditions=null){
 		$sql = "select * from vipuser_loginlog";

 		//拼查询条件
 		$sqlcondition = $this->getSqlCondition($conditions);
 		if(!empty($sqlcondition)){
 			$sql .=$sqlcondition;
 		}
 		
 		$sql .=" order by login_time desc ";
 		
 		//获取总记录数
 		$totalcount = $this->dbutil->getResultNums($sql);
 		
 		//计算起始index和总页数
 		$total_pages= 0;
 		$start = 0;
 		if($totalcount>0){
 			$total_pages = ceil($totalcount/$page_size);
 			$start = ($page-1)*$page_size;
 		}

 		$sql .=" limit $start,$page_size" ;
 		
 		
 		//查询结果
 		$results =  $this->dbutil->get_results($sql);
 		
 		$responce->page = $page;
 		$responce->total = $total_pages;
 		$responce->records = $totalcount;

 		for($i=0;$i<count($results);$i++){
 			$responce->rows[$i]['id']=$results[$i]->id;
 			$responce->rows[$i]['cell'] = $results[$i];
 		}
 		return $responce;
 	}
 	
 	/**
 	 * 拼查询条件
 	 * @param unknown $conditions
 	 * @return string
 	 */
 	function getSqlCondition($conditions){
 		//拼查询条件
 		if(!empty($conditions)){
 			$starttime = $conditions[0];
 			$endtime = $conditions[1];
 			if(!empty($starttime)){
 				$starttimecondition = "login_time>=date_format('".$starttime."','%Y-%c-%d %h:%i:%s')";
 			}
 			if(!empty($endtime)){
 				$endtimecondition = "login_time<date_format('".$endtime."','%Y-%c-%d %h:%i:%s')";
 			}
 			
 			if(!empty($starttimecondition)&&!empty($endtimecondition)){
 				$sqlcondition = $starttimecondition ." and ".$endtimecondition;
 			}else if(!empty($starttimecondition)){
 				$sqlcondition = $starttimecondition;
 			}else if(!empty($endtimecondition)){
 				$sqlcondition = $endtimecondition;
 			}
 			
 			if(!empty($sqlcondition)){
 				$sqlcondition = " where ".$sqlcondition;
 			}
 			return $sqlcondition;
 		}
 	}
 	
 	/**
 	 * 获取无分页用户登陆日志
 	 * @param string $conditions
 	 * @return unknown
 	 */
 	function getUserLogWithoutPage($conditions=null){
 		$sql = "select * from vipuser_loginlog";
 			
 		//拼查询条件
 		$sqlcondition = $this->getSqlCondition($conditions);
 		if(!empty($sqlcondition)){
 			$sql .=$sqlcondition;
 		}
 		
 		$sql.=" order by login_time desc";
 	
 		//查询结果
 		$results =  $this->dbutil->get_results($sql);
 		return $results;
 	}
 	
 	function getExportExcelData($conditions=null){
 		$results = $this->getUserLogWithoutPage($conditions);
 		$data = "cardno"."\t".'login_time'."\n";
 		foreach($results as $result){
 			$data .=$result->cardno;
 			$data.="\t";
 			$data.=$result->login_time;
 			$data.="\n";
 		}
 		return $data;
 	}
 	
 }
?>