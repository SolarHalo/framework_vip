<?php /* Smarty version Smarty-3.1.13, created on 2013-08-21 11:54:34
         compiled from "F:\PHP_WorkSapce\framework\templates\admin\navibar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:64265214aa7a9c88e6-42059638%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c519d51f6c8c3f2dc500a2674b958be3238dc745' => 
    array (
      0 => 'F:\\PHP_WorkSapce\\framework\\templates\\admin\\navibar.tpl',
      1 => 1376717601,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '64265214aa7a9c88e6-42059638',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5214aa7aa24dd1_20064602',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5214aa7aa24dd1_20064602')) {function content_5214aa7aa24dd1_20064602($_smarty_tpl) {?>  <body class=""> 
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
                            <li><a href="<?php echo @constant('WEBSITE_URL');?>
/admin/index/setting">系统设置</a></li>
                        </ul>
                    </li>
				 
					
					<li id="fat-menu" class="dropdown">
                        <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">
							
                            选择模板
                            <i class="icon-caret-down"></i>
                        </a>

                        <ul class="dropdown-menu">
                            <li><a href="<?php echo @constant('WEBSITE_URL');?>
/admin/set.php?t=default">默认模板</a></li>
                            <li><a href="<?php echo @constant('WEBSITE_URL');?>
/admin/set.php?t=blacktie">黑色领结</a></li>
                            <li><a href="<?php echo @constant('WEBSITE_URL');?>
/admin/set.php?t=wintertide">冰雪冬季</a></li>
							<li><a href="<?php echo @constant('WEBSITE_URL');?>
/admin/set.php?t=schoolpainting">青葱校园</a></li>
                        </ul>
                    </li>
					
					<li id="fat-menu" class="dropdown">
                        <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-user"></i> admin
                            <i class="icon-caret-down"></i>
                        </a>

                        <ul class="dropdown-menu">
                            <li><a tabindex="-1" href="<?php echo @constant('WEBSITE_URL');?>
/admin/profile.php">我的账号</a></li>
                            <li><a tabindex="-1" href="<?php echo @constant('WEBSITE_URL');?>
/logout.php">登出</a></li>
                        </ul>
                    </li>
                    
                </ul>
                <a class="brand" href="<?php echo @constant('WEBSITE_URL');?>
/index.php"><span class="first"></span> <span class="second"><?php echo @constant('ADMIN_TITLE');?>
</span></a>
        </div>
</div><?php }} ?>