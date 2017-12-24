<?php
/* Smarty version 3.1.30, created on 2017-04-06 17:08:27
  from "D:\tnwamp\apache\htdocs\0406\templates\10.goods.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58e6058bb7bdd9_49686766',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '19351aa93a80a85c66b6c5bf25a2a3c000b7aefc' => 
    array (
      0 => 'D:\\tnwamp\\apache\\htdocs\\0406\\templates\\10.goods.html',
      1 => 1491469634,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58e6058bb7bdd9_49686766 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<table>
			<tr>
				<th>序号</th>
				<th>商品名称</th>
				<th>商品价格</th>
			</tr>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['goods']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
    			<tr>
    				<td><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
</td>
    				<td><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_name'];?>
</td>
    				<td><?php echo $_smarty_tpl->tpl_vars['v']->value['shop_price'];?>
</td>
    			</tr>
    			<?php
}
} else {
?>

    			<tr>
    				<td>没有找到你查找的数据</td>
    			</tr>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

		</table>
	</body>	
</html><?php }
}
