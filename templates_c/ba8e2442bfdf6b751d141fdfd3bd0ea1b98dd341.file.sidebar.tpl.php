<?php /* Smarty version Smarty-3.1.13, created on 2013-08-21 11:54:34
         compiled from "F:\PHP_WorkSapce\framework\templates\admin\sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:195315214aa7aa8f1c3-98111264%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba8e2442bfdf6b751d141fdfd3bd0ea1b98dd341' => 
    array (
      0 => 'F:\\PHP_WorkSapce\\framework\\templates\\admin\\sidebar.tpl',
      1 => 1376717601,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '195315214aa7aa8f1c3-98111264',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5214aa7aabd5a5_12311751',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5214aa7aabd5a5_12311751')) {function content_5214aa7aabd5a5_12311751($_smarty_tpl) {?><div class="sidebar-nav"> 
		
	       <a href="#sidebar_menu_1" class="nav-header collapsed" data-toggle="collapse"><i class="icon-th"></i>系统展示管理<i class="icon-chevron-up"></i></a>
		 
				<ul id="sidebar_menu_1" class="nav nav-list collapse in">
					<li><a href="<?php echo @constant('WEBSITE_URL');?>
admin/param/load/paramtype=rights">会员权益更新</a></li>
					<li><a href="<?php echo @constant('WEBSITE_URL');?>
admin/param/load/paramtype=faq">常见问题更新</a></li>
					<li><a href="<?php echo @constant('WEBSITE_URL');?>
admin/param/load/paramtype=google">GOOGLE统计更新</a></li>
					<li><a href="<?php echo @constant('WEBSITE_URL');?>
admin/activities">会员专享活动管理</a></li>
					<li><a href="<?php echo @constant('WEBSITE_URL');?>
admin/userLog">用户日志</a></li>
				</ul> 
		 <a href="#sidebar_menu_1" class="nav-header collapsed" data-toggle="collapse"><i class="icon-th"></i>系统管理 <i class="icon-chevron-up"></i></a>
		 
				<ul id="sidebar_menu_1" class="nav nav-list collapse in">
					<li><a href="<?php echo @constant('WEBSITE_URL');?>
admin/user">管理员管理</a></li> 
					<li><a href="<?php echo @constant('WEBSITE_URL');?>
admin/userLog">用户日志</a></li>
			 </ul> 
        <a target="_blank" href="#" class="nav-header" ><i class="icon-question-sign"></i>帮助</a>
</div> 
 
	<?php }} ?>