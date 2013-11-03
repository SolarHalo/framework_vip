<?php /* Smarty version Smarty-3.1.13, created on 2013-11-03 14:12:50
         compiled from "G:\phpserver\framework\templates\loginbanner.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11571527659e25ec6a3-62397013%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b187724bce5faf76612081292d3d13c422f42ce' => 
    array (
      0 => 'G:\\phpserver\\framework\\templates\\loginbanner.tpl',
      1 => 1382457826,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11571527659e25ec6a3-62397013',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_527659e269c5e5_62591401',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_527659e269c5e5_62591401')) {function content_527659e269c5e5_62591401($_smarty_tpl) {?> <?php if (count($_SESSION['vipInfoArr'])==0){?>
<div class="Welcomeuseer zh">
	<a href="<?php echo @constant('WEBSITE_URL');?>
login">欢迎登录</a>
</div>
<?php }else{ ?>
<div class="head6 Welcomeuseer zh">
<div style="display:inline; position:relative;">
	<img src="<?php echo @constant('WEBSITE_URL');?>
public/img/hduser-iocn.gif" style="vertical-align:sub; cursor:pointer;" class="xiaoguo6"/>
    <a class="xiaoguo6 user_login-y" href="<?php echo @constant('WEBSITE_URL');?>
usermanager">尊贵的<font><?php echo $_SESSION['vipInfoArr']["name"];?>
</font>，您好!</a>
   <a href="<?php echo @constant('WEBSITE_URL');?>
login/loginout">退出</a>
    <ul class="wrapper6 zh">
    	<li><a href="<?php echo @constant('WEBSITE_URL');?>
usermanager">账号管理</a></li>
        <li><a href="<?php echo @constant('WEBSITE_URL');?>
usermanager/checkinfos">消费记录</a></li>
    </ul>
   
</div>
</div>
<?php }?> <?php }} ?>