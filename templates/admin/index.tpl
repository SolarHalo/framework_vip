{{include file ="admin/header.tpl"}}
{{include file ="admin/navibar.tpl"}}
{{include file ="admin/sidebar.tpl"}}
 <!--- 以上为左侧菜单栏 sidebar --->
	 
<div class="content">
        
        <div class="header">
            <div class="stats">
			<p class="stat"><!--span class="number"></span--></p>
			</div>

            <h1 class="page-title">test</h1>
        </div>
        
		<ul class="breadcrumb">
            <li><a href="<{$smarty.const.ADMIN_URL}><{$content_header.module_url}>"> qk tqi  </a> <span class="divider">/</span></li>
            
			<li><a href="<{$smarty.const.ADMIN_URL}><{$content_header.father_menu_url}>">dddd</a> <span class="divider">/</span></li>
		 
			
			<li class="active">aaa</li>
			 
					<a title= "移除快捷菜单" href="#"><li class="active"><i class="icon-minus" method="del" url="<{$smarty.const.ADMIN_URL}>/ajax/shortcut.php?menu_id=<{$content_header.menu_id}>"></i></li></a>
	 
					<a title= "加入快捷菜单" href="#"><li class="active"><i class="icon-plus" method="add" url="<{$smarty.const.ADMIN_URL}>/ajax/shortcut.php?menu_id=<{$content_header.menu_id}>"></i></li></a>
			 
			
        </ul>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="bb-alert alert alert-info" style="display: none;">
			<span>操作成功</span>
		</div>
<!--- START 以上内容不需更改，保证该TPL页内的标签匹配即可 --->

{{$admin_action_alert}}
{{$admin_quick_note}}

	<div class="block">
        <a href="#page-menu" class="block-heading" data-toggle="collapse">快捷菜单</a>
        <div id="page-menu" class="block-body collapse in">
		<h3>
		 
			<span>
				<a href="">
				   可以多个称
				</a>
			</span>&nbsp;
			 	<span>
				<a href="">
				   可以多个称
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
						        <td>{{$user_info.user_name}}</td>
						        <td>{{$user_info.real_name}}</td>
						        <td>{{$user_info.mobile}}</td>
						        <td>{{$user_info.email}}</td>
						        <td>{{$user_info.login_time}}</td>
						        <td>{{$user_info.login_ip}}</td>
					          </tr>
					        
					      </table>
		</div>
		<div class="alert alert-success">
			<button type="button" class="close" data-dismiss="alert">×</button>
			<strong>注意！</strong>请保管好您的个人信息，一点发生密码泄露请紧急联系管理员。</div>
        </div>
    </div>
	
<!--- END 以下内容不需更改，请保证该TPL页内的标签匹配即可 --->
{{include file="admin/footer.tpl" }}