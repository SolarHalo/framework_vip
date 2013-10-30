<?php
require_once SERVICE.DS.'UserService.class.php';

class UsermanagerController extends  Controller{

	public function showVipInfoTemple($smaryt){
		/** lady*/
		$ladyBrands = array("ochirly","Five Plus","MiuMiu","MARC JACOBS","MICHAEL KORS","initial","Mo&Co","DAZZLE","I.T","Vero Moda","ZARA","H&M","其它/Others");
		/** man*/
		$manBrands = array("TRENDIANO","Jack&Jones","ELECTED","马克华菲/Mark Fairwhale","GXG","i.t","其它/Others");
		/** vacation*/
		$vacations = array("公务员","教师\律师\医生等专业人士","企业管理者","公司职员","自由职业者","家庭主妇","学生","私营企业主","其它");
		/** ysr*/
		$ysrs = array("4999元以下","5000-6999元","7000-8999元","9000-9999元","10000-19999元","20000元以上");
		
		$vipInfoArr = $_SESSION['vipInfoArr'];
		$brandStr = $vipInfoArr["brand"];
		$vocationStr = $vipInfoArr["vocation"];
		$ysrStr = $vipInfoArr["ysr"];

		$ladyBrandsHtml = $this->returnHtmlEN($ladyBrands, $brandStr);
		$manBrandsHtml = $this->returnHtmlEN($manBrands, $brandStr);
		$vacationBrandsHtml = $this->returnHtmlZH($vacations, $vocationStr);
		$ysrHtml = $this->returnHtmlZH($ysrs, $ysrStr);
			
		$_SESSION['ladybrands'] = $ladyBrandsHtml;
		$_SESSION['manbrands'] = $manBrandsHtml;
		$_SESSION['vacation'] = $vacationBrandsHtml;
		$_SESSION['ysr'] = $ysrHtml;
		
		$this->smarty->assign("ladybrands", $ladyBrandsHtml);
		$this->smarty->assign("manbrands", $manBrandsHtml);
		$this->smarty->assign("vacation", $vacationBrandsHtml);
		$this->smarty->assign("ysr", $ysrHtml);
	}
	
	public function index(){
		$smaryt = $this->getSmarty();
		$this->showVipInfoTemple($smaryt);
		$this->smarty->display("account.tpl");
	}

	/**
	 * 显示VIP信息,实现显示和隐藏公共方法
	 * Enter description here ...
	 * @param unknown_type $isShow
	 * @param unknown_type $brandTemp
	 */
	public function returnHtmlEN($Arr, $str){
		$html;
		$show = "y-iocn.gif";
		$hide = "n-iocn.gif";
		foreach ($Arr as $Temp){
			if (strpos($str, $Temp)===false){
				$html .= "<font class=\"en\"><img src=\"".WEBSITE_URL."public/img/".$hide."\"/>".$Temp."</font>".'&nbsp;&nbsp;';
			}else {
				$html .= "<font class=\"en\"><img src=\"".WEBSITE_URL."public/img/".$show."\"/>".$Temp."</font>".'&nbsp;&nbsp;';
			}
		}
		return $html;
	}

