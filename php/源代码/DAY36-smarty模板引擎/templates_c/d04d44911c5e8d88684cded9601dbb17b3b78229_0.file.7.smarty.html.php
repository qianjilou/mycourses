<?php
/* Smarty version 3.1.30, created on 2017-04-06 16:10:43
  from "D:\tnwamp\apache\htdocs\0406\templates\7.smarty.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58e5f803941c43_07719823',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd04d44911c5e8d88684cded9601dbb17b3b78229' => 
    array (
      0 => 'D:\\tnwamp\\apache\\htdocs\\0406\\templates\\7.smarty.html',
      1 => 1491466241,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58e5f803941c43_07719823 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
	<?php if ($_smarty_tpl->tpl_vars['money']->value > 5000) {?>
		去沙河水库钓大鱼,烤着吃<br>
	<?php } elseif ($_smarty_tpl->tpl_vars['money']->value > 3000) {?>
		唐家岭1日游<br>
	<?php } else { ?>
		教室里好好写代码把<br>
	<?php }?>
</body>
</html><?php }
}
