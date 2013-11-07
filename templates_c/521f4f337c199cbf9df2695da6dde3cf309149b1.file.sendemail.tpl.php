<?php /* Smarty version Smarty-3.1.13, created on 2013-11-04 04:32:16
         compiled from "G:\phpserver\framework\templates\admin\sendemail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:191595276685459a1e1-55398713%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '521f4f337c199cbf9df2695da6dde3cf309149b1' => 
    array (
      0 => 'G:\\phpserver\\framework\\templates\\admin\\sendemail.tpl',
      1 => 1383539468,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '191595276685459a1e1-55398713',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_527668546ded58_14840444',
  'variables' => 
  array (
    'admin_action_alert' => 0,
    'admin_quick_note' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_527668546ded58_14840444')) {function content_527668546ded58_14840444($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("admin/navibar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("admin/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<style type="text/css">
.ui-pg-input{
	width:20px;
}
.ui-pg-selbox {
	width:60px;
    height:30px;
}
</style>
 
 <script type="text/javascript">
$(function () {
    jQuery("#list2").jqGrid({
   	url:'<?php echo @constant('WEBSITE_URL');?>
admin/email/emailLogs',
   	
	datatype: "json",
	mtype: 'POST',
   	colNames:['编号','发送日期',  '发送数量','VIP帐号'],
   	colModel:[
   		{name:'id',index:'id', width:100},
   		{name:'senddate',index:'senddate', width:150},
   		{name:'sendcount',index:'sendcount', width:250, align:"left"},
   		{name:'vipno',index:'sendcount', width:250, align:"left"}
   	],
   	height: '100%',
	width:'100%',
   	rowNum:30, 
   	pager: '#pager2',
    viewrecords: true,
    caption:"邮件发送日志"
});
jQuery("#list2").jqGrid('navGrid','#pager2',{find:false,edit:false,add:false,del:false,excel:true},{},
{},
{},
{multipleSearch:true, multipleGroup:true});

jQuery("#list2").jqGrid('navButtonAdd','#pager2',{
                    caption:"Export", 
                    buttonicon:"ui-icon-save",
                    onClickButton : function () { 
						var condition = getTimeCondition();
                        //window.location.href = "<?php echo @constant('WEBSITE_URL');?>
admin/userLog/exportExcel";
                   		window.location.href = "<?php echo @constant('WEBSITE_URL');?>
service/admin/exportemaillog.php?"+condition;
                    } 
                });
}); 

function gridReload(){
	jQuery("#list2").jqGrid('setGridParam',{url:"<?php echo @constant('WEBSITE_URL');?>
admin/email/emailLogs/"+getTimeCondition(),page:1}).trigger("reloadGrid");
}

function getTimeCondition(){
	var starttime = jQuery("#datepicker1").val();
	var endtime = jQuery("#datepicker2").val();
	return ("starttime="+starttime+"&endtime="+endtime);
}

function cleartime(){
	jQuery("#datepicker1").val("");
	jQuery("#datepicker2").val("");
}

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
	
	<div id="myTabContent" class="tab-content">
		  <div class="tab-pane active in" id="home">
		  <div>
		  	<input type="text" id="datepicker1" class="uneditable-input" placeholder="开始时间" onClick="WdatePicker()">
  			<input type="text" id="datepicker2" class="uneditable-input" placeholder="结束时间" onClick="WdatePicker()">
			<button onclick="gridReload()" id="submitButton" class="btn btn-primary">搜索</button>
			<button onclick="cleartime()" id="clearButton" class="btn">清空时间</button>
		  </div>
			<table id="list2"></table>
			<div id="pager2"></div>
           
        </div>
    </div>
</div>
<!-- END 以下内容不需更改，请保证该TPL页内的标签匹配即可 -->
<?php echo $_smarty_tpl->getSubTemplate ("admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>