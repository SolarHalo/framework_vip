<?php /* Smarty version Smarty-3.1.13, created on 2013-11-03 15:05:20
         compiled from "G:\phpserver\framework\templates\admin\email.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1979252765ea7292847-35998595%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '579847a7f1a3194c76bc471e2fea34959e1bc7be' => 
    array (
      0 => 'G:\\phpserver\\framework\\templates\\admin\\email.tpl',
      1 => 1383491113,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1979252765ea7292847-35998595',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52765ea73a8326_84290766',
  'variables' => 
  array (
    'name' => 0,
    'smtp' => 0,
    'id' => 0,
    'username' => 0,
    'pwd' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52765ea73a8326_84290766')) {function content_52765ea73a8326_84290766($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("admin/navibar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("admin/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 
<div class="content">
        
        <div class="header">
            <div class="stats">
			<p class="stat"><!--span class="number"></span--></p>
			</div>

            <h1 class="page-title">email信息设置</h1>
        </div>
        
		<ul class="breadcrumb">
            <li><a href="<?php echo @constant('WEBSITE_URL');?>
admin/user">email信息设置</a> <span class="divider">/</span></li>  
			 <a title= "移除快捷菜单" href="#"><li class="active"><i class="icon-minus" method="del" url="#"></i></li></a>
	         <a title= "加入快捷菜单" href="#"><li class="active"><i class="icon-plus" method="add" url="#"></i></li></a>
			 
			
        </ul>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="bb-alert alert alert-info" style="display: none;">
			<span>操作成功</span>
		</div>
 
    
<div class="well">

 <!--
    <ul class="nav nav-tabs">
      <li class="active"><a href="#home" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</a></li>
    </ul>	
	-->
	<div id="myTabContent" class="tab-content">
		  <div class="tab-pane active in" id="home">

           <form id="tab" method="post" action="<?php echo @constant('WEBSITE_URL');?>
admin/email/update" autocomplete="off">
				<label>SMTP设置</label>
				<input type="text" name="smtp" value="<?php echo $_smarty_tpl->tpl_vars['smtp']->value;?>
" class="input-xlarge"  autofocus="true" required="true"/>
				<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="input-xlarge" />
				 
				<label>邮箱用户名</label> 
			<input type="text" name="username" value="<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
" class="input-xlarge" 
			  required="true" >
				<label>邮箱密码</label> 
			<input type="text" name="pwd" value="<?php echo $_smarty_tpl->tpl_vars['pwd']->value;?>
" class="input-xlarge" 
				   required="true" >
				
			<div class="btn-toolbar">
				<button type="submit"  onclick="javascript:document.tab.submit()" class="btn btn-primary">
				<strong>提交</strong></button>
				<div class="btn-group"></div>
			</div>
			</form>
        </div>
    
</div>




</div>	 
<!-- END 以下内容不需更改，请保证该TPL页内的标签匹配即可 -->
<?php echo $_smarty_tpl->getSubTemplate ("admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>