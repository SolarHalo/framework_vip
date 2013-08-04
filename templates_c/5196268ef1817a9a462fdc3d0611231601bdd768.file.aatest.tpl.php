<?php /* Smarty version Smarty-3.1.13, created on 2013-08-01 16:19:44
         compiled from "G:/phpserver/framework/templates/aatest.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2851851fa8aa00b4f18-43682760%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5196268ef1817a9a462fdc3d0611231601bdd768' => 
    array (
      0 => 'G:/phpserver/framework/templates/aatest.tpl',
      1 => 1375369779,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2851851fa8aa00b4f18-43682760',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'a' => 0,
    'temp' => 0,
    'tasks' => 0,
    'task' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51fa8aa03b3412_18825418',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51fa8aa03b3412_18825418')) {function content_51fa8aa03b3412_18825418($_smarty_tpl) {?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title> not goog</title>
</head>
<body>
 hello <?php echo $_smarty_tpl->tpl_vars['a']->value;?>
,
 <?php echo $_smarty_tpl->tpl_vars['temp']->value;?>

 
<?php  $_smarty_tpl->tpl_vars['task'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['task']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tasks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['task']->key => $_smarty_tpl->tpl_vars['task']->value){
$_smarty_tpl->tpl_vars['task']->_loop = true;
?>
 <?php echo $_smarty_tpl->tpl_vars['task']->value->CONTENT;?>
 <br/>
<?php } ?>
</body>
</html><?php }} ?>