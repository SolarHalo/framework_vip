<?php /* Smarty version Smarty-3.1.13, created on 2013-08-13 14:27:03
         compiled from "D:\workspace\php\framework\templates\admin\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30850520a42372ec398-91663615%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a9f6461db7211c5e84e958c9251134b212b856aa' => 
    array (
      0 => 'D:\\workspace\\php\\framework\\templates\\admin\\footer.tpl',
      1 => 1375883358,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30850520a42372ec398-91663615',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_520a42372f5003_79521035',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_520a42372f5003_79521035')) {function content_520a42372f5003_79521035($_smarty_tpl) {?>                    
	
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