<?php

class EmailController  extends  Controller{

	public function index(){
		require_once SERVICE.DS.'admin'.DS.'ParamService.class.php';
		$this->getSmarty();
		$params = 'faq';
		$dbutil = $this->getDB();
		$sql = "select * from email_set";
		$emailinfo = $dbutil->get_results($sql);
		 
		if(count($emailinfo) >=1){
			$this->smarty->assign("smtp",$emailinfo[0]->smtp);
			$this->smarty->assign("username",$emailinfo[0]->username);
			$this->smarty->assign("pwd",$emailinfo[0]->pwd);
			$this->smarty->assign("id",$emailinfo[0]->id);
		}
		$this->smarty->display("admin/email.tpl");
	}
	 

	public function update(){ 
		$smtp = $_POST['smtp'];
		$username = $_POST['username'];
		$pwd = $_POST['pwd']; 
		$id=$_POST['id']; 
		$dbutil = $this->getDB();
		$data = array("smtp"=>$smtp,"username"=>$username,"pwd"=>$pwd);
		$where = array("id"=>$id);
		//print_r($where);
		$dbutil->update("email_set", $data,$where);
		return $this->index();
	}
	 
	public function emailcount(){
		$this->getSmarty();
		 
		$this->smarty->display("admin/sendemail.tpl");
	}
   public function emailLogs($sqlcondition){

		$page = $_POST['page'];
		$limit = $_POST['rows']; 
	    $dbutil = $this->getDB();
	    $sql="select * from emailcount ";
	    $sqlcondition = $this->getSqlCondition($sqlcondition);
        if(!empty($sqlcondition)){
 			$sql .=$sqlcondition;
 		}
 		$sql .=" order by senddate desc";
        $totalcount = $dbutil->getResultNums($sql);
		 	//计算起始index和总页数
 		$total_pages= 0;
 		$start = 0;
 		if($totalcount>0){
 			$total_pages = ceil($totalcount/$page_size);
 			$start = ($page-1)*$page_size;
 		}

 		$sql .=" limit $start,$limit" ;
		$results =  $dbutil->get_results($sql);
    	$responce->page = $page;
 		$responce->total = $total_pages;
 		$responce->records = $totalcount;

 		for($i=0;$i<count($results);$i++){
 			$responce->rows[$i]['id']=$results[$i]->id;
 			$responce->rows[$i]['cell'] = $results[$i];
 		}
		
		echo json_encode($responce);

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
 				$starttimecondition = "senddate>=date_format('".$starttime."','%Y-%c-%d')";
 			}
 			if(!empty($endtime)){
 				$endtimecondition = "senddate<date_format('".$endtime."','%Y-%c-%d')";
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
 	
}
?>