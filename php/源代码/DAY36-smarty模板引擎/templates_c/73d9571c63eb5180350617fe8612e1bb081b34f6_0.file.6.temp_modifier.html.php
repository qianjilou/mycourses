<?php
/* Smarty version 3.1.30, created on 2017-04-06 15:40:03
  from "D:\tnwamp\apache\htdocs\0406\templates\6.temp_modifier.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58e5f0d3d03899_96848018',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '73d9571c63eb5180350617fe8612e1bb081b34f6' => 
    array (
      0 => 'D:\\tnwamp\\apache\\htdocs\\0406\\templates\\6.temp_modifier.html',
      1 => 1491464400,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58e5f0d3d03899_96848018 (Smarty_Internal_Template $_smarty_tpl) {
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
	
	字符串截取：<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['str']->value,15,'...',false,true);?>
<br>
	<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['articleTitle']->value,30,"...");?>

	
</body>
</html><?php }
}
