<?php /* Smarty version Smarty-3.1.13, created on 2013-08-21 11:54:33
         compiled from "F:\PHP_WorkSapce\framework\templates\admin\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5725214aa79cca875-89978266%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d33c3ec1934312e1ad9f8347fde5fd625968754' => 
    array (
      0 => 'F:\\PHP_WorkSapce\\framework\\templates\\admin\\index.tpl',
      1 => 1376717601,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5725214aa79cca875-89978266',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'admin_action_alert' => 0,
    'admin_quick_note' => 0,
    'user_info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5214aa7a637b86_55278042',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5214aa7a637b86_55278042')) {function content_5214aa7a637b86_55278042($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("admin/navibar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("admin/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

 <!--- 以上为左侧菜单栏 sidebar --->
	 
<div class="content">
        
        <div class="header">
            <div class="stats">
			<p class="stat"><!--span class="number"></span--></p>
			</div>

            <h1 class="page-title">test</h1>
        </div>
        
		<ul class="breadcrumb">
            <li><a href="<{$smarty.const.ADMIN_URL}><{$content_header.module_url}>">首页 </a> <span class="divider">/</span></li> 
			<li class="active"><a href="<{$smarty.const.ADMIN_URL}><{$content_header.father_menu_url}>">快捷操作</a> <span class="divider">/</span></li> 
        </ul>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="bb-alert alert alert-info" style="display: none;">
			<span>操作成功</span>
		</div>
<!--- START 以上内容不需更改，保证该TPL页内的标签匹配即可 --->

<?php echo $_smarty_tpl->tpl_vars['admin_action_alert']->value;?>

<?php echo $_smarty_tpl->tpl_vars['admin_quick_note']->value;?>


	<div class="block">
        <a href="#page-menu" class="block-heading" data-toggle="collapse">快捷菜单</a>
        <div id="page-menu" class="block-body collapse in">
		<h3>
		 
			<span>
				<a href="<?php echo @constant('WEBSITE_URL');?>
admin/userLog">
				  查看VIP会没登录日志
				</a>
			</span>&nbsp; 
			 
		</h3>
		</div> 
    </div>
	
	<div class="block">
        <a href="#page-stats" class="block-heading" data-toggle="collapse">当前用户信息</a>
        <div id="page-stats" class="block-body collapse in">
			
               <table class="table table-striped">  
						     
							 <tr>
						        <td>用户名</td>
						        <td>真实姓名</td>
						        <td>手机号</td>
						        <td>Email</td>
						        <td>登录时间</td>
						        <td>登录IP</td>
					          </tr>
						      <tr>
						        <td><?php echo $_smarty_tpl->tpl_vars['user_info']->value['user_name'];?>
</td>
						        <td><?php echo $_smarty_tpl->tpl_vars['user_info']->value['real_name'];?>
</td>
						        <td><?php echo $_smarty_tpl->tpl_vars['user_info']->value['mobile'];?>
</td>
						        <td><?php echo $_smarty_tpl->tpl_vars['user_info']->value['email'];?>
</td>
						        <td><?php echo $_smarty_tpl->tpl_vars['user_info']->value['login_time'];?>
</td>
						        <td><?php echo $_smarty_tpl->tpl_vars['user_info']->value['login_ip'];?>
</td>
					          </tr>
					        
					      </table>
		</div>
		<div class="alert alert-success">
			<button type="button" class="close" data-dismiss="alert">×</button>
			<strong>注意！</strong>请保管好您的个人信息，一点发生密码泄露请紧急联系管理员。</div>
        </div>
    </div>
	
<!--- END 以下内容不需更改，请保证该TPL页内的标签匹配即可 --->
<?php echo $_smarty_tpl->getSubTemplate ("admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>