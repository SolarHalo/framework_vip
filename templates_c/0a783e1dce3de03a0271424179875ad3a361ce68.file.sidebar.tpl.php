<?php /* Smarty version Smarty-3.1.13, created on 2013-08-10 08:08:47
         compiled from "D:\workspace\php\framework\templates\admin\sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:210925205f50f600475-35875690%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a783e1dce3de03a0271424179875ad3a361ce68' => 
    array (
      0 => 'D:\\workspace\\php\\framework\\templates\\admin\\sidebar.tpl',
      1 => 1375884659,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '210925205f50f600475-35875690',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5205f50f60d1e2_80062657',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5205f50f60d1e2_80062657')) {function content_5205f50f60d1e2_80062657($_smarty_tpl) {?><div class="sidebar-nav"> 
			<a href="#sidebar_menu_1" class="nav-header collapsed" data-toggle="collapse"><i class="icon-th"></i>模块名称 <i class="icon-chevron-up"></i></a>
		 
				<ul id="sidebar_menu_1" class="nav nav-list collapse in">
					<li><a href=" ">用户管理</a></li>
					<li><a href=" ">用户管理</a></li>
					<li><a href=" ">用户管理</a></li>
					<li><a href="<?php echo @constant('WEBSITE_URL');?>
admin/userLog">用户日志</a></li>
				</ul> 

        <a target="_blank" href="#" class="nav-header" ><i class="icon-question-sign"></i>帮助</a>
</div> 
 <!--- 以上为左侧菜单栏 sidebar --->
	<?php }} ?>