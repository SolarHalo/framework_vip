<?php /* Smarty version Smarty-3.1.13, created on 2013-08-20 04:28:05
         compiled from "G:\phpserver\framework\templates\loginbanner.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3335212edb83ee9d0-30140240%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b187724bce5faf76612081292d3d13c422f42ce' => 
    array (
      0 => 'G:\\phpserver\\framework\\templates\\loginbanner.tpl',
      1 => 1376972575,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3335212edb83ee9d0-30140240',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5212edb84b2857_19429481',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5212edb84b2857_19429481')) {function content_5212edb84b2857_19429481($_smarty_tpl) {?> <?php if (count($_SESSION['vipInfoArr'])==0){?>
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
<?php }?><?php }} ?>