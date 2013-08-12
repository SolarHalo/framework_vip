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
	 
   public function updateorinsert(){ 
      	header('Content-Type:text/json;charset=utf-8');
	    $files  = $_POST['files'];
//	    $name = iconv( 'UTF-8', 'gb2312' , $_POST['activities_name']); 
	    $name =  $_POST['activities_name']; 
	    $desc = $_POST['activities_desc'];
	    $defaultimg = $_POST['defaultimgs'];
	    $imgtype = $_POST['imgtype'];
	    
	    $data = array("acti_name"=>$name,"acti_desc"=>$desc,"acti_type"=>$imgtype);
	    require_once SERVICE.DS.'admin'.DS.'Activities.class.php';
	    $activities = new Activities($this->getDB()); 
	    $id = $activities->insertActivity($data);
	    foreach ($files as $file) {
	    	$imgdata = array("activ_id"=>$id,"imgname"=>$file,"default_show"=>0);
	    	if(strcmp($file,$defaultimg) == 0){
	    		$imgdata['default_show'] = 1;
	    	}
	        $file_path = PROJECT.DS.'upload'.DS;
	        $file_newfilepath = $file_path.$id;
	       
            if(!file_exists($file_newfilepath)){
            	mkdir($file_newfilepath, 0777);
            }
            rename($file_path.$file,$file_newfilepath.DS.$file);
             
           $activities->insertFiles($imgdata);
         } 
		echo  json_encode($data);
	}
	 
	 
}
?>