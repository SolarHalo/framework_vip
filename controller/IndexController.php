<?php
 
class IndexController extends  Controller{
	
	public function index(){ 
	 $smaryt = $this->getSmarty(); 
	  
	 $this->smarty->display("index.tpl"); 
	}
	
}