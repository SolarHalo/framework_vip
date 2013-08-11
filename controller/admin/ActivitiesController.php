<?php

class ActivitiesController  extends  Controller{
	public function index(){ 
		$this->getSmarty();
	    require_once SERVICE.DS.'admin'.DS.'Activities.class.php';
		$activities = new Activities($this->getDB());
		
		
		$this->smarty->assign("activitis",$activities->getAllActivities() ); 
		 
		$this->smarty->display("admin/activities.tpl");
	} 

      public function add(){ 
		$this->getSmarty(); 
		$this->smarty->display("admin/activities_add.tpl");
	 }
	 public function fileupload(){
		 $file_path = PROJECT.DS.'upload/';
		 $file_up = $file_path.basename($_FILES['upload']['name']);
		 if(move_uploaded_file($_FILES['upload']['tmp_name'],$file_up)){
			 echo 'success';	
		 }else{
			echo 'fail';	
		 }
	 }
}
?>