<?php /* Smarty version Smarty-3.1.13, created on 2013-08-10 06:24:46
         compiled from "D:/workspace/php/framework/templates/admin/test.tpl" */ ?>
<?php /*%%SmartyHeaderCode:65505204fb70bc5e03-96966307%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84dc659cf1412c91d697d9bd2d0df631ba2792fc' => 
    array (
      0 => 'D:/workspace/php/framework/templates/admin/test.tpl',
      1 => 1376115864,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '65505204fb70bc5e03-96966307',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5204fb70c2f5b5_26587243',
  'variables' => 
  array (
    'admin_action_alert' => 0,
    'admin_quick_note' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5204fb70c2f5b5_26587243')) {function content_5204fb70c2f5b5_26587243($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("admin/navibar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("admin/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


 
 <script type="text/javascript">
$(function () {
   /** $.ajax({
			'url': 'http://localhost/admin/userLog/testAjax',
			'type' : 'POST',
			'data':{'page':1,'row':6},
			'dataType':'json',
			'success': function(data){
				alert( data.row);
			}
			});*/
			
			var conditions = {"page":2,"row":7};
			conditions = encodeURI(conditions);
    $.ajax({
			'url': 'http://localhost/admin/userLog/testAjax1/param='+conditions,
			//'dataType':'json',
			'success': function(data){
				alert( data);
			}
			});
}); 
</script>
 
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
      <li class="active"><a href="#home" data-toggle="tab">请填写账号资料</a></li>
    </ul>	
	
	<div id="myTabContent" class="tab-content">
		  <div class="tab-pane active in" id="home">
		  kkkkkkkkkkkkkk
			<table id="list"><tr><td></td></tr></table> 
    		<div id="pager"></div>
           
        </div>
    </div>
</div>
<!-- END 以下内容不需更改，请保证该TPL页内的标签匹配即可 -->
<?php echo $_smarty_tpl->getSubTemplate ("admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>