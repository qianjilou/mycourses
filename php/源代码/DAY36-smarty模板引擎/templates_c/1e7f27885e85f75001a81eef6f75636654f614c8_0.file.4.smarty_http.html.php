<?php
/* Smarty version 3.1.30, created on 2017-04-06 11:45:10
  from "D:\tnwamp\apache\htdocs\0406\templates\4.smarty_http.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58e5b9c6d0cbe6_21451544',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1e7f27885e85f75001a81eef6f75636654f614c8' => 
    array (
      0 => 'D:\\tnwamp\\apache\\htdocs\\0406\\templates\\4.smarty_http.html',
      1 => 1491450307,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58e5b9c6d0cbe6_21451544 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
	接收url地址栏中的参数：<?php echo $_GET['id'];?>
<br>
	接收cookie数据：<?php echo $_COOKIE['is_login'];?>
<br>
	接收session数据：<?php echo $_SESSION['cart'];?>
<br>
	接收$_SERVER环境变量:<?php echo $_SERVER['DOCUMENT_ROOT'];?>
<br>
</body>
</html><?php }
}
