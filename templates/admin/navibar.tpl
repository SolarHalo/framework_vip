  <body class=""> 
  <!--<![endif]-->
<div class="navbar">
        <div class="navbar-inner">
                <ul class="nav pull-right">
                    
                    <!-- li><a href="#" class="hidden-phone visible-tablet visible-desktop" role="button">设置模板</a></li -->
					 
				 
                    <li id="fat-menu" class="dropdown">
                        <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">
							<i class="icon-cog"></i>设置<i class="icon-caret-down"></i>
						</a>
                        <ul class="dropdown-menu">
                            <li><a href="{{$smarty.const.WEBSITE_URL}}/admin/index/setting">系统设置</a></li>
                        </ul>
                    </li>
				 
					
					<li id="fat-menu" class="dropdown">
                        <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">
							
                            选择模板
                            <i class="icon-caret-down"></i>
                        </a>

                        <ul class="dropdown-menu">
                            <li><a href="{{$smarty.const.WEBSITE_URL}}/admin/set.php?t=default">默认模板</a></li>
                            <li><a href="{{$smarty.const.WEBSITE_URL}}/admin/set.php?t=blacktie">黑色领结</a></li>
                            <li><a href="{{$smarty.const.WEBSITE_URL}}/admin/set.php?t=wintertide">冰雪冬季</a></li>
							<li><a href="{{$smarty.const.WEBSITE_URL}}/admin/set.php?t=schoolpainting">青葱校园</a></li>
                        </ul>
                    </li>
					
					<li id="fat-menu" class="dropdown">
                        <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-user"></i> admin
                            <i class="icon-caret-down"></i>
                        </a>

                        <ul class="dropdown-menu">
                            <li><a tabindex="-1" href="{{$smarty.const.WEBSITE_URL}}/admin/profile.php">我的账号</a></li>
                            <li><a tabindex="-1" href="{{$smarty.const.WEBSITE_URL}}/logout.php">登出</a></li>
                        </ul>
                    </li>
                    
                </ul>
                <a class="brand" href="{{$smarty.const.WEBSITE_URL}}/index.php"><span class="first"></span> <span class="second">{{$smarty.const.ADMIN_TITLE}}</span></a>
        </div>
</div>