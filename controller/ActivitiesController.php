<?php
class ActivitiesController extends  Controller{
	
	public function index(){ 
		 $smaryt = $this->getSmarty();
		  
		  
		 $this->smarty->display("Activities.tpl"); 
	}
	
	 
}