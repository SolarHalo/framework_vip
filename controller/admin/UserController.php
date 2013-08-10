<?php
class UserController  extends  Controller{
	public function index(){ 
		$this->getSmarty(); 
		require_once SERVICE.DS.'admin'.DS.'UserService.class.php';
		//START 数据库查询及分页数据
		$userService = new UserService($this->getDB());
		$page_size = 2;
		$page_no=$page_no<1?1:$page_no;
		$row_count = $userService->countNum(); 
 	    $total_page =$row_count/$page_size==0 ?$row_count/$page_size:ceil($row_count/$page_size);
	    $total_page=$total_page<1?1:$total_page;
	    $page_no=$page_no>($total_page)?($total_page):$page_no;
	    $start = ($page_no - 1) * $page_size;
	    
	    $user_infos = $userService->userPage( $start , $page_size );
         $this->smarty->assign ( 'user_infos', $user_infos );
		$this->smarty->assign ( '_GET', $_GET );
//		$this->smarty->assign ( 'page_no', $page_no );
//		$this->smarty->assign ( 'page_html', $page_html );
		$this->smarty->assign ( 'oadmin_action_confirm' , "");
		$this->smarty->display("admin/users.tpl"); 
	}
	
	
	public function add(){
		$this->getSmarty(); 
		require_once SERVICE.DS.'admin'.DS.'UserService.class.php';
		$user_name = $real_name = $mobile = $password  = $email = $user_desc = $user_group = '';
		extract ( $_POST, EXTR_IF_EXISTS );
	    //如果不是post方式的提交，直接转向
		 if(!CommonBase::isPost()){
		 	$this->smarty->display("admin/user_add.tpl"); 
		 	return;
		 }
		$userService = new UserService($this->getDB());
       	$exist =  $userService->getAdminByName($user_name);
		if($exist){ 
			 $alert_html = HtmlWrap::alert("error",ErrorMessage::USER_EXIST); 
			 $this->smarty->assign("admin_action_alert",$alert_html);   
		}else if($password=="" || $real_name=="" || $mobile =="" || $email =="" ){ 
			$alert_html = HtmlWrap::alert("error",ErrorMessage::NEED_PARAM); 
			 $this->smarty->assign("admin_action_alert",$alert_html);   
		}else{
			$input_data = array ('user_name' => $user_name, 'passwd' => md5($password), 'real_name' => $real_name, 'mobile' => $mobile, 'email' => $email, 'user_desc' => $user_desc );
			$user_id = $userService->addAdUser($input_data);
			
			if ($user_id > 0) {
				$input_data['password']="";
			 
				$alert_html = HtmlWrap::alert("success","管理员帐号已成功添加"); 
			    $this->smarty->assign("admin_action_alert",$alert_html);   
			}else{
				 $alert_html = HtmlWrap::alert("error","返回的数据是$user_id"); 
			     $this->smarty->assign("admin_action_alert",$alert_html);   
			}
	     }
		 
		 
		$this->smarty->display("admin/user_add.tpl"); 
	}
	
	function test($username,$password){
		echo 'this is a test function ,username:'.$username.',password:'.$password;
	}
	
}