<?php /* Smarty version Smarty-3.1.13, created on 2013-08-12 15:03:15
         compiled from "G:\phpserver\framework\templates\admin\param.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3195752065b49cf8683-98582543%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '001b650c5eccc9e7b13006502b807ff4331466c6' => 
    array (
      0 => 'G:\\phpserver\\framework\\templates\\admin\\param.tpl',
      1 => 1376318110,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3195752065b49cf8683-98582543',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52065b49e0ef40_41169360',
  'variables' => 
  array (
    'admin_action_alert' => 0,
    'admin_quick_note' => 0,
    'name' => 0,
    'id' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52065b49e0ef40_41169360')) {function content_52065b49e0ef40_41169360($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("admin/navibar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("admin/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 
<div class="content">
        
        <div class="header">
            <div class="stats">
			<p class="stat"><!--span class="number"></span--></p>
			</div>

            <h1 class="page-title">后台管理员管理</h1>
        </div>
        
		<ul class="breadcrumb">
            <li><a href="<?php echo @constant('WEBSITE_URL');?>
admin/user">管理列表</a> <span class="divider">/</span></li>  
			 <a title= "移除快捷菜单" href="#"><li class="active"><i class="icon-minus" method="del" url="#"></i></li></a>
	         <a title= "加入快捷菜单" href="#"><li class="active"><i class="icon-plus" method="add" url="#"></i></li></a>
			 
			
        </ul>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="bb-alert alert alert-info" style="display: none;">
			<span>操作成功</span>
		</div>
 
<?php echo $_smarty_tpl->tpl_vars['admin_action_alert']->value;?>

<?php echo $_smarty_tpl->tpl_vars['admin_quick_note']->value;?>

    
<div class="well">

 
    <ul class="nav nav-tabs">
      <li class="active"><a href="#home" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</a></li>
    </ul>	
	
	<div id="myTabContent" class="tab-content">
		  <div class="tab-pane active in" id="home">

           <form id="tab" method="post" action="<?php echo @constant('WEBSITE_URL');?>
admin/param/update" autocomplete="off">
				<label>修改的name</label>
				<input type="text" name="paramname" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" class="input-xlarge" 
				readonly=true" autofocus="true" required="true" >
				<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"/>
				<label>内容</label>
				 
				<textarea name="paramvalue" rows="25" class="input-xxlarge" ><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</textarea>
				
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