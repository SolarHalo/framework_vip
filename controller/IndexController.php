<?php
 
class IndexController extends  Controller{
	
	public function index(){ 
	 $smaryt = $this->getSmarty(); 
	 $this->smarty->assign("a","word");  
	 $this->smarty->assign("temp","bb"); 
	// var_dump($CONFIG['SMARTY']);
	 
	 $this->getDB();
	 $values = $this->dbutil->get_results("select * from task"); 
	 $this->smarty->assign("tasks",$values);  
	 $this->smarty->display("index.tpl"); 
	}
	
}