	public function returnHtmlZH($Arr, $str){
		$html;
		$show = "y-iocn.gif";
		$hide = "n-iocn.gif";
		foreach ($Arr as $Temp){
			if (strpos($str, $Temp)===false){
				$html .= "<font class=\"zh\"><img src=\"".WEBSITE_URL."public/img/".$hide."\"/>".$Temp."</font>".'&nbsp;&nbsp;';
			}else {
				$html .= "<font class=\"zh\"><img src=\"".WEBSITE_URL."public/img/".$show."\"/>".$Temp."</font>".'&nbsp;&nbsp;';
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
		$this->showVipInfoTemple($smaryt);
		if(!CommonBase::isPost()){
			$this->smarty->display("userinfomdf.tpl");
			return;
		}
		$this->smarty->display("userinfomdf.tpl");
	}

	public function updateVipInfo(){
		$vipInfoArr = $_SESSION['vipInfoArr'];//修改完成之后更新session信息
		
		$phoneNum = $_POST['phoneNum'];
		$email = $_POST['email'];
		$ladyBrands = $_POST['ladyBrands'];
		$manBrands = $_POST['manBrands'];
		$vacations = $_POST['vacations'];
		$ysrs = $_POST['ysrs'];
		$smsAllow = $_POST['smsAllow'];
		
//		echo $ladyBrands;
//		echo $manBrands;
//		echo $vacations;
//		echo $ysrs;
			
		$postData = array('vip_no'=>trim($vipInfoArr['vip_no']),'name'=>$vipInfoArr['name'],'sex'=>$vipInfoArr['sex'],'birthday'=>$vipInfoArr['birthday'],
		 'IDCard'=>$vipInfoArr['IDCard'],'mobilePhones'=>$phoneNum,'eMail'=>$email,
		 'brand'=>$ladyBrands.$manBrands,'vocation'=>trim($vacations, ","),'ysr'=>trim($ysrs, ","), 'smsAllow'=>$smsAllow);

		$vipInfoXML = $this->getUpdateVipXML($postData);
//		return var_dump($vipInfoXML);
		require_once DRIVER.DS.'WebServiceInit.class.php';
		$webServiceInit = new WebServiceInit();
		$client = $webServiceInit->getProxy();
		require_once SERVICE.DS.'InterfaceService.class.php';
		$interfaceService = new InterfaceService($client);
		global $CONFIG;
		$returnInfo = $interfaceService->updateVipInfo($CONFIG['WEBSERVICE']['userName'], $CONFIG['WEBSERVICE']['passWord'], $vipInfoArr['vip_no'], $vipInfoXML);
		
		if($returnInfo['out']==='0'){
			require_once SERVICE.DS.'UserService.class.php';
		 	$userSerivce = new UserService($this->getDB());
		 	$userSerivce->updateUserPhone($phoneNum, trim($vipInfoArr['vip_no'])); 
		 				//更新session开始
			$vipInfoArr['mobilePhones'] = $phoneNum;
			$vipInfoArr['eMail'] = $email;
			$vipInfoArr['brand'] = $ladyBrands.$manBrands;
			$vipInfoArr['vocation'] = trim(stripslashes($vacations), ",");
			$vipInfoArr['ysr'] = trim($ysrs, ",");
			$vipInfoArr['smsAllow'] = $smsAllow;
			$_SESSION['vipInfoArr'] = $vipInfoArr;
		}
		echo  $returnInfo['out'];
	}

	public function getUpdateVipXML($postData){
		$domDocument = new DOMDocument('1.0', "UTF-8");
		$domElement = $domDocument->createElement('vipInfo');
		foreach ($postData as $k=>$v){
			if (stristr($v, '\\')){
				$node = $domDocument->createElement($k, stripslashes($v));
				$domElement->appendChild($node);
			}else {
				$node = $domDocument->createElement($k, htmlspecialchars($v));
				$domElement->appendChild($node);
			}
		}
		$domDocument->appendChild($domElement);
		return $domDocument->saveXML();
	}
	public function checkinfos(){
		$smaryt = $this->getSmarty();
		$this->returnSearchDateHtml($smaryt);
		$vipInfoArr = $_SESSION['vipInfoArr'];
		$s_date = $_SESSION['s_date'];//开始时间
		$e_date = $_SESSION['e_date'];//结束时间
		require_once DRIVER.DS.'WebServiceInit.class.php';
		$webServiceInit = new WebServiceInit();
		$client = $webServiceInit->getProxy();
		require_once SERVICE.DS.'InterfaceService.class.php';
		$interfaceService = new InterfaceService($client);
		global $CONFIG;
		$checkInfoArr = $interfaceService->getVipCheck($CONFIG['WEBSERVICE']['userName'], $CONFIG['WEBSERVICE']['passWord'], $vipInfoArr['vip_no'], 7, 1, $s_date, $e_date);
			
	/*	$checkInfoArr=array("cardInfo"=>array("vip_no"=>"00001032","name"=>"赵莹","customer_na"=>"ochirly宁波天一银泰专柜","inDate"=>"2010-12-22","endDate"=>"2011-12-22","checkMoney"=>"0.00"),
		                    "Page"=>array("showCount"=>"7","totalPage"=>"3","totalResult"=>"15","currentPage"=>"1"),"CheckInfo"=>array(array("checkDate"=>"2011-12-18","checkId"=>"K836007504","cs"=>"上海-上海","customer_na"=>"OCHIRLY上海又一城淞沪店","CheckAmount"=>"629"),
		array("checkDate"=>"2011-12-18","checkId"=>"K836007504","cs"=>"上海-上海","customer_na"=>"OCHIRLY上海又一城淞沪店","CheckAmount"=>"629"),array("checkDate"=>"2011-12-18","checkId"=>"K836007504","cs"=>"上海-上海","customer_na"=>"OCHIRLY上海又一城淞沪店","CheckAmount"=>"629"),
		array("checkDate"=>"2011-12-18","checkId"=>"K836007504","cs"=>"上海-上海","customer_na"=>"OCHIRLY上海又一城淞沪店","CheckAmount"=>"629"),
		array("checkDate"=>"2011-12-18","checkId"=>"K836007504","cs"=>"上海-上海","customer_na"=>"OCHIRLY上海又一城淞沪店","CheckAmount"=>"629"),
		array("checkDate"=>"2011-12-18","checkId"=>"K836007504","cs"=>"上海-上海","customer_na"=>"OCHIRLY上海又一城淞沪店","CheckAmount"=>"629"),
		array("checkDate"=>"2011-12-18","checkId"=>"K836007504","cs"=>"上海-上海","customer_na"=>"OCHIRLY上海又一城淞沪店","CheckAmount"=>"629")));*/

		if (!empty($checkInfoArr)){
			$inDate =  $checkInfoArr['cardInfo']['inDate'];
			$endDate = $checkInfoArr['cardInfo']['endDate'];
	
			$count = $checkInfoArr['Page']['totalResult'];
			$_SESSION['checkInfoArr'] = $checkInfoArr;
			$_SESSION['count'] = $count;  //总记录数
				
			$dateHtml = $this->returnDateHtml($inDate, $endDate);
	
			$this->smarty->assign("dateHtml", $dateHtml);
		}
		//如果不是post方式的提交，直接转向
		if(!CommonBase::isPost()){
			$this->smarty->display("checkinfos.tpl");
			return;
		}
		$this->smarty->display("checkinfos.tpl");
	}
	/**
	 * 显示消费信息开始时间,结束时间
	 * Enter description here ...
	 * @param unknown_type $isShow
	 * @param unknown_type $brandTemp
	 */
	public function returnDateHtml($inDate, $endDate){
		$inDateArr = explode("-", $inDate);
		$endDateArr = explode("-", $endDate);
		$html = "开卡日期：<font>".trim($inDateArr[0])."</font>年<font>".trim($inDateArr[1])."</font>月<font>".trim($inDateArr[2])."</font>日,有效期：<font>".trim($endDateArr[0])."</font>年<font>".trim($endDateArr[1])."</font>月<font>".trim($endDateArr[2])."</font>日";
		return $html;
	}

	/**
	 * 查询消费信息开始时间,结束时间(前一个自然日算起，过去两年)
	 * Enter description here ...
	 * @param unknown_type $isShow
	 * @param unknown_type $brandTemp
	 */
	public function returnSearchDateHtml($smaryt){

		$yesteday = mktime(0,0,0,date("m"),date("d")-1,date("Y"));//当前的前一天
		$date = date("Y-m-d", $yesteday); //格式化
		$twoYearDate = date('Y-m-d', strtotime ("-2 year", strtotime($date)));//2年前的那一天
		$twoYearDate_M = date('m', strtotime($twoYearDate));//2年前的那一天的月份
		$twoYearDate_Y = date('Y', strtotime($twoYearDate));//2年前的那一天的年份
		$date_Y = date('Y', strtotime($date));//前一天的年份
		$date_M = date('m', strtotime($date));//前一天的月份

		$start_yyyy = $twoYearDate_Y;//2年前所需要展示的年份,首次展示(startDate)
		$start_mm = $twoYearDate_M;//2年前所需要展示的月份(下拉)
		$start_years = $date_Y - $twoYearDate_Y + 1;//2年前所需要展示的年份,首次展示(startDate)

		$end_yyyy = $date_Y;//当前时间所需要展示的年份,首次展示(endDate)
		$end_years = $date_Y - $twoYearDate_Y + 1;//当前时间所需要展示的年份,首次展示(endDate)
		$end_mm = $date_M;//当前时间所需要展示的月份

		$strat_mm_for_days = cal_days_in_month(CAL_GREGORIAN, $start_mm, $start_yyyy);//判断这个月有多少天(开始年月)
		$end_mm_for_days = cal_days_in_month(CAL_GREGORIAN, $end_mm, $end_yyyy);//判断这个月有多少天(结束年月)
		$date_day = date('d', strtotime($date));//前一天的月份是几号
		$e_day;
		if($date_day===$end_mm_for_days){
			$e_day = mktime(0,0,0,$end_mm,$end_mm_for_days,$end_yyyy);
		}else {
			$e_day = mktime(0,0,0,$end_mm,$date_day,$end_yyyy);
		}
		$s_day = mktime(0,0,0,$start_mm,$strat_mm_for_days,$start_yyyy);//当前的前一天
		$s_date = date("Y-m-d", $s_day); //格式化
		$e_date = date("Y-m-d", $e_day); //格式化
		$_SESSION['s_date'] = $s_date;
		$_SESSION['e_date'] = $e_date;

		$start_yyyy_html = "<a class=\"xiaoguo\">".$start_yyyy."</a>";//2年前被选中年
		$start_years_html = "<li class=\"nshow\">".$twoYearDate_Y ."</li> ";
		$var_temp_year;
		for($s_years=1;$s_years<$start_years;$s_years++){
			$var_temp_year = $twoYearDate_Y + $s_years;
			$start_years_html .= "<li class=\"nshow\">".$var_temp_year."</li> ";//2年前下拉年
		}
		$twoYearDate_M_html = "<a class=\"xiaoguo2\">".$twoYearDate_M."</a>";//2年前被选中月
		$start_mm_html;
		for($s_mm=(int)$twoYearDate_M;$s_mm<12+1;$s_mm++){
			if ($s_mm<=9){
				$start_mm_html .= "<li class=\"nshow2\">0".$s_mm."</li>";//2年前下拉月
			}else {
				$start_mm_html .= "<li class=\"nshow2\">".$s_mm."</li>";//2年前下拉月
			}
		}

		$end_yyyy_html = "<a class=\"xiaoguo3\">".$end_yyyy."</a>";//当前被选中年
		$end_years_html;
		for($e_year=$end_years-1;$e_year>=1;$e_year--){
			$var_temp_year = $end_yyyy - $e_year;
			$end_years_html .= "<li class=\"nshow3\">".$var_temp_year."</li> ";//下拉年
		}
		$end_years_html .= "<li class=\"nshow3\">".$end_yyyy."</li> ";
		$date_M_html = "<a class=\"xiaoguo4\">".$date_M."</a>";//当前被选中月
		$end_mm_html;
		for($e_mm=1;$e_mm<$end_mm+1;$e_mm++){
			if ($e_mm<=9){
				$end_mm_html .= "<li class=\"nshow4\">0".$e_mm."</li>";//下拉月
			}else {
				$end_mm_html .= "<li class=\"nshow4\">".$e_mm."</li>";//下拉月
			}
		}

		$this->smarty->assign("start_yyyy", $start_yyyy_html);
		$this->smarty->assign("start_years", $start_years_html);
		$this->smarty->assign("twoYearDate_M", $twoYearDate_M_html);
		$this->smarty->assign("start_mm", $start_mm_html);

		$this->smarty->assign("end_yyyy", $end_yyyy_html);
		$this->smarty->assign("end_years", $end_years_html);
		$this->smarty->assign("date_M", $date_M_html);
		$this->smarty->assign("end_mm", $end_mm_html);

	}

	public function dateVerify(){
		$yesteday = mktime(0,0,0,date("m"),date("d")-1,date("Y"));//当前的前一天
		$date = date("Y-m-d", $yesteday); //格式化
		$twoYearDate = date('Y-m-d', strtotime ("-2 year", strtotime($date)));//2年前的那一天
		$twoYearDate_M = date('m', strtotime($twoYearDate));//2年前的那一天的月份
		$twoYearDate_Y = date('Y', strtotime($twoYearDate));//2年前的那一天的年份
		$date_Y = date('Y', strtotime($date));//前一天的年份
		$date_M = date('m', strtotime($date));//前一天的月份

		$start_yyyy = $twoYearDate_Y;//2年前所需要展示的年份,首次展示(startDate)
		$start_mm = $twoYearDate_M;//2年前所需要展示的月份(下拉)
		$start_years = $date_Y - $twoYearDate_Y + 1;//2年前所需要展示的年份,首次展示(startDate)

		$end_yyyy = $date_Y;//当前时间所需要展示的年份,首次展示(endDate)
		$end_years = $date_Y - $twoYearDate_Y + 1;//当前时间所需要展示的年份,首次展示(endDate)
		$end_mm = $date_M;//当前时间所需要展示的月份

		$html;
		if(isset($_POST["start_Y"])){//查询这一年有哪些可用的月份即可
			$html = array();
			$start_Y_val = 	$_POST["start_Y"];
			$start_M_val = 	$_POST["start_MM"];
			if ($start_Y_val!==$twoYearDate_Y && $start_Y_val!==$date_Y){
				/**开始月*/
				$start_M_html = "01";//当前被选中月
				$start_mm_html;
				for($s_mm=1;$s_mm<12+1;$s_mm++){
					if ($s_mm<=9){
						$start_mm_html .= "<li class=\"nshow2\">0".$s_mm."</li>";//除去首尾年前下拉月
					}else {
						$start_mm_html .= "<li class=\"nshow2\">".$s_mm."</li>";//除去首尾年前下拉月
					}
				}
				$html[0] = $start_M_html;//开始当前年的被选中的月份
				$html[1] = $start_mm_html;//开始当前年的可用月份
				/**结束年*/
				$temp_years = $date_Y-$start_Y_val+1;

				$var_temp_year;
				$end_years_html = "<li class=\"nshow3\">".$start_Y_val."</li> ";
				for($e_year=1;$e_year<$temp_years;$e_year++){
					$var_temp_year = $start_Y_val + $e_year;
					$end_years_html .= "<li class=\"nshow3\">".$var_temp_year."</li> ";//下拉年
				}
				$end_yyyy_html = $var_temp_year;//当前被选中年
				$html[2] = $end_yyyy_html;
				$html[3] = $end_years_html;
				/**结束月*/
				$end_M_html = $end_mm;//当前被选中月
				$end_mm_html;
				for($e_mm=1;$e_mm<(int)$end_mm+1;$e_mm++){
					if ($e_mm<=9){
						$end_mm_html .= "<li class=\"nshow4\">0".$e_mm."</li>";//下拉月
					}else {
						$end_mm_html .= "<li class=\"nshow4\">".$e_mm."</li>";//下拉月
					}
				}
				$html[4] = $end_M_html;
				$html[5] = $end_mm_html;

			}
			if ($start_Y_val===$twoYearDate_Y){
				/**开始月*/
				$start_M_html = $start_mm;//当前被选中月
				$start_mm_html;
				for($s_mm=(int)$start_mm;$s_mm<12+1;$s_mm++){
					if ($s_mm<=9){
						$start_mm_html .= "<li class=\"nshow2\">0".$s_mm."</li>";//2年前下拉月
					}else {
						$start_mm_html .= "<li class=\"nshow2\">".$s_mm."</li>";//2年前下拉月
					}
				}
				$html[0] = $start_M_html;//开始当前年的被选中的月份
				$html[1] = $start_mm_html;//开始当前年的可用月份
				/**结束年*/
				$end_yyyy_html = $end_yyyy;//当前被选中年
				$end_years_html;
				for($e_year=$end_years-1;$e_year>=1;$e_year--){
					$var_temp_year = $end_yyyy - $e_year;
					$end_years_html .= "<li class=\"nshow3\">".$var_temp_year."</li> ";//下拉年
				}
				$end_years_html .= "<li class=\"nshow3\">".$end_yyyy."</li> ";
				$html[2] = $end_yyyy_html;
				$html[3] = $end_years_html;
				/**结束月*/
				$end_M_html = $end_mm;//当前被选中月
				$end_mm_html;
				for($e_mm=1;$e_mm<$end_mm+1;$e_mm++){
					if ($e_mm<=9){
						$end_mm_html .= "<li class=\"nshow4\">0".$e_mm."</li>";//下拉月
					}else {
						$end_mm_html .= "<li class=\"nshow4\">".$e_mm."</li>";//下拉月
					}
				}
				$html[4] = $end_M_html;
				$html[5] = $end_mm_html;

			}
			if ($start_Y_val===$date_Y){
				/**开始月*/
				$start_M_html = "01";//当前被选中月
				$start_mm_html;
				for($s_mm=1;$s_mm<(int)$end_mm+1;$s_mm++){
					if ($s_mm<=9){
						$start_mm_html .= "<li class=\"nshow2\">0".$s_mm."</li>";//2年前下拉月
					}else {
						$start_mm_html .= "<li class=\"nshow2\">".$s_mm."</li>";//2年前下拉月
					}
				}
				$html[0] = $start_M_html;//开始当前年的被选中的月份
				$html[1] = $start_mm_html;//开始当前年的可用月份
				/**结束年*/
				$end_yyyy_html = $end_yyyy;//当前被选中年
				$end_years_html = "<li class=\"nshow3\">".$end_yyyy."</li> ";
				$html[2] = $end_yyyy_html;
				$html[3] = $end_years_html;
				/**结束月*/
				$end_M_html = $end_mm;//当前被选中月
				$end_mm_html;
				for($e_mm=1;$e_mm<$end_mm+1;$e_mm++){
					if ($e_mm<=9){
						$end_mm_html .= "<li class=\"nshow4\">0".$e_mm."</li>";//下拉月
					}else {
						$end_mm_html .= "<li class=\"nshow4\">".$e_mm."</li>";//下拉月
					}
				}
				$html[4] = $end_M_html;
				$html[5] = $end_mm_html;
			}
		}
		if(isset($_POST["start_M"])){
			$html = array();
			$start_Y_val = $_POST['start_Y_val'];//当前选择的开始年份(两年前的)
			$start_M_val = 	$_POST["start_M"];
			$end_Y_val = 	$_POST["end_Y_val"];
			if ($start_Y_val!==$twoYearDate_Y && $start_Y_val!==$date_Y){
				$end_M_html = $start_M_val;
				$end_mm_html;
				for($e_mm=(int)$start_M_val;$e_mm<12+1;$e_mm++){
					if ($e_mm<=9){
						$end_mm_html .= "<li class=\"nshow4\">0".$e_mm."</li>";//下拉月
					}else {
						$end_mm_html .= "<li class=\"nshow4\">".$e_mm."</li>";//下拉月
					}
				}
				$html[0] = $end_M_html;
				$html[1] = $end_mm_html;
			}
			if ($start_Y_val===$date_Y){
				if($end_Y_val===$date_Y){
					/**结束月*/
					$end_M_html = $start_M_val;
					$end_mm_html;
					for($e_mm=(int)$start_M_val;$e_mm<$end_mm+1;$e_mm++){
						if ($e_mm<=9){
							$end_mm_html .= "<li class=\"nshow4\">0".$e_mm."</li>";//下拉月
						}else {
							$end_mm_html .= "<li class=\"nshow4\">".$e_mm."</li>";//下拉月
						}
					}
					$html[0] = $end_M_html;
					$html[1] = $end_mm_html;
				}
			}
			if ($start_Y_val===$twoYearDate_Y){
				if($end_Y_val===$twoYearDate_Y){
					/**结束月*/
					$end_M_html = $start_M_val;
					$end_mm_html;
					for($e_mm=(int)$start_M_val;$e_mm<12+1;$e_mm++){
						if ($e_mm<=9){
							$end_mm_html .= "<li class=\"nshow4\">0".$e_mm."</li>";//下拉月
						}else {
							$end_mm_html .= "<li class=\"nshow4\">".$e_mm."</li>";//下拉月
						}
					}
					$html[0] = $end_M_html;
					$html[1] = $end_mm_html;
				}
			}
		}
		if(isset($_POST["end_Y"])){
			$html = array();
			$end_Y_val = $_POST["end_Y"];
			$end_M_val = $_POST["end_M"];
			$start_YY = $_POST["start_YY"];
			if ($end_Y_val!==$twoYearDate_Y && $end_Y_val!==$date_Y){
				if($start_YY===$end_Y_val){
					$end_M_html = $end_M_val;//当前被选中月
					$end_mm_html;
					for($s_mm=(int)$end_M_val;$s_mm<12+1;$s_mm++){
						if ($s_mm<=9){
							$end_mm_html .= "<li class=\"nshow4\">0".$s_mm."</a></li>";//除去首尾年前下拉月
						}else {
							$end_mm_html .= "<li class=\"nshow4\">".$s_mm."</li>";//除去首尾年前下拉月
						}
					}
					$html[0] = $end_M_html;
					$html[1] = $end_mm_html;
				}else {
					$end_M_html = "01";//当前被选中月
					$end_mm_html;
					for($s_mm=1;$s_mm<12+1;$s_mm++){
						if ($s_mm<=9){
							$end_mm_html .= "<li class=\"nshow4\">0".$s_mm."</a></li>";//除去首尾年前下拉月
						}else {
							$end_mm_html .= "<li class=\"nshow4\">".$s_mm."</li>";//除去首尾年前下拉月
						}
					}
					$html[0] = $end_M_html;
					$html[1] = $end_mm_html;
				}
			}
			if ($end_Y_val===$twoYearDate_Y){
				$end_M_html = $end_M_val;//当前被选中月
				$end_mm_html;
				for($s_mm=(int)$end_M_val;$s_mm<12+1;$s_mm++){
					if ($s_mm<=9){
						$end_mm_html .= "<li class=\"nshow4\">0".$s_mm."</li>";//2年前下拉月
					}else {
						$end_mm_html .= "<li class=\"nshow4\">".$s_mm."</li>";//2年前下拉月
					}
				}
				$html[0] = $end_M_html;
				$html[1] = $end_mm_html;
			}
			if ($end_Y_val===$date_Y){
				if($start_YY===$end_Y_val){
					$end_M_html = $end_M_val;//当前被选中月
					$end_mm_html;
					for($e_mm=(int)$end_M_val;$e_mm<(int)$end_mm+1;$e_mm++){
						if ($e_mm<=9){
							$end_mm_html .= "<li class=\"nshow4\">0".$e_mm."</li>";//下拉月
						}else {
							$end_mm_html .= "<li class=\"nshow4\">".$e_mm."</li>";//下拉月
						}
					}
					$html[0] = $end_M_html;
					$html[1] = $end_mm_html;
				}else{
					$end_M_html = "01";//当前被选中月
					$end_mm_html;
					for($e_mm=1;$e_mm<(int)$end_mm+1;$e_mm++){
						if ($e_mm<=9){
							$end_mm_html .= "<li class=\"nshow4\">0".$e_mm."</li>";//下拉月
						}else {
							$end_mm_html .= "<li class=\"nshow4\">".$e_mm."</li>";//下拉月
						}
					}
					$html[0] = $end_M_html;
					$html[1] = $end_mm_html;
				}
			}

		}
		//		if(isset($_POST["end_M"])){}//最后一个月份就不需要判断了
		echo empty($html)?'':json_encode($html);
	}

	public function searchVipInfo(){
		$start_Y = $_POST['start_Y'];
		$start_M = $_POST['start_M'];
		$end_Y = $_POST['end_Y'];
		$end_M = $_POST['end_M'];

		$yesteday = mktime(0,0,0,date("m"),date("d")-1,date("Y"));//当前的前一天
		$date = date("Y-m-d", $yesteday); //格式化
		$date_day = date('d', strtotime($date));//前一天的月份是几号

		$strat_mm_for_days = cal_days_in_month(CAL_GREGORIAN, $start_M, $start_Y);//判断这个月有多少天(开始年月)
		$end_mm_for_days = cal_days_in_month(CAL_GREGORIAN, $end_M, $end_Y);//判断这个月有多少天(结束年月)
		$e_day;
		if($date_day===$end_mm_for_days){
			$e_day = mktime(0,0,0,$end_M,$end_mm_for_days,$end_Y);
		}else {
			$e_day = mktime(0,0,0,$end_M,$date_day,$end_Y);
		}
		$s_day = mktime(0,0,0,$start_M,$strat_mm_for_days,$start_Y);
		$s_date = date("Y-m-d", $s_day); //格式化
		$e_date = date("Y-m-d", $e_day); //格式化
		if($s_date<=$e_date){
			$vipInfoArr = $_SESSION['vipInfoArr'];
			$_SESSION['s_date'] = $s_date;//开始时间
			$_SESSION['e_date'] = $e_date;//结束时间
			require_once DRIVER.DS.'WebServiceInit.class.php';
			$webServiceInit = new WebServiceInit();
			$client = $webServiceInit->getProxy();
			require_once SERVICE.DS.'InterfaceService.class.php';
			$interfaceService = new InterfaceService($client);
			global $CONFIG;
			$checkInfoArr = $interfaceService->getVipCheck($CONFIG['WEBSERVICE']['userName'], $CONFIG['WEBSERVICE']['passWord'], $vipInfoArr['vip_no'], 7, 1, $s_date, $e_date);
			if (empty($checkInfoArr)){
				echo "empty";
			}else {
				$count = $checkInfoArr['Page']['totalResult'];
				$_SESSION['count'] = $count;  //总记录数
				echo json_encode($checkInfoArr['CheckInfo']);
			}
		}else{
			echo "error";
		}
	}

	public function morecheckinfos(){
		$smaryt = $this->getSmarty();
			
		$firstPage = $_GET['firstPage'];
		$previousPage = $_GET['previousPage'];
		$nextPage = $_GET['nextPage'];
		$endPage = $_GET['endPage'];
		$page = $_SESSION['page'];
		if (!empty($firstPage)){
			//判断session是否存在 if(!session_is_registered("page")){}
			$page = $this->initPaging();
			$this->checkInfoPage((string)$page['pageSize'], (string)$page['pageCurrent']);
		}
		if (!empty($previousPage)){
			//本来想判断一下弹出一个层"已经是首页了"
			if($page['pageCurrent']!==1){
				$page['pageCurrent'] = $page['pageCurrent']-1;
			}
			$this->checkInfoPage($page['pageSize'], $page['pageCurrent']);
		}
		if (!empty($nextPage)){
			if($page['pageCurrent']<$page['countPage']){
				$page['pageCurrent'] = $page['pageCurrent']+1;
			}
			$this->checkInfoPage($page['pageSize'], $page['pageCurrent']);
		}
		if (!empty($endPage)){
			$page['pageCurrent'] = $page['countPage'];
			$this->checkInfoPage($page['pageSize'], $page['countPage']);
		}
		//预留方法，当输入第几页按回车的时候触发
		//		 if (!empty($pageIndex)){
		//		 	$this->checkInfoPage($page['pageSize'], $page['countPage']);
		//		 }
		$_SESSION['page'] = $page;
		if(!CommonBase::isPost()){
			$this->smarty->display("morecheckinfo.tpl");
			return;
		}
		$this->smarty->display("morecheckinfo.tpl");
	}
	/**
	 * 抽取调用接口方法，获取销售信息
	 * Enter description here ...
	 */
	public function  checkInfoPage($pageSize, $pageCurrent){
		$vipInfoArr = $_SESSION['vipInfoArr'];
		$s_date = $_SESSION['s_date'];//开始时间
		$e_date = $_SESSION['e_date'];//结束时间
		require_once DRIVER.DS.'WebServiceInit.class.php';
		$webServiceInit = new WebServiceInit();
		$client = $webServiceInit->getProxy();
		require_once SERVICE.DS.'InterfaceService.class.php';
		$interfaceService = new InterfaceService($client);
		global $CONFIG;
		$checkInfoArr = $interfaceService->getVipCheck($CONFIG['WEBSERVICE']['userName'], $CONFIG['WEBSERVICE']['passWord'], $vipInfoArr['vip_no'], $pageSize, $pageCurrent, $s_date, $e_date);
		 
		$_SESSION['checkInfoArr'] = $checkInfoArr;
	}
	/**
	 * 分页初始化
	 * Enter description here ...
	 */
	public function initPaging(){

		$count = $_SESSION['count'];//总记录数 totalResult
		$countPage = ceil($count/10);//总页数 totalPage
		$pageSize = 10;//每页显示多少条数据 showCount
		$pageCurrent = 1;//当前页currentPage
			
		$page = array();
		$page['count'] = $count;
		$page['countPage'] = $countPage;
		$page['pageSize'] = $pageSize;
		$page['pageCurrent'] = $pageCurrent;

		return $page;
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
					 
						 require_once SERVICE.DS.'UserService.class.php';	
						$service = new UserService($this->getDB());
							
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