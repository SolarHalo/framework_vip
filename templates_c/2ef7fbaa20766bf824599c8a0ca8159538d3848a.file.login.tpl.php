<?php /* Smarty version Smarty-3.1.13, created on 2013-11-03 14:29:14
         compiled from "G:\phpserver\framework\templates\admin\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3144752765d67b930d2-97416288%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ef7fbaa20766bf824599c8a0ca8159538d3848a' => 
    array (
      0 => 'G:\\phpserver\\framework\\templates\\admin\\login.tpl',
      1 => 1383488950,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3144752765d67b930d2-97416288',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52765d67cb83c1_72450258',
  'variables' => 
  array (
    'admin_action_alert' => 0,
    '_POST' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52765d67cb83c1_72450258')) {function content_52765d67cb83c1_72450258($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin/simple_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

  <body class="simple_body"> 
  <!--<![endif]-->
    
    <div class="navbar">
        <div class="navbar-inner">
                <ul class="nav pull-right">
                    
                </ul>
                <a class="brand" href="<?php echo @constant('WEBSITE_URL');?>
/index.php"><span class="first"></span> <span class="second"><?php echo @constant('PROJECT_NAME');?>
</span></a>
        </div>
    </div>
<div>
<div class="container-fluid">	    
    <div class="row-fluid">	
	
    <div class="dialog">
		<?php echo $_smarty_tpl->tpl_vars['admin_action_alert']->value;?>
	
        <div class="block">
            <p class="block-heading">登入</p>
            <div class="block-body">
                <form name="loginForm" method="post" action="<?php echo @constant('WEBSITE_URL');?>
admin/login">
                    <label>账号</label>
                    <input type="text" class="span12" name="user_name" value="<?php echo $_smarty_tpl->tpl_vars['_POST']->value['user_name'];?>
" required="true" autofocus="true">
                    <label>密码</label>
                    <input type="password" class="span12" name="password" value = "<?php echo $_smarty_tpl->tpl_vars['_POST']->value['password'];?>
" required="true" >
                    
                     <label>验证码</label>
					<input type="text" name="verify_code" class="span4" placeholder="输入验证码" autocomplete="off" required="required">
					<a href="#"><img title="验证码" id="verify_code" src="<?php echo @constant('WEBSITE_URL');?>
/framework/util/verify_code_cn.php" style="vertical-align:top"></a>
					<div class="clearfix"><input type="checkbox" name="remember" value="remember-me"> 记住我 
					<span class="label label-info">一个月内不用再次登入</span>
					<input type="submit" class="btn btn-primary pull-right" name="loginSubmit" value="登入"/></div>
					
                </form>
            </div>
        </div>
     
    </div>
<script type="text/javascript">
$("#verify_code").click(function(){
	var d = new Date()
	var hour = d.getHours(); 
	var minute = d.getMinutes();
	var sec = d.getSeconds();
    $(this).attr("src","<?php echo @constant('WEBSITE_URL');?>
/framework/util/verify_code_cn.php?"+hour+minute+sec);
});
</script>

<?php echo $_smarty_tpl->getSubTemplate ("admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



<?php }} ?>