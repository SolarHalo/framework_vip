<?php
 
class AaController extends  Controller{
	
	public function bb(){ 
	 $smaryt = $this->getSmarty(); 
	 $this->smarty->assign("a","word");  
	 $this->smarty->assign("temp","bb"); 
	// var_dump($CONFIG['SMARTY']);
	 
	 $this->getDB();
	 $values = $this->dbutil->get_results("select * from task"); 
	 $this->smarty->assign("tasks",$values);  
	 $this->smarty->display("aatest.tpl"); 
	}
	
}