<?php
/* Smarty version 3.1.30, created on 2017-04-06 15:11:30
  from "D:\tnwamp\apache\htdocs\0406\templates\5.smarty_modifier.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58e5ea221cc952_69808364',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '701a6c8e9ab1d120aa7052bf861e6fe5e8af0bc9' => 
    array (
      0 => 'D:\\tnwamp\\apache\\htdocs\\0406\\templates\\5.smarty_modifier.html',
      1 => 1491452477,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58e5ea221cc952_69808364 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'D:\\tnwamp\\apache\\htdocs\\0406\\smarty\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_modifier_capitalize')) require_once 'D:\\tnwamp\\apache\\htdocs\\0406\\smarty\\plugins\\modifier.capitalize.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
	将当前的时间戳转换成日期格式：<?php echo smarty_modifier_date_format(time(),'%Y-%m-%d %H:%M:%S');?>
<br>
	将小写字母首字母大写：<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['str']->value);?>
<br>
	将字符串整体大写：<?php echo strtoupper($_smarty_tpl->tpl_vars['str']->value);?>
<br>
	统计字符数量：<?php echo preg_match_all('/[^\s]/',$_smarty_tpl->tpl_vars['str']->value, $tmp);?>
<br>
	默认值（如果变量为空、''）使用默认值：<?php echo (($tmp = @$_smarty_tpl->tpl_vars['number']->value)===null||$tmp==='' ? 100 : $tmp);?>
<br>
	字符串缩进：<br>
	<?php echo preg_replace('!^!m',str_repeat('-',2),$_smarty_tpl->tpl_vars['str']->value);?>
<br>
	<?php echo preg_replace('!^!m',str_repeat('&nbsp;',2),$_smarty_tpl->tpl_vars['str']->value);?>

	
</body>
</html><?php }
}
