<?php
/**
* phpmailer发送邮件 
* 发送网易邮箱126.com
* 
*/
require_once(LIB.DS.'PHPMailer_5.2.4/class.phpmailer.php');
class SendMailUtil{
	/**
	 * 
	 * 发送email常用类
	 * @param string $messagetitle 发送邮件标题 
	 * @param string $messagebody  发送邮件body,支持html
	 * @param string $adress       收件人
	 */
	public static function sendmail($messagetitle,$messagebody,$adress,$vipno){
		$mail= new PHPMailer();  
		$body= $messagebody;
    	 global  $CONFIG;  
        $dbutil = new DbUtil($CONFIG['DB']['db_host'], $CONFIG['DB']['db_user'], $CONFIG['DB']['db_password'], $CONFIG['DB']['db_database']); 
         $today = date("Y-m-d");   
		 $selectSql = "select * from emailcount where senddate = '$today' and vipno='$vipno'";
		 $results =  $dbutil->get_results($selectSql);
		 $sql;
		 if(!empty($results)){ 
		 	$sql = "update emailcount  set sendcount=sendcount+1 where senddate='$today' and vipno='$vipno'";
		 }else{ 
		 	$sql=  "insert  emailcount (sendcount,senddate,vipno) values(1,'$today','$vipno')";
		 }
		 $dbutil->query($sql);
		 
		$sql = "select * from email_set";
		$emailinfo = $dbutil->get_results($sql); 
		 
		//采用SMTP发送邮件
		$mail->IsSMTP();
		
		//邮件服务器
		//$mail->Host       = "smtp.bnet.cn";
		$mail->Host       = $emailinfo[0]->smtp;
		$mail->SMTPDebug  = 0;
		
		//使用SMPT验证
		$mail->SMTPAuth   = true;
		
		//SMTP验证的用户名称
//		$mail->Username   = "resetpassword@vip.trendy-global.com";
		$mail->Username   =  $emailinfo[0]->username;
		
		//SMTP验证的秘密
//		$mail->Password   = "-pl,)OKM";
		$mail->Password   = $emailinfo[0]->pwd;
		
		//设置编码格式
		$mail->CharSet  = "utf-8";
		
		//设置主题
		$mail->Subject    = $messagetitle;
		
		//$mail->AltBody    = "register success"";
		
		//设置发送者
		$mail->SetFrom('resetpassword@vip.trendy-global.com', 'resetpassword');
		
		//采用html格式发送邮件
		$mail->MsgHTML($body);
		
		//接受者邮件名称
		$mail->AddAddress($adress, "resetpassword");//发送邮件
		if(!$mail->Send()) {
		  return "Mailer Error: " . $mail->ErrorInfo;
		} else {
		  return "send!";
		}
	}
}
?>