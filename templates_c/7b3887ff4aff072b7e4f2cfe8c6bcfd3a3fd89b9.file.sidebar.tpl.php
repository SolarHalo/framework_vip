<?php /* Smarty version Smarty-3.1.13, created on 2013-08-13 08:50:15
         compiled from "G:\phpserver\framework\templates\admin\sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:311805205fdf2d53da6-28802027%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b3887ff4aff072b7e4f2cfe8c6bcfd3a3fd89b9' => 
    array (
      0 => 'G:\\phpserver\\framework\\templates\\admin\\sidebar.tpl',
      1 => 1376383812,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '311805205fdf2d53da6-28802027',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5205fdf2d6ba05_46266624',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5205fdf2d6ba05_46266624')) {function content_5205fdf2d6ba05_46266624($_smarty_tpl) {?><div class="sidebar-nav"> 
		
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