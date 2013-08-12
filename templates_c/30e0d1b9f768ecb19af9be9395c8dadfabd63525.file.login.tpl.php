<?php /* Smarty version Smarty-3.1.13, created on 2013-08-11 15:31:51
         compiled from "D:\PHPWeb\framework_vip\templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1519652066caa0cbfc4-81630724%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '30e0d1b9f768ecb19af9be9395c8dadfabd63525' => 
    array (
      0 => 'D:\\PHPWeb\\framework_vip\\templates\\login.tpl',
      1 => 1376205466,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1519652066caa0cbfc4-81630724',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52066caa1971f6_26578040',
  'variables' => 
  array (
    'loginErrorWin' => 0,
    '_POST' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52066caa1971f6_26578040')) {function content_52066caa1971f6_26578040($_smarty_tpl) {?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>会员俱乐部</title>
<meta name="keywords" content="会员俱乐部">
<meta name="description" content="会员俱乐部">
<link rel="shortcut icon" href="favicon.ico">
<link rel="icon" type="image/x-icon" href="favicon.ico">
<link type="text/css" href="<?php echo @constant('WEBSITE_URL');?>
public/font/font.css" rel="stylesheet" />
<link type="text/css" href="<?php echo @constant('WEBSITE_URL');?>
public/css/base.css" rel="stylesheet" />
<link type="text/css" href="<?php echo @constant('WEBSITE_URL');?>
public/css/assets/other.css" rel="stylesheet" />
<script type="text/javascript" src="<?php echo @constant('WEBSITE_URL');?>
public/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript">
$(function(){
	winH = $(window).height();
	warpH = $("#warp").height();
	paddingT = (winH - warpH-70)/2;
	if( winH < warpH ){
		paddingT = 10;
	}
	$("body").css({paddingTop:paddingT});
	$("#forgetpassword").hide();
	 $("input[name='username']").bind('focus',function (){
		 var username = $("input[name='username']").val();
		 if(username == '请输入会员卡号或手机号码任意一项'){
			 $("input[name='username']").val('');
			 $("input[name='username']").removeClass('inputtextcolor');
			 
		 }
	 }); 
	 if($("input[name='username']").val() ==  '请输入会员卡号或手机号码任意一项'){
		   $("input[name='username']").addClass('inputtextcolor');
		 }
	 $("input[name='username']").bind('blur',function (){
		 var username = $("input[name='username']").val();
		 if(username == ''){
			 $("input[name='username']").val('请输入会员卡号或手机号码任意一项');
			 $("input[name='username']").addClass('inputtextcolor');
		 }else{
			 $("input[name='username']").removeClass('inputtextcolor');
			 
		 }
	 }); 
	  
	
});
function closeWin(){
	$("#windbox").hide();
}
function closeWinF(){
	$("#forgetpassword").hide();
}
function showWinF(){
	$("#forgetpassword").show();
}
function closeWinJump(url){
	$("#windbox").hide();
	window.location.href=url; 
}
$("#verify_code").click(function(){
	var d = new Date()
	var hour = d.getHours(); 
	var minute = d.getMinutes();
	var sec = d.getSeconds();
    $(this).attr("src","<?php echo @constant('WEBSITE_URL');?>
/framework/util/verify_code_cn.php?"+hour+minute+sec);
});

function changeCode(){
	var d = new Date()
	var hour = d.getHours(); 
	var minute = d.getMinutes();
	var sec = d.getSeconds();
    $("#verify_code").attr("src","<?php echo @constant('WEBSITE_URL');?>
/framework/util/verify_code_cn.php?"+hour+minute+sec);
}
</script>
</head>

<body>
<?php echo $_smarty_tpl->tpl_vars['loginErrorWin']->value;?>
 
<div class="windbox hidden" id="forgetpassword">
	<div class="wind">
    	<a href="#" class="fr" onclick="javascript:closeWinF();"><img src="<?php echo @constant('WEBSITE_URL');?>
public/img/Close-ioc.gif"/></a>
    	<span class="newpassword-reset">
        	<img src="<?php echo @constant('WEBSITE_URL');?>
public/img/newpassword-reset.gif" border="0"/> 
        </span>
  </div>
	<div class="windbg"></div>
</div>
<div id="warp" class="container">
    <div class="content login">
        <h1 class="pagetitle tc"><img src="<?php echo @constant('WEBSITE_URL');?>
public/img/club.jpg" alt="会员俱乐部" /></h1>
        <div class="homenav">
            <ul class="clearfix">
                <li><a href="<?php echo @constant('WEBSITE_URL');?>
rights">会员权益</a></li>
                <li><a href="<?php echo @constant('WEBSITE_URL');?>
activities">会员专享活动</a></li>
                <li class="last"><a href="<?php echo @constant('WEBSITE_URL');?>
faq">常见问题</a></li>
            </ul>
        </div>
         <div class="userlogin">
            <form  name="loginForm" method="post" action="">
            <table width="430">
                <tr>
                    <td width="85"><img src="<?php echo @constant('WEBSITE_URL');?>
public/img/logintextiocn-id.gif"/></td>
                    <td width="225"><input type="text"  class="input_style input-w1" name="username" value="<?php if ($_smarty_tpl->tpl_vars['_POST']->value['username']!="请输入会员卡号或手机号码任意一项"&&$_smarty_tpl->tpl_vars['_POST']->value['username']!=''){?><?php echo $_smarty_tpl->tpl_vars['_POST']->value['username'];?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['_POST']->value['username']=="请输入会员卡号或手机号码任意一项"||$_smarty_tpl->tpl_vars['_POST']->value['username']==''){?>请输入会员卡号或手机号码任意一项<?php }?>">
                       </td>
                    <td></td>
                </tr>
                <tr>
                    <td width="85"><img src="<?php echo @constant('WEBSITE_URL');?>
public/img/logintextiocn-posw.gif" style=" position:relative; top:-16px;"/></td>
                    <td  colspan="2"><input type="password" name="passwd" value="<?php echo $_smarty_tpl->tpl_vars['_POST']->value['passwd'];?>
" class="input_style input-w1">&nbsp;&nbsp;&nbsp;&nbsp;<span style="border-bottom:1px solid #56280f;"><a href="javascript:showWinF();" class="linkstyle01">忘记密码?</a></span><br/>
                    	您在开卡时所填写的手机号码后6位为初始密码
                    </td>
                </tr>  
                <tr>
                    <td width="85"><img src="<?php echo @constant('WEBSITE_URL');?>
public/img/logintextiocn-yzm.gif"/></td>
                    <td colspan="2"><input type="text" name="verify_code" value="<?php echo $_smarty_tpl->tpl_vars['_POST']->value['verify_code'];?>
" class="input_style input-w2">
                    	<a href="javascript:changeCode();"  class="linkstyle01" style="display:inline-table; text-decoration:none;">&nbsp;&nbsp;&nbsp;<img id="verify_code" src="<?php echo @constant('WEBSITE_URL');?>
/framework/util/verify_code_cn.php" style="display:inline;"/>&nbsp;&nbsp;&nbsp; 换一张</a>
                    </td> 
                </tr>
            </table>
            <input type="button" class="input_style_but" style="margin-left:27px;"
             onclick="javascript:document.loginForm.submit()"> 
            </form>
        </div>
    </div>
    <div class="sitelinks">
        <ul class="clearfix">
            <li class="ochirly"><a href="http://ochirly.trendy-global.com" target="_blank">ochirly</a></li>
            <li class="fiveplus"><a href="http://fiveplus.trendy-global.com" target="_blank">fiveplus</a></li>
            <li class="loveysabel"><a href="http://loveysabel.trendy-global.com/" target="_blank">loveysabel</a></li>
            <li class="trendiano"><a href="http://trendiano.trendy-global.com/" target="_blank">trendiano</a></li>
        </ul>
    </div> 
</div>
<div class="foot">
        <p><span class="en">Copyright @ 20<b>11</b> Trendy International Group All Rights Reserved</span><br>
        <a href="http://www.miibeian.gov.cn/" target="_blank"><span class="zh">备案号：粤</span><span class="en">ICP<b>11</b>0<b>1</b>0295</span></a></p>
</div>
</body>
</html>
<?php }} ?>