<?php /* Smarty version Smarty-3.1.13, created on 2013-08-19 13:48:35
         compiled from "G:\phpserver\framework\templates\account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:72445209a989d1be69-35088723%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '269411a7044f85efbdecb0cac6a54fc3a66c039e' => 
    array (
      0 => 'G:\\phpserver\\framework\\templates\\account.tpl',
      1 => 1376722857,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '72445209a989d1be69-35088723',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5209a98a48f7f0_95659172',
  'variables' => 
  array (
    'ladybrands' => 0,
    'manbrands' => 0,
    'vacation' => 0,
    'ysr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5209a98a48f7f0_95659172')) {function content_5209a98a48f7f0_95659172($_smarty_tpl) {?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>会员俱乐部 - 常见问题</title>
<meta name="keywords" content="会员俱乐部">
<meta name="description" content="会员俱乐部">
<link rel="shortcut icon" href="favicon.ico">
<link rel="icon" type="image/x-icon" href="favicon.ico">
<link type="text/css" href="<?php echo @constant('WEBSITE_URL');?>
public/font/font.css" rel="stylesheet" />
<link type="text/css" href="<?php echo @constant('WEBSITE_URL');?>
public/css/base.css" rel="stylesheet" />
<link type="text/css" href="<?php echo @constant('WEBSITE_URL');?>
public/css/other.css" rel="stylesheet" />
<link type="text/css" href="<?php echo @constant('WEBSITE_URL');?>
public/css/jquery.jscrollpane.css" rel="stylesheet" media="all">
<script type="text/javascript" src="<?php echo @constant('WEBSITE_URL');?>
public/js/jquery-1.8.2.min.js"></script>

<style type="text/css" id="page-css">
.scroll-pane {
	width:574px;
	overflow: auto;
	float:left;
}
</style>
 
<script type="text/javascript" src="<?php echo @constant('WEBSITE_URL');?>
public/js/jquery.jscrollpane.min.js"></script>
<script type="text/javascript" src="<?php echo @constant('WEBSITE_URL');?>
public/js/jquery.mousewheel.js"></script>
<script type="text/javascript">
//code for vetically center
$(function(){
	winH = $(window).height();
	warpH = $("#warp").height();
	paddingT = (winH - warpH-70)/2;
	if( winH < warpH ){
		paddingT = 10;
	}
	$("body").css({paddingTop:paddingT});
})
</script>
<script type="text/javascript" id="sourcecode">
//code for scroll
$(function(){
	$('.scroll-pane').jScrollPane();
});
</script>
</head>

<body>
<div class="Welcomeuseer zh">
	尊贵的<font>汪涵</font>，您好！<a href="#">退出</a>
</div>
<div id="warp" class="container">
    <div class="content">
        <div class="nav">
            <ul class="clearfix">
                    <li class="nav1"><a href="<?php echo @constant('WEBSITE_URL');?>
rights">会员权益</a></li>
                <li class="nav2"><a href="<?php echo @constant('WEBSITE_URL');?>
activities">会员专享活动</a></li>
                <li class="nav3"><a href="<?php echo @constant('WEBSITE_URL');?>
faq">常见问题</a></li>
            </ul>
        </div>
    	<div class="user-content">
            <div class="user-nav">
                <img src="<?php echo @constant('WEBSITE_URL');?>
public/img/user-nav01.gif" border="0" usemap="#Map">
                <map name="Map">
                                  <area shape="rect" coords="4,3,108,29" href="<?php echo @constant('WEBSITE_URL');?>
usermanager"><!--账号管理-->
                  <area shape="rect" coords="3,36,73,60" href="<?php echo @constant('WEBSITE_URL');?>
usermanager/mdfpasswd"><!--修改密码-->
                  <area shape="rect" coords="2,65,104,85" href="<?php echo @constant('WEBSITE_URL');?>
usermanager/mdfuserinfo"><!--编辑个人信息-->
                  <area shape="rect" coords="3,118,93,144" href="<?php echo @constant('WEBSITE_URL');?>
usermanager/checkinfos"><!--消费记录-->
                </map>
            </div> 
            <div class="pagecontent scroll-pane" id="pagecontent">
            	<ul class="userinfolist zh">
                	<li class="w100">会员卡号:<font class="en"><?php echo $_SESSION['vipInfoArr']["vip_no"];?>
</font></li>
                    <li class="w50">姓&nbsp;&nbsp;&nbsp;&nbsp;名:<font><?php echo $_SESSION['vipInfoArr']["name"];?>
</font></li>
                    <li class="w50">身份证号:<font class="en"><?php echo $_SESSION['vipInfoArr']["IDCard"];?>
</font></li>
                    <li class="w50">性&nbsp;&nbsp;&nbsp;&nbsp;别:<font><?php echo $_SESSION['vipInfoArr']["sex"];?>
</font></li>
                    <li class="w50">手机号码:<font class="en"><?php echo $_SESSION['vipInfoArr']["mobilePhones"];?>
</font></li>
                    <li class="w50">生&nbsp;&nbsp;&nbsp;&nbsp;日:<font><?php echo $_SESSION['vipInfoArr']["birthday"];?>
</font></li>
                    <li class="w50">电子邮箱:<font><?php echo $_SESSION['vipInfoArr']["eMail"];?>
</font></li>
                    <li class="w100">
                    <?php if ($_SESSION['vipInfoArr']['smsAllow']=='是'){?>
                    	<img src="<?php echo @constant('WEBSITE_URL');?>
public/img/y-iocn.gif"/>
                    	<?php }else{ ?>
                    	<img src="<?php echo @constant('WEBSITE_URL');?>
public/img/n-iocn.gif"/>
                    <?php }?>	
                    <font>是否同意会员俱乐部以所填信息与您保持交流？</font></li>
                </ul>
                <div class="Project">
                	<span>1.过去6个月内您经常购买哪些品牌？（可多选）</span>
                    <span>女士选项</span>
                    <span>
                    	<?php echo $_smarty_tpl->tpl_vars['ladybrands']->value;?>

                    </span>
                    <span>男士选项</span>
                    <span class="mb25">
                    	<?php echo $_smarty_tpl->tpl_vars['manbrands']->value;?>

                    </span>
                    <span>2.您的职业（单选）</span>
                    <span class="mb25">
						<?php echo $_smarty_tpl->tpl_vars['vacation']->value;?>

                    </span>
                    <span>3.您的每月收入（单选）</span>
                    <span class="mb25">
                    	<?php echo $_smarty_tpl->tpl_vars['ysr']->value;?>

                    </span> 
                </div>
			</div>
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