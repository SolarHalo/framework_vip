<?php /* Smarty version Smarty-3.1.13, created on 2013-08-11 00:19:04
         compiled from "D:\PHPWeb\framework_vip\templates\admin\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3156520667f844b8a3-19703638%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '09b09e50fb75dffbf9953164636e62f7f4fc1093' => 
    array (
      0 => 'D:\\PHPWeb\\framework_vip\\templates\\admin\\footer.tpl',
      1 => 1375975160,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3156520667f844b8a3-19703638',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_520667f844f725_08433381',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_520667f844f725_08433381')) {function content_520667f844f725_08433381($_smarty_tpl) {?>                    
	
					<footer>
                        <hr>
                         
                    </footer>
				</div>
			</div>
		</div>
    <script src="<?php echo @constant('WEBSITE_URL');?>
/public/assets/lib/bootstrap/js/bootstrap.js"></script>
	
<!--- + -快捷方式的提示 --->
	
<script type="text/javascript">	
	
alertDismiss("alert-success",3);
alertDismiss("alert-info",10);
	
listenShortCut("icon-plus");
listenShortCut("icon-minus");

</script>
  </body>
</html><?php }} ?>