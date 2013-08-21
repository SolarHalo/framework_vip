<?php /* Smarty version Smarty-3.1.13, created on 2013-08-21 11:54:34
         compiled from "F:\PHP_WorkSapce\framework\templates\admin\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15765214aa7ab04d89-40983043%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '16e6017ecb03f13437da21fed103adea15e08dd2' => 
    array (
      0 => 'F:\\PHP_WorkSapce\\framework\\templates\\admin\\footer.tpl',
      1 => 1376717601,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15765214aa7ab04d89-40983043',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5214aa7ab0ed27_81045026',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5214aa7ab0ed27_81045026')) {function content_5214aa7ab0ed27_81045026($_smarty_tpl) {?>                    
	
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