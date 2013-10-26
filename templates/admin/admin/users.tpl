{{include file ="admin/header.tpl"}}
{{include file ="admin/navibar.tpl"}}
{{include file ="admin/sidebar.tpl"}} 
<div class="content">
        
        <div class="header">
            <div class="stats">
			<p class="stat"><!--span class="number"></span--></p>
			</div>

            <h1 class="page-title">后台管理员管理</h1>
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
<!--- START 以上内容不需更改，保证该TPL页内的标签匹配即可 --->

{{$admin_action_alert}}
{{$admin_quick_note}}

<div class="btn-toolbar" style="margin-bottom:2px;">
    <a href="{{$smarty.const.WEBSITE_URL}}admin/user/add" class="btn btn-primary"><i class="icon-plus"></i> 账号</a>
	<a data-toggle="collapse" data-target="#search"  href="#" title= "检索"><button class="btn btn-primary" style="margin-left:5px"><i class="icon-search"></i></button></a>
</div>
{{if $_GET.search }}
<div id="search" class="collapse in">
{{else }}
<div id="search" class="collapse out" >
{{/if }}
<form class="form_search"  action="" method="GET" style="margin-bottom:0px">
	<div style="float:left;margin-right:5px">
		<label>选择账号组</label>
		{{html_options name=user_group id="DropDownTimezone" class="input-xlarge" options=$group_options selected=$_GET.user_group}}
	</div>
	<div style="float:left;margin-right:5px">
		<label>查询所有用户请留空</label>
		<input type="text" name="user_name" value="{{$_GET.user_name}}" placeholder="输入登录名" > 
		<input type="hidden" name="search" value="1" > 
	</div>
	<div class="btn-toolbar" style="padding-top:25px;padding-bottom:0px;margin-bottom:0px">
		<button type="submit" class="btn btn-primary">检索</button>
	</div>
	<div style="clear:both;"></div>
</form>
</div>
    <div class="block">
        <a href="#page-stats" class="block-heading" data-toggle="collapse">账号列表</a>
        <div id="page-stats" class="block-body collapse in">
               <table class="table table-striped">
              <thead>
                <tr>
					<th style="width:20px">#</th>
					<th style="width:80px">登录名</th>
					<th style="width:100px">姓名</th>
					<th style="width:100px">手机</th>
					<th style="width:80px">邮箱</th>
					<th style="width:80px">登录时间</th>
					<th style="width:80px">登录IP</th>
 					<th style="width:80px">描述</th>
					<th style="width:80px">操作</th>
                </tr>
              </thead>
              <tbody>							  
               
                {{foreach $user_infos as $key=>$user_info}}
					<tr>
					<td>{{$user_info->id}}</td>
					<td>{{$user_info->user_name}}</td>
					<td>{{$user_info->real_name}}</td>
					<td>{{$user_info->mobile}}</td>
					<td>{{$user_info->email}}</td>
					<td>{{$user_info->login_time}}</td>
					<td>{{$user_info->login_ip}}</td> 
					<td>{{$user_info->user_desc}}</td>
					<td>
					<a href="user_modify.php?user_id={{$user_info->id}}" title= "修改" ><i class="icon-pencil"></i></a> 
					</td>
					</tr>
				{{/foreach}}
              </tbody>
            </table> 
				<!--- START 分页模板 --->
				
               {{$page_html}}
					
			   <!--- END --->
        </div>
    </div>

<!---操作的确认层，相当于javascript:confirm函数--->
{{$osadmin_action_confirm}}

<!--- END 以下内容不需更改，请保证该TPL页内的标签匹配即可 --->
{{include file="admin/footer.tpl" }}