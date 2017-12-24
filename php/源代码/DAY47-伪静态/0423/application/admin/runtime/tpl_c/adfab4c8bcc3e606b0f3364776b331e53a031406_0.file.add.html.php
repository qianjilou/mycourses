<?php
/* Smarty version 3.1.30, created on 2017-04-21 11:03:30
  from "D:\tnwamp\apache\htdocs\0420\application\admin\view\question\add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58f976825d98a1_96595993',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'adfab4c8bcc3e606b0f3364776b331e53a031406' => 
    array (
      0 => 'D:\\tnwamp\\apache\\htdocs\\0420\\application\\admin\\view\\question\\add.html',
      1 => 1492743807,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/layout.html' => 1,
  ),
),false)) {
function content_58f976825d98a1_96595993 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2491258f976825d7700_77176492', "content");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:common/layout.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "content"} */
class Block_2491258f976825d7700_77176492 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="aw-content-wrap">
        <form method="post" id="category_form" 
        action="?m=admin&c=question&a=collectAction">
        <div class="mod">
            <div class="mod-head">
                <h3>
                    <span class="pull-left">添加分类</span>
                </h3>
            </div>
            <div class="tab-content mod-content">
                <table class="table table-striped">
                    <tbody><tr>
                        <td>
                            <div class="form-group">
                                <span class="col-sm-4 col-xs-4 control-label" 
                                style="text-align:center;margin-top:10px">
                                		网页地址:
                                </span>
                                <div class="col-sm-8 col-xs-8">
                                    <input type="text" placeholder="网页地址" name="url" class="form-control">
                                </div>
                            </div>
                        </td>
                    </tr>

                    </tbody><tfoot>
                    <tr>
                        <td>
                            <input type="submit" class="btn btn-primary center-block" value="开始采集">
                        </td>
                    </tr>
                    </tfoot>
                </table>
            </div>
            </div>
        </form>
    </div>

<?php
}
}
/* {/block "content"} */
}
