<?php
class IndexController extends  Controller{
	public function index(){ 
		 $this->getSmarty(); 
 		 $this->smarty->display("admin/index.tpl"); 
	}
}