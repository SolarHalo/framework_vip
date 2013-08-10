<?php /* Smarty version Smarty-3.1.13, created on 2013-08-10 22:49:05
         compiled from "D:/PHPWeb/framework_vip/templates/admin/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29896520652e1b80282-78502182%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '01f333848de03c68a1f98dca675366f20fb86731' => 
    array (
      0 => 'D:/PHPWeb/framework_vip/templates/admin/footer.tpl',
      1 => 1375975160,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29896520652e1b80282-78502182',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_520652e1b8be02_33868496',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_520652e1b8be02_33868496')) {function content_520652e1b8be02_33868496($_smarty_tpl) {?>                    
	
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