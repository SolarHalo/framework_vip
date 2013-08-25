<?php /* Smarty version Smarty-3.1.13, created on 2013-08-20 13:11:02
         compiled from "F:\PHP_WorkSapce\framework\templates\loginbanner.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2901752136ae6005d95-92855760%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7de1e8502e244aae5801df620288efd5270a871' => 
    array (
      0 => 'F:\\PHP_WorkSapce\\framework\\templates\\loginbanner.tpl',
      1 => 1377003857,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2901752136ae6005d95-92855760',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52136ae63ec9d4_97263863',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52136ae63ec9d4_97263863')) {function content_52136ae63ec9d4_97263863($_smarty_tpl) {?> <?php if (count($_SESSION['vipInfoArr'])==0){?>
<div class="Welcomeuseer zh">
	<a href="<?php echo @constant('WEBSITE_URL');?>
login">欢迎登录</a>
</div>
<?php }else{ ?>
<div class="head6 Welcomeuseer zh">
	<img src="<?php echo @constant('WEBSITE_URL');?>
public/img/hduser-iocn.gif" style="vertical-align:sub; cursor:pointer;" class="xiaoguo6"/>
    <a class="xiaoguo6 user_login-y" href="#">尊贵的<font>汪涵</font>，您好!</a>
    <ul class="wrapper6 zh">
    	<li><a href="<?php echo @constant('WEBSITE_URL');?>
usermanager">账号管理</a></li>
        <li><a href="<?php echo @constant('WEBSITE_URL');?>
usermanager/checkinfos">消费记录</a></li>
    </ul>
    <a href="#">退出</a>
</div>
<?php }?> <?php }} ?>