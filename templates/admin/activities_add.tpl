{{include file ="admin/header.tpl"}}
{{include file ="admin/navibar.tpl"}}
{{include file ="admin/sidebar.tpl"}}
<script type="text/javascript" src="{{$smarty.const.WEBSITE_URL}}public/assets/lib/ajaxupload.js"></script>
<script type="text/javascript">
window.onload = function(){
	var oBtn = document.getElementById("unloadPic");
	var oShow = document.getElementById("uploadedName");
	var oRemind = document.getElementById("errorRemind");	
	new AjaxUpload(oBtn,{
		action:"{{$smarty.const.WEBSITE_URL}}admin/activities/fileupload",
		name:"upload",
		onSubmit:function(file,ext){
			if(ext && /^(jpg|jpeg|png|gif)$/.test(ext)){
				//ext是后缀名
				oBtn.value = "正在上传…";
				oBtn.disabled = "disabled";
			}else{	
				oRemind.style.color = "#ff3300";
				oRemind.innerHTML = "不支持非图片格式！";
				return true;
			}
		},
		onComplete:function(file,response){
			console.log(response);
			oBtn.disabled = "";
			oBtn.value = "再上传一张图片";
			oRemind.innerHTML = "";
			var newChild =  document.createElement("li");
			newChild.innerHTML = file;
			oShow.appendChild(newChild);
		}
	});
};
</script>
<div class="content">
        
        <div class="header">
            <div class="stats">
			<p class="stat"><!--span class="number"></span--></p>
			</div>

            <h1 class="page-title">活动专享活动</h1>
        </div>
        
		<ul class="breadcrumb">
            <li><a href="{{$smarty.const.WEBSITE_URL}}admin/user">管理列表</a> <span class="divider">/</span></li>  
			 <a title= "移除快捷菜单" href="#"><li class="active"><i class="icon-minus" method="del" url="#"></i></li></a>
	         <a title= "加入快捷菜单" href="#"><li class="active"><i class="icon-plus" method="add" url="#"></i></li></a>
			 
			
        </ul>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="bb-alert alert alert-info" style="display: none;">
			<span>操作成功</span>
		</div>
 
{{$admin_action_alert}}
{{$admin_quick_note}}
    
<div class="well">
    <ul class="nav nav-tabs">
      <li class="active"><a href="#home" data-toggle="tab">请填写活动资料</a></li>
    </ul>	
	
	<div id="myTabContent" class="tab-content">
		  <div class="tab-pane active in" id="home">

           <form id="tab" method="post" action="" autocomplete="off">
				<label>活动名称</label>
				<input type="text" name="activities_name"   class="input-xlarge" autofocus="true" required="true" >
				<label>活动类型</label>  
				 <select name="activities_type">
				  <option value="1">图片</option>
				  <option value="2">视频</option>
				 </select> 
				 <label>文件</label>  
				  <p id="errorRemind"></p>
                  <input id="unloadPic" type="button" value="上传图片" />
                 <ol id="uploadedName"></ol>
				   
				   
				<label>活动描述</label>
				<textarea name="activities_desc" rows="6" class="input-xxlarge"></textarea>
				
				
				
			<div class="btn-toolbar">
				<button type="submit" class="btn btn-primary"><strong>提交</strong></button>
				<div class="btn-group"></div>
			</div> 
			</form>
 
        </div>
    </div>
</div>
<!-- END 以下内容不需更改，请保证该TPL页内的标签匹配即可 -->
{{include file="admin/footer.tpl" }}