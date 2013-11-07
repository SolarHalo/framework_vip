<?php
header("Content-type:application/vnd.ms-excel");
header("Content-Disposition:attachment;filename=emaillog.xls");

require_once '../../framework/core/config.php'; 
require '../../framework/core/DBUtil.class.php';

global  $CONFIG;
$dbutil = new DbUtil($CONFIG['DB']['db_host'], $CONFIG['DB']['db_user'], $CONFIG['DB']['db_password'], $CONFIG['DB']['db_database']); 
$condition = array();
array_push($condition,$_GET['starttime']);
array_push($condition,$_GET['endtime']);
$sql = "select * from emailcount"; 
$sqlcondition;	
 		if(!empty($condition)){
 			$starttime = $condition[0];
 			$endtime = $condition[1];
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
 		 
 		} 
 		if(!empty($sqlcondition)){
 			$sql .=$sqlcondition;
 		}
 		
 		$sql.=" order by senddate desc";
 	
 		//查询结果
 		$results =  $dbutil->get_results($sql);
 		
$data = "date"."\t".'count'."\t".'vipno'."\n";
 		foreach($results as $result){
 			$data .=$result->senddate;
 			$data.="\t";
 			$data.=$result->sendcount;
 			$data.="\t";
 			$data.=$result->vipno;
 			$data.="\n";
 		}
echo $data;
?>