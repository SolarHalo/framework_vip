<?php
require_once SERVICE.DS.'UserService.class.php';

class UsermanagerController extends  Controller{
	
	public function index(){ 
		 $smaryt = $this->getSmarty(); 
		 /** lady*/ 
		 $ladyBrands = array("ochirly","Five Plus","MiuMiu","MARC JACOBS","MICHAEL KORS","initial","Mo&Co","DAZZLE","I.T","Vero Moda","ZARA","H&M","其它/Others");
		 /** man*/ 
		 $manBrands = array("TRENDIANO","Jack&Jones","ELECTED","马克华菲/Mark Fairwhale","GXG","i.t","其它/Others");
 		 /** vacation*/ 
 		 $vacations = array("公务员","教师\律师\医生等专业人士","企业管理者","公司职员","自由职业者","家庭主妇","学生","私营企业主","其它");
 		 /** ysr*/ 
 		 $ysrs = array("4999元或以下","5000-6999元","7000-8999元","9000-9999元","10000-19999元","20000元以上");
 		 
		 
 		 $vipInfoArr = $_SESSION['vipInfoArr'];
		 $brandStr = $vipInfoArr["brand"];
		 $vocationStr = $vipInfoArr["vocation"];
		 $ysrStr = $vipInfoArr["ysr"];
		 
		 $ladyBrandsHtml = $this->returnHtml($ladyBrands, $brandStr);
	     $manBrandsHtml = $this->returnHtml($manBrands, $brandStr);
         $vacationBrandsHtml = $this->returnHtml($vacations, $vocationStr);
         $ysrHtml = $this->returnHtml($ysrs, $ysrStr);
         
		 $this->smarty->assign("ladybrands", $ladyBrandsHtml);
		 $this->smarty->assign("manbrands", $manBrandsHtml);
 		 $this->smarty->assign("vacation", $vacationBrandsHtml);
 		 $this->smarty->assign("ysr", $ysrHtml);
		 $this->smarty->display("account.tpl"); 
		
	}
	
	/**
	 * 显示VIP信息,实现显示和隐藏公共方法
	 * Enter description here ...
	 * @param unknown_type $isShow
	 * @param unknown_type $brandTemp
	 */
	function returnHtml($Arr, $Str){
		$html;
		$show = "y-iocn.gif";
		$hide = "n-iocn.gif";
		foreach ($Arr as $Temp){
			if (strpos($Str, $Temp)===false){
				$html .= "<font class=\"en\"><img src=\"".WEBSITE_URL."public/img/".$hide."\"/>".$Temp."</font>";
			}else {
				$html .= "<font class=\"en\"><img src=\"".WEBSITE_URL."public/img/".$show."\"/>".$Temp."</font>";
			}
		}
		return $html;
	}
	
	public function mdfpasswd(){ 
		 $smaryt = $this->getSmarty();
		 //如果不是post方式的提交，直接转向
		 if(!CommonBase::isPost()){
		 	$this->smarty->display("modifypwd.tpl"); 
		 	return;
		 } 
		 $this->smarty->display("modifypwd.tpl"); 
	} 
	public function mdfuserinfo(){ 
		 $smaryt = $this->getSmarty();
		 //如果不是post方式的提交，直接转向
		 if(!CommonBase::isPost()){
		 	$this->smarty->display("userinfomdf.tpl"); 
		 	return;
		 } 
		 $this->smarty->display("userinfomdf.tpl"); 
	} 
   public function checkinfos(){ 
		 $smaryt = $this->getSmarty();
		/* $vipInfoArr = $_SESSION['vipInfoArr'];
		 require_once DRIVER.DS.'WebServiceInit.class.php';
		 $webServiceInit = new WebServiceInit();
		 $client = $webServiceInit->getProxy();
		 require_once SERVICE.DS.'InterfaceService.class.php';
		 $interfaceService = new InterfaceService($client);
		 global $CONFIG;
		 $CheckInfoArr = $interfaceService->getVipCheck($CONFIG['WEBSERVICE']['userName'], $CONFIG['WEBSERVICE']['passWord'], $vipInfoArr['vip_no'], 7, 1);
		 
		 
		 $showCount;
		 $currentPage;*/
		 
		 //如果不是post方式的提交，直接转向
		 if(!CommonBase::isPost()){
		 	$this->smarty->display("checkinfos.tpl"); 
		 	return;
		 } 
		 $this->smarty->display("checkinfos.tpl"); 
	} 
	public function morecheckinfos(){ 
		 $smaryt = $this->getSmarty();
		 //如果不是post方式的提交，直接转向
		 if(!CommonBase::isPost()){
		 	$this->smarty->display("morecheckinfo.tpl"); 
		 	return;
		 } 
		 $this->smarty->display("morecheckinfo.tpl"); 
	} 
	
	public function savepwd(){
		$oldpwd = $_POST['oldpwd'];
		$newpwd = $_POST['newpwd'];
		
		$renewpwd = $_POST['renewpwd'];
		
		$user = $_SESSION['loginuser'];
		$pwd = $user->pwd;
		$cardNo = $user->cardno;
		
		$arr = null;
		if($pwd == md5($oldpwd)){
			
			if(strlen($newpwd) < 6 || strlen($newpwd) > 16){
				$arr = array ('success'=>true,'oldpwd'=>true,'vlid'=>false);
			}else{
				if($newpwd != $renewpwd){
					$arr = array ('success'=>true,'oldpwd'=>true,'vlid'=>true,'same'=>false);
				}else{
					if($oldpwd == $newpwd){
						$arr = array ('success'=>true,'oldpwd'=>true,'vlid'=>true,'same'=>true,'change'=>false);
					}else{
						
						//更新
						$dbutil = $this->getDB();
							
						$service = new UserService($dbutil);
							
						$service->updatePasswd($cardNo, md5($newpwd));
							
						$user->pwd = md5($newpwd);
						$arr = array ('success'=>true,'oldpwd'=>true,'vlid'=>true,'same'=>true,'change'=>true);
					}
				}
			}
		}else{
			$arr = array ('success'=>true,'oldpwd'=>false);
		}
		echo json_encode($arr);
		
		
	}
}