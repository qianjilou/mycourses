<?php
/* Smarty version 3.1.30, created on 2017-04-06 13:27:17
  from "D:\tnwamp\apache\htdocs\0406\templates\test.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58e5d1b5d13401_60463982',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '156b8270114bbbe320d3467ad8caebd5f9a4ad97' => 
    array (
      0 => 'D:\\tnwamp\\apache\\htdocs\\0406\\templates\\test.html',
      1 => 1491456435,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58e5d1b5d13401_60463982 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once 'D:\\tnwamp\\apache\\htdocs\\0406\\smarty\\plugins\\modifier.truncate.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
	<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['script']->value, ENT_QUOTES, 'ISO-8859-1', true);?>
<br>
	<a href="index.php?name=<?php echo rawurlencode($_smarty_tpl->tpl_vars['book']->value);?>
">点击购买</a><br>
	<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['book']->value,15,'...',true);?>

</body>
</html><?php }
}
