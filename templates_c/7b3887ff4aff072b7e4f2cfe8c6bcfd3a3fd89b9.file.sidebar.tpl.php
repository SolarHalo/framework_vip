<?php /* Smarty version Smarty-3.1.13, created on 2013-11-03 14:23:43
         compiled from "G:\phpserver\framework\templates\admin\sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2366552765c6f109f27-02391382%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b3887ff4aff072b7e4f2cfe8c6bcfd3a3fd89b9' => 
    array (
      0 => 'G:\\phpserver\\framework\\templates\\admin\\sidebar.tpl',
      1 => 1383488602,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2366552765c6f109f27-02391382',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52765c6f1646d3_58571024',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52765c6f1646d3_58571024')) {function content_52765c6f1646d3_58571024($_smarty_tpl) {?><div class="sidebar-nav"> 
		
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
					
			 </ul> 
        
</div> 
 
	<?php }} ?>