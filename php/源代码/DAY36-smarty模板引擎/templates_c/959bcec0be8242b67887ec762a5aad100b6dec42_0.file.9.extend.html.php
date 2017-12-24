<?php
/* Smarty version 3.1.30, created on 2017-04-06 17:07:47
  from "D:\tnwamp\apache\htdocs\0406\templates\9.extend.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58e605634be9d1_52185038',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '959bcec0be8242b67887ec762a5aad100b6dec42' => 
    array (
      0 => 'D:\\tnwamp\\apache\\htdocs\\0406\\templates\\9.extend.html',
      1 => 1491469399,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/layout.html' => 1,
  ),
),false)) {
function content_58e605634be9d1_52185038 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2926958e605634ad626_95752337', "amao");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1751458e605634bcb99_93020183', "amao");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:common/layout.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "amao"} */
class Block_2926958e605634ad626_95752337 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
这是我们修改的内容<?php
}
}
/* {/block "amao"} */
/* {block "amao"} */
class Block_1751458e605634bcb99_93020183 extends Smarty_Internal_Block
{
public $prepend = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
这是我们修改的内容<?php
}
}
/* {/block "amao"} */
}
