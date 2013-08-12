<?php /* Smarty version Smarty-3.1.13, created on 2013-08-12 10:34:11
         compiled from "G:\phpserver\framework\templates\admin\activities_add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:298505207afb45152c4-69076830%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12f79d20ca5a6043d9400633ba8bf9a6c2fc9aca' => 
    array (
      0 => 'G:\\phpserver\\framework\\templates\\admin\\activities_add.tpl',
      1 => 1376303085,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '298505207afb45152c4-69076830',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5207afb4616537_84309416',
  'variables' => 
  array (
    'admin_action_alert' => 0,
    'admin_quick_note' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5207afb4616537_84309416')) {function content_5207afb4616537_84309416($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("admin/navibar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("admin/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script type="text/javascript" src="<?php echo @constant('WEBSITE_URL');?>
public/assets/lib/ajaxupload.js"></script>
<<style>
<!--
#uploadedName{
	width:50%;
}
-->
</style>
<script type="text/javascript">
window.onload = function(){
	var oBtn = document.getElementById("unloadPic");
	var oShow = document.getElementById("uploadedName");
	var oRemind = document.getElementById("errorRemind");	
	new AjaxUpload(oBtn,{
		action:"<?php echo @constant('WEBSITE_URL');?>
admin/activities/fileupload",
		name:"upload",
		onSubmit:function(file,ext){
			if(ext && /^(jpg|jpeg|png|gif|mp4)$/.test(ext)){
				//ext是后缀名
				oBtn.value = "正在上传…";
				oBtn.disabled = "disabled";
			}else{	
				oRemind.style.color = "#ff3300";
				oRemind.innerHTML = "不支持的文件格式！只能上传jpg|jpeg|png|gif|mp4";
				return true;
			}
		},
		onComplete:function(file,response){
			console.log(response);
			oBtn.disabled = "";
			oBtn.value = "再上传一张图片";
			oRemind.innerHTML = "";
			var rownum = $("#uploadedName tr").length;
			var filehtml ="<tr id='"+rownum+"'><td><input type='radio' name='imgdefault'  value='"+file+"'  /></td><td> <span class='imgname'>"+file+"</span></td><td><a href='javascript:delrows(\""+rownum+"\");'>删除</a></td></tr>";
			 
			$("#uploadedName").append(filehtml);
			 
		}
	});
};
function delrows(rownum){
	$("#"+rownum).remove();  
	  
}
function checkform(){

	var obj = new Object();
	var files = new Array();
	
	$(".imgname").each(function(){ 
		files.push($(this).text()); 
	 });
	
	 var defaulimg = $("input[name='imgdefault']:checked").val();
	 obj.files = files;
	 obj.defaultimgs =  defaulimg;
	 obj.activities_name = $("#activities_name").val();
	 obj.activities_desc = $("#activities_desc").val();
     obj.imgtype = $(".activities_type").val();  
     if(obj.defaultimgs == null){
          alert("请选择默认显示的图片");
          return false;
     }
 
	    $.post(
				'<?php echo @constant('WEBSITE_URL');?>
admin/activities/updateorinsert',
				obj,
				function(data){ 
					 alert("上传成功");
				},
				"json"
	    );
	  
	return false;
}
</script>
<div class="content">
        
        <div class="header">
            <div class="stats">
			<p class="stat"><!--span class="number"></span--></p>
			</div>

            <h1 class="page-title">活动专享活动</h1>
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
      <li class="active"><a href="#home" data-toggle="tab">请填写活动资料</a></li>
    </ul>	
	
	<div id="myTabContent" class="tab-content">
		  <div class="tab-pane active in" id="home">

           <form id="tab" method="post" action="" autocomplete="off" onsubmit="javascript: return false;">
				<label>活动名称</label>
				<input type="text" name="activities_name"  id = "activities_name" class="input-xlarge" autofocus="true" required="true" >
				<label>活动类型</label>  
				 <select name="activities_type" >
				  <option value="1" selected >图片</option>
				  <option value="2">视频</option>
				 </select> 
				 <label>文件</label>  
				  <p id="errorRemind"></p>
                  <input id="unloadPic" type="button" value="上传图片" />
           
				<table id="uploadedName" class="table table-hover" width="51%"> 
				<tr><th>默认显示</th><th>文件名</th><th>操作</th></tr>
                </table>
				   
				<label>活动描述</label>
				<textarea name="activities_desc" id="activities_desc" rows="6" class="input-xxlarge"></textarea>
				
				
				
			<div class="btn-toolbar">
				<button type="submit" class="btn btn-primary"  onclick="checkform();"><strong>提交</strong></button>
				<div class="btn-group"></div>
			</div> 
			</form>
 
        </div>
    </div>
</div>
<!-- END 以下内容不需更改，请保证该TPL页内的标签匹配即可 -->
<?php echo $_smarty_tpl->getSubTemplate ("admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>