<?php
class FaqController extends  Controller{
	
	public function index(){ 
		 $smaryt = $this->getSmarty();
		  
		  
		 $this->smarty->display("faq.tpl"); 
	} 
} 