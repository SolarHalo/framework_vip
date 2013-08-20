<?php
class ActivitiesController extends  Controller{
	
	public function index(){ 
		 $smaryt = $this->getSmarty();  
		require_once SERVICE.DS.'admin'.DS.'Activities.class.php';
		$activities = new Activities($this->getDB()); 
		 $alldatas= $activities->getAllActivities(); 
		
		 $html;
		foreach($alldatas as $activity){
			if($activity->acti_type == 1 ){
				$acAdFiles = $activities->activityByid($activity->id);
			  	$html .= $this->createImages($activity,$acAdFiles);
			}else{
				$acAdFiles = $activities->activityByid($activity->id);
				$html .= $this->createVidio($activity,$acAdFiles);
			}
		}
		 
		 $this->smarty->assign("activitishtml",$html);
		 $this->smarty->display("Activities.tpl"); 
	}
	
    public function media($param){ 
		 $smaryt = $this->getSmarty();  
		 
		 $imgfile =WEBSITE_URL."public/video/1.jpg";
		 $vidiopath = WEBSITE_URL."public/video/1.mp4";
		   if($param[0] != "-1"){
		   	  require_once SERVICE.DS.'admin'.DS.'Activities.class.php';
	          $activities = new Activities($this->getDB()); 
		      $acAdFiles = $activities->activityByid($param[0]); 
		      $imgfile1 = $acAdFiles[0];
		      $vidiofile1 = $acAdFiles[1];
		     $imgfile = WEBSITE_URL."upload/$imgfile1->id/$imgfile1->imgname";
		     $vidiopath=WEBSITE_URL."upload/$vidiofile1->id/$vidiofile1->imgname";
		      
		   }
		   $this->smarty->assign("imgpath",$imgfile);
		   $this->smarty->assign("vidiopath",$vidiopath);
		 $this->smarty->display("media.tpl"); 
	}
	
	public function createImages($activity,$acAdFiles){
	   $html= "<li class=\"photo\"><div class=\"fl\"> ";	
	   
	    foreach ($acAdFiles as $files){ 
          $html .= "<img src=\"".WEBSITE_URL."upload/$files->id/$files->imgname\"> "; 
           
	    }
       $infos ="</div><div class=\"title\"><h3>$activity->acti_name</h3></div><p>$activity->acti_desc</p><p class=\"mt10\"><a href=\"#\" class=\"abtn\"><span class=\"zh\">观看更多</span></a></p>   </li>";
       $html .=   $infos;                  
                             
        return $html;        
		
	}
	public function createVidio($activity,$acAdFiles){
		 $html= "<li class=\"photo\"><div class=\"fl\"> ";	 
		 //视频只能上传两个文件 ，一个图片，一个视频
	      $files = $acAdFiles[0];
          $html .= "<img src=\"".WEBSITE_URL."upload/$files->id/$files->imgname\"> ";  
	    
       $infos ="</div><div class=\"title\"><h3>$activity->acti_name</h3></div><p>$activity->acti_desc</p><p class=\"mt10\"><a href=\"javascript:;\" class=\"abtn fancybox-manual-b\"  idvalue=\"$activity->id\"><span class=\"zh\">观看视频</span></a></p>   </li>";
       $html .=   $infos;                  
                             
        return $html;   
	  
	}
}