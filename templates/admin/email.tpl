{{include file ="admin/header.tpl"}}
{{include file ="admin/navibar.tpl"}}
{{include file ="admin/sidebar.tpl"}} 
<div class="content">
        
        <div class="header">
            <div class="stats">
			<p class="stat"><!--span class="number"></span--></p>
			</div>

            <h1 class="page-title">email信息设置</h1>
        </div>
        
		<ul class="breadcrumb">
            <li><a href="{{$smarty.const.WEBSITE_URL}}admin/user">email信息设置</a> <span class="divider">/</span></li>  
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
      <li class="active"><a href="#home" data-toggle="tab">{{$name}}</a></li>
    </ul>	
	-->
	<div id="myTabContent" class="tab-content">
		  <div class="tab-pane active in" id="home">

           <form id="tab" method="post" action="{{$smarty.const.WEBSITE_URL}}admin/email/update" autocomplete="off">
				<label>SMTP设置</label>
				<input type="text" name="smtp" value="{{$smtp}}" class="input-xlarge"  autofocus="true" required="true"/>
				<input type="hidden" name="id" value="{{$id}}" class="input-xlarge" />
				 
				<label>邮箱用户名</label> 
			<input type="text" name="username" value="{{$username}}" class="input-xlarge" 
			  required="true" >
				<label>邮箱密码</label> 
			<input type="text" name="pwd" value="{{$pwd}}" class="input-xlarge" 
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
{{include file="admin/footer.tpl" }}