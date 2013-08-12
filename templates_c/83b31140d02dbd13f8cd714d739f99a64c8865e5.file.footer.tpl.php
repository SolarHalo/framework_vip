<?php /* Smarty version Smarty-3.1.13, created on 2013-08-10 08:46:42
         compiled from "G:\phpserver\framework\templates\admin\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:133335205fdf2da5ba4-20231633%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '83b31140d02dbd13f8cd714d739f99a64c8865e5' => 
    array (
      0 => 'G:\\phpserver\\framework\\templates\\admin\\footer.tpl',
      1 => 1375375472,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '133335205fdf2da5ba4-20231633',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5205fdf2de7719_13535089',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5205fdf2de7719_13535089')) {function content_5205fdf2de7719_13535089($_smarty_tpl) {?>                    
	
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