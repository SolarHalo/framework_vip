<?php
class RightsController extends  Controller{
	
	public function index(){ 
		 $smaryt = $this->getSmarty();
		  
		  
		 $this->smarty->display("rights.tpl"); 
	} 
} 