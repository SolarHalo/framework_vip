<?php /* Smarty version Smarty-3.1.13, created on 2013-08-10 14:01:16
         compiled from "D:/PHPWeb/framework_vip/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:87675203c5bd929947-10523601%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df0c9dd8cbff569bf0cb32fd3d8a475789acd664' => 
    array (
      0 => 'D:/PHPWeb/framework_vip/templates/index.tpl',
      1 => 1376114472,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '87675203c5bd929947-10523601',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5203c5bda62196_12733277',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5203c5bda62196_12733277')) {function content_5203c5bda62196_12733277($_smarty_tpl) {?><!doctype html>
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
<script type="text/javascript" src="<?php echo @constant('WEBSITE_URL');?>
/public/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript">
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
</head>

<body>
<div class="Welcomeuseer zh">
	<a href="<?php echo @constant('WEBSITE_URL');?>
login">欢迎登录</a>
</div>
<div id="warp" class="container">
    <div class="content home">
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