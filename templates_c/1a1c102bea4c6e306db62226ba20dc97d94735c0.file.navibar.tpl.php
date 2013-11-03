<?php /* Smarty version Smarty-3.1.13, created on 2013-11-03 14:23:43
         compiled from "G:\phpserver\framework\templates\admin\navibar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2306452765c6f06bfb5-56769808%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a1c102bea4c6e306db62226ba20dc97d94735c0' => 
    array (
      0 => 'G:\\phpserver\\framework\\templates\\admin\\navibar.tpl',
      1 => 1383488602,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2306452765c6f06bfb5-56769808',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52765c6f0f2152_38986904',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52765c6f0f2152_38986904')) {function content_52765c6f0f2152_38986904($_smarty_tpl) {?>  <body class=""> 
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