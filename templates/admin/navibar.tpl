  <body class=""> 
  <!--<![endif]-->
<div class="navbar">
        <div class="navbar-inner">
                <ul class="nav pull-right">
                    
                    <!-- li><a href="#" class="hidden-phone visible-tablet visible-desktop" role="button">设置模板</a></li -->
					 
				 
                   
					
					<li id="fat-menu" class="dropdown">
                        <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-user"></i> admin
                            <i class="icon-caret-down"></i>
                        </a>

                        <ul class="dropdown-menu">
                          
                            <li><a tabindex="-1" href="{{$smarty.const.WEBSITE_URL}}admin/login/loginout">登出</a></li>
                        </ul>
                    </li>
                    
                </ul>
                <a class="brand" href="{{$smarty.const.WEBSITE_URL}}/index.php"><span class="first"></span> <span class="second">{{$smarty.const.ADMIN_TITLE}}</span></a>
        </div>
</div>