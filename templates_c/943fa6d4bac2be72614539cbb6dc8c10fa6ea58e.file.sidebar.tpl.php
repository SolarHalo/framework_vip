<?php /* Smarty version Smarty-3.1.13, created on 2013-08-07 14:11:06
         compiled from "D:/workspace/php/framework/templates/admin/sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25119520251445a8379-58699361%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '943fa6d4bac2be72614539cbb6dc8c10fa6ea58e' => 
    array (
      0 => 'D:/workspace/php/framework/templates/admin/sidebar.tpl',
      1 => 1375884659,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25119520251445a8379-58699361',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_520251445abca3_43055010',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_520251445abca3_43055010')) {function content_520251445abca3_43055010($_smarty_tpl) {?><div class="sidebar-nav"> 
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