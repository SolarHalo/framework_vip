<?php /* Smarty version Smarty-3.1.13, created on 2013-08-07 13:53:08
         compiled from "D:/workspace/php/framework/templates/admin/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26988520251445b3e47-63959127%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c63991e72ca5f01dcb5e81390ea6e05063d5d5e' => 
    array (
      0 => 'D:/workspace/php/framework/templates/admin/footer.tpl',
      1 => 1375883358,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26988520251445b3e47-63959127',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_520251445bd3e4_61073063',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_520251445bd3e4_61073063')) {function content_520251445bd3e4_61073063($_smarty_tpl) {?>                    
	
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