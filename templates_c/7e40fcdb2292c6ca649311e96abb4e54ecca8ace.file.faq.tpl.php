<?php /* Smarty version Smarty-3.1.13, created on 2013-08-10 14:47:01
         compiled from "G:\phpserver\framework\templates\faq.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19170520652652e3f67-43773646%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e40fcdb2292c6ca649311e96abb4e54ecca8ace' => 
    array (
      0 => 'G:\\phpserver\\framework\\templates\\faq.tpl',
      1 => 1375684996,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19170520652652e3f67-43773646',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52065265593770_76924921',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52065265593770_76924921')) {function content_52065265593770_76924921($_smarty_tpl) {?><!doctype html>
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
	width:758px;
	overflow: auto;
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
	<a href="<?php echo @constant('WEBSITE_URL');?>
login">欢迎登录</a>
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
faq" class="current">常见问题</a></li>
            </ul>
        </div>
        <h1 class="pagetitle"><img src="<?php echo @constant('WEBSITE_URL');?>
public/img/faqt.jpg" alt="常见问题" /></h1>
        <div class="pagecontent scroll-pane">
            <h2 class="zh"><img src="<?php echo @constant('WEBSITE_URL');?>
public/img/t4.jpg" /></h2>
            <table class="table" width="600" border="0" cellspacing="0" cellpadding="0">
            	<tr>
                	<td colspan="3"><span class="zh">有的，目前</span><span class="en">ochirly&amp;Five Plus</span><span class="zh">均有官方微博及微信，</span><span class="en">TRENDIANO</span><span class="zh">有官方微博</span>。</td>
                </tr>
                <tr>
                    <td width="114"><span class="en">ochirly</span><span class="zh">微博</span></td>
                    <td width="262"><span class="zh">：</span><a href="http://e.weibo.com/ochirlyochirly" target="_blank" class="en"><span class="en">http://e.weibo.com/ochirlyochirly</span></a></td>
                    <td width="224"><span class="zh">微信账号 ：</span><span class="en">ochirlyochirly</span></td>
                </tr>
                <tr>
                    <td><span class="en">Five Plus</span><span class="zh">微博</span></td>
                    <td><span class="zh">：</span><a href="http://e.weibo.com/fiveplustrendy" target="_blank" class="en"><span class="en">http://e.weibo.com/fiveplustrendy</span></a></td>
                    <td><span class="zh">微信账号 ：</span><span class="en">fiveplus5</span></td>
                </tr>
                <tr>
                	<td><span class="en">TRENDIANO</span><span class="zh">微博</span></td>
                	<td colspan="2"><span class="zh">：</span><a href="http://e.weibo.com/trendiano" target="_blank" class="en"><span class="en">http://e.weibo.com/trendiano</span></a></td>
                </tr>
                <tr>
                	<td colspan="3"></td>
                </tr>
            </table>
            <h2 class="zh"><<?php echo @constant('WEBSITE_URL');?>
public/img src="img/t5.jpg" /></h2>
            <table class="table" width="600" border="0" cellspacing="0" cellpadding="0">
            	<tr>
                	<td colspan="2"><span class="zh">有的，目前</span><span class="en">ochirly&amp;Five Plus</span><span class="zh">均有官方购物网。</span></td>
                </tr>
                <tr>
                    <td width="64"><span class="en">ochirly</span></td>
                    <td width="536"><span class="zh">：</span><a href="http://www.ochirly.com" target="_blank" class="en"><span class="en">http://www.ochirly.com</span></a></td>
                </tr>
                <tr>
                    <td><span class="en">Five Plus</span></td>
                    <td><span class="zh">：</span><a href="http://www.fiveplus.com" target="_blank" class="en"><span class="en">http://www.fiveplus.com</span></a></td>
                </tr>
                <tr>
                	<td colspan="2"></td>
                </tr>
            </table>
            <h2 class="zh"><img src="<?php echo @constant('WEBSITE_URL');?>
public/img/t6.jpg" /></h2>
            <table class="table" width="600" border="0" cellspacing="0" cellpadding="0">
            	<tr>
                	<td colspan="2"><span class="zh">赫基客服热线 ：</span><strong style="font-size:16px; font-weight:bold;color:#FC0;" class="en">800-830-8348</strong><br>
				<span class="zh">赫基服务邮箱 ：</span><a href="mailto:customer-service@trendy-global.com" target="_blank" class="en"><span class="en">customer-service@trendy-global.com</span></a><br>
                <span class="zh">工作时间 ：逢周一至周五</span><span class="en">9:00-<b class="num1">1</b>2:30，<b class="num1">1</b>3:30-<b class="num1">1</b>8:00 (</span> <span class="zh">国家法定节假日除外</span> <span class="en">)</span><br>
                <span class="zh">官方购物网客服热线 ：</span><strong style="font-size:16px;font-weight:bold;color:#FC0;" class="en">400-880-0086</strong><br></td>
                </tr>
                <tr>
                    <td width="204"><span class="zh">官方购物网服务邮箱</span> <span class="en">( ochirly )</span></td>
                    <td width="396"><span class="zh">：</span><a href="mailto:service@ochirly.com" target="_blank" class="en"><span class="en">service@ochirly.com</span></a></td>
                </tr>
                <tr>
                    <td><span class="zh">官方购物网服务邮箱</span> <span class="en">( Five Plus )</span></td>
                    <td><span class="zh"> ：</span><a href="mailto:service@fiveplus.com" target="_blank" class="en"><span class="en">service@fiveplus.com</span></a></td>
                </tr>
                <tr>
                	<td colspan="2"><span class="zh">工作时间 ：逢周一至周日</span> <span class="en">9:00-2<b class="num1">4</b>:00 </span></td>
                </tr>
                <tr>
                	<td colspan="2"></td>
                </tr>
            </table>
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