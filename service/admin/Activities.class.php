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
	public function activityByid($id){
		$result = array();
		$sqlactivi = "select a.*,f.id as f_id,f.imgname,f.default_show  from activities a,files f where a.id=f.activ_id and a.id = $id  order by default_show desc"; 
    	 $actitities = $this->dbutil->get_results($sqlactivi);  
    	 return $actitities;  
	}
    public function finddefaultImgIdByid($id){
		$result = array();
		$sqlactivi = "select  f.id   from activities a,files f where a.id=f.activ_id and a.id = $id and f.default_show=1"; 
    	$actitities = $this->dbutil->get_results($sqlactivi);  
    	return $actitities[0];
	}
	
	public function delactivity($id){
		$delactivity = "delete from activities where id = $id";
		$files = "delete from files where activ_id = $id";
		$this->dbutil->query($delactivity);
		$this->dbutil->query($files);
	}
	public function delFilesByacId($id){
		$files = "delete from files where activ_id = $id"; 
		$this->dbutil->query($files);
	}
	 
	public function insertActivity($data){
	    $this->dbutil->insert("activities", $data); 
		return $this->dbutil->insert_id;
	}
	public function updateActivity($data,$id){
		    $where = array("id"=>$id);
		   $this->dbutil->update('activities', $data, $where);
		
	}
	public function insertFiles($data){
	  return  $this->dbutil->insert("files", $data);  
	}
}