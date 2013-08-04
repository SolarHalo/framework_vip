<?php /* Smarty version Smarty-3.1.13, created on 2013-08-01 16:44:36
         compiled from "G:/phpserver/framework/templates/admin/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2647051fa8d019a8735-73483360%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d0182f0e0a6b897e2ec035eed278bf5ce4ccf39' => 
    array (
      0 => 'G:/phpserver/framework/templates/admin/footer.tpl',
      1 => 1375375472,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2647051fa8d019a8735-73483360',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51fa8d019c2fb1_75459958',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51fa8d019c2fb1_75459958')) {function content_51fa8d019c2fb1_75459958($_smarty_tpl) {?>                    
	
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