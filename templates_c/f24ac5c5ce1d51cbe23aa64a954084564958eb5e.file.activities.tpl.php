<?php /* Smarty version Smarty-3.1.13, created on 2013-11-03 14:23:49
         compiled from "G:\phpserver\framework\templates\admin\activities.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2007352765c75cd6c78-10806886%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f24ac5c5ce1d51cbe23aa64a954084564958eb5e' => 
    array (
      0 => 'G:\\phpserver\\framework\\templates\\admin\\activities.tpl',
      1 => 1383488602,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2007352765c75cd6c78-10806886',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'admin_action_alert' => 0,
    'admin_quick_note' => 0,
    'activitis' => 0,
    'activity' => 0,
    'page_html' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52765c76000494_93164174',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52765c76000494_93164174')) {function content_52765c76000494_93164174($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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

     <div class="block">
        <a href="#page-stats" class="block-heading" data-toggle="collapse">会员专享活动</a>
        <div id="page-stats" class="block-body collapse in">
        <h1> <button type="button" class="btn btn-primary"  onclick="javascript:window.location='<?php echo @constant('WEBSITE_URL');?>
admin/activities/add'">添加活动</button></h1>
            <table class="table table-striped">
              <thead>
                <tr>
					<th style="width:20px">#</th>
					<th style="width:80px">活动名称</th>  
					<th style="width:100px">活动类型</th>
					<th style="width:100px">更新时间</th> 
					<th style="width:80px">操作</th>
                </tr>
              </thead>
              <tbody>							  
               
                <?php  $_smarty_tpl->tpl_vars['activity'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['activity']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['activitis']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['activity']->key => $_smarty_tpl->tpl_vars['activity']->value){
$_smarty_tpl->tpl_vars['activity']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['activity']->key;
?>
					<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['activity']->value->id;?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['activity']->value->acti_name;?>
</td> 
					
				    <td> 
				    <?php if ($_smarty_tpl->tpl_vars['activity']->value->acti_type==1){?>
				        图片信息
 					<?php }else{ ?>
	 	 		       视频信息
				    <?php }?>
				    </td>
				    <td><?php echo $_smarty_tpl->tpl_vars['activity']->value->uptime;?>
</td> 
					<td>
					<a href="<?php echo @constant('WEBSITE_URL');?>
admin/activities/updateactivity/?activi=<?php echo $_smarty_tpl->tpl_vars['activity']->value->id;?>
" title= "修改" ><i class="icon-pencil"></i></a> 
					<a href="<?php echo @constant('WEBSITE_URL');?>
admin/activities/delactivity/?activi=<?php echo $_smarty_tpl->tpl_vars['activity']->value->id;?>
" title= "删除" ><i class="icon-remove"></i></a> 
					</td>
					</tr>
				<?php } ?>
              </tbody>
            </table> 
				<!--- START 分页模板 --->
				
               <?php echo $_smarty_tpl->tpl_vars['page_html']->value;?>

					
			   <!--- END --->
        </div>
    </div>
	   
<!-- END 以下内容不需更改，请保证该TPL页内的标签匹配即可 -->
<?php echo $_smarty_tpl->getSubTemplate ("admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>