<?php
/* Smarty version 3.1.30, created on 2017-04-11 02:30:49
  from "D:\tnwamp\apache\htdocs\0409\application\admin\view\goods_list.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58ec3fd9681195_44203026',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '670a325c259d5dbfe325201dbf3756f86bb55be2' => 
    array (
      0 => 'D:\\tnwamp\\apache\\htdocs\\0409\\application\\admin\\view\\goods_list.tpl',
      1 => 1491877823,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58ec3fd9681195_44203026 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cat_list']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
	<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_name'];?>
<br>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
}
}
