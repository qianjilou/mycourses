<?php
/* Smarty version 3.1.30, created on 2017-04-06 11:20:48
  from "D:\tnwamp\apache\htdocs\0406\templates\3.smarty_inner.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58e5b41014d356_05954928',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50e881d05805143e65ad06aff895084e73d7824b' => 
    array (
      0 => 'D:\\tnwamp\\apache\\htdocs\\0406\\templates\\3.smarty_inner.html',
      1 => 1491448845,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58e5b41014d356_05954928 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
	当前的时间戳：<?php echo time();?>
<br>
	获得常量：<?php echo @constant('ROOT');?>
<br>
	<?php
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "img.conf", null, 0);
?>

	获得配置项：<?php echo $_smarty_tpl->smarty->ext->configload->_getConfigVariable($_smarty_tpl, 'img_url');?>
<br>
	当前文件所在目录：<?php echo dirname($_smarty_tpl->source->filepath);?>
<br>
</body>
</html><?php }
}
