<?php
/* Smarty version 3.1.30, created on 2017-04-11 11:54:28
  from "D:\tnwamp\apache\htdocs\0411\application\admin\view\goods_list.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58ec5374910c74_37886090',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c7b078994e5cda55c717f034132cbd2475e9c7bb' => 
    array (
      0 => 'D:\\tnwamp\\apache\\htdocs\\0411\\application\\admin\\view\\goods_list.tpl',
      1 => 1491879191,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58ec5374910c74_37886090 (Smarty_Internal_Template $_smarty_tpl) {
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
?>

<link href="css/style.css">

<style>
	a{text-decoration:none}
</style>


<a style="text-decoration:none">

<a style="text-decoration:none">

<a style="text-decoration:none"><?php }
}
