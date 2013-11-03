<?php /* Smarty version Smarty-3.1.13, created on 2013-11-03 14:23:43
         compiled from "G:\phpserver\framework\templates\admin\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3131852765c6f17b0a3-40099364%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '83b31140d02dbd13f8cd714d739f99a64c8865e5' => 
    array (
      0 => 'G:\\phpserver\\framework\\templates\\admin\\footer.tpl',
      1 => 1383488602,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3131852765c6f17b0a3-40099364',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52765c6f1937d8_30218445',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52765c6f1937d8_30218445')) {function content_52765c6f1937d8_30218445($_smarty_tpl) {?>                    
	
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