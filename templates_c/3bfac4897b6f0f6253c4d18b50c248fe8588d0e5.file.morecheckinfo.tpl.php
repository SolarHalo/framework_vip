<?php /* Smarty version Smarty-3.1.13, created on 2013-08-25 09:46:36
         compiled from "F:\PHP_WorkSapce\framework\templates\morecheckinfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25854520f21fee03889-52452979%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3bfac4897b6f0f6253c4d18b50c248fe8588d0e5' => 
    array (
      0 => 'F:\\PHP_WorkSapce\\framework\\templates\\morecheckinfo.tpl',
      1 => 1377423904,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25854520f21fee03889-52452979',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_520f21feeb1c18_90256222',
  'variables' => 
  array (
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_520f21feeb1c18_90256222')) {function content_520f21feeb1c18_90256222($_smarty_tpl) {?><!doctype html>
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
	$('.wrapper6').hide();
	$('.xiaoguo6').mouseenter(function(){
		$('.wrapper6').slideDown("slow");
	});
	$('.head6').mouseleave(function(){
		$('.wrapper6').slideUp();
	});
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
<?php echo $_smarty_tpl->getSubTemplate ('loginbanner.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


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
public/img/user-nav04.gif" border="0" usemap="#Map">
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
                <div class="recordlist">
                	<ol>
                    	<li class="rq">日期</li>
                        <li class="xsd">销售单</li>
                        <li class="xfcs">消费城市</li>
                        <li class="dpmc">消费店铺名称</li>
                        <li class="je">金额</li>
                    </ol>
                    
                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_SESSION['checkInfoArr']["CheckInfo"]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                     	<ul>
                    	 <li class="rq"><?php echo $_smarty_tpl->tpl_vars['v']->value['checkDate'];?>
</li>
                         <li class="xsd"><?php echo $_smarty_tpl->tpl_vars['v']->value['checkId'];?>
</li>
                         <li class="xfcs"><?php echo $_smarty_tpl->tpl_vars['v']->value['cs'];?>
</li>
                         <li class="dpmc"><?php echo $_smarty_tpl->tpl_vars['v']->value['customer_na'];?>
</li>
                         <li class="je"><?php echo $_smarty_tpl->tpl_vars['v']->value['CheckAmount'];?>
</li>
                    	</ul>
                    <?php } ?>
                    <div class="page">
                    	<a href="<?php echo @constant('WEBSITE_URL');?>
usermanager/morecheckinfos/?firstPage=firstPage"><img src="<?php echo @constant('WEBSITE_URL');?>
public/img/backhomeioc.gif">首页</a>
                        <a href="<?php echo @constant('WEBSITE_URL');?>
usermanager/morecheckinfos/?previousPage=previousPage"><img src="<?php echo @constant('WEBSITE_URL');?>
public/img/previousioc.gif">上页</a>
                      <span>第<font><input value="<?php echo $_SESSION['page']['pageCurrent'];?>
" type="text"  class="zh"/></font>页 总共 <?php echo $_SESSION['page']['countPage'];?>
 页 |</span>
                        <a href="<?php echo @constant('WEBSITE_URL');?>
usermanager/morecheckinfos/?nextPage=nextPage">下页<img src="<?php echo @constant('WEBSITE_URL');?>
public/img/nextioc.gif"></a>
                        <a href="<?php echo @constant('WEBSITE_URL');?>
usermanager/morecheckinfos/?endPage=endPage">尾页<img src="<?php echo @constant('WEBSITE_URL');?>
public/img/endioc.gif"></a>
                    </div> 
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