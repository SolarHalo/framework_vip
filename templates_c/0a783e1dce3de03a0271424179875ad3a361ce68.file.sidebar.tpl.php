<?php /* Smarty version Smarty-3.1.13, created on 2013-08-13 14:27:03
         compiled from "D:\workspace\php\framework\templates\admin\sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1997520a42372c7d61-06820601%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a783e1dce3de03a0271424179875ad3a361ce68' => 
    array (
      0 => 'D:\\workspace\\php\\framework\\templates\\admin\\sidebar.tpl',
      1 => 1376403990,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1997520a42372c7d61-06820601',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_520a42372e31a4_14163043',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_520a42372e31a4_14163043')) {function content_520a42372e31a4_14163043($_smarty_tpl) {?><div class="sidebar-nav"> 
		
	       <a href="#sidebar_menu_1" class="nav-header collapsed" data-toggle="collapse"><i class="icon-th"></i>系统展示管理<i class="icon-chevron-up"></i></a>
		 
				<ul id="sidebar_menu_1" class="nav nav-list collapse in">
					<li><a href=" ">会员权益更新</a></li>
					<li><a href=" ">常见问题更新</a></li>
					<li><a href=" ">GOOGLE统计更新</a></li>
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
 <!--- 以上为左侧菜单栏 sidebar --->
	<?php }} ?>