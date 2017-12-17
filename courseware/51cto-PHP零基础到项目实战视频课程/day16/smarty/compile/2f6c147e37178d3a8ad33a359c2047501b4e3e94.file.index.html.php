<?php /* Smarty version Smarty-3.1.10, created on 2017-12-09 14:46:11
         compiled from "..\template\index.html" */ ?>
<?php /*%%SmartyHeaderCode:87155a2be92370f168-52466957%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f6c147e37178d3a8ad33a359c2047501b4e3e94' => 
    array (
      0 => '..\\template\\index.html',
      1 => 1465886264,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '87155a2be92370f168-52466957',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'userInfo' => 0,
    'k' => 0,
    'v' => 0,
    'userList' => 0,
    'v2' => 0,
    'a' => 0,
    'b' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_5a2be9238ff351_87353317',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2be9238ff351_87353317')) {function content_5a2be9238ff351_87353317($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>这是第一个smarty页面</title>
</head>
<body>
	<h3><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h3>	
	<h3><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h3>	
	<h3><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h3>	
	<h3><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h3>	
	<h3>姓名列表:</h3>
	<ul>
		<li><?php echo $_smarty_tpl->tpl_vars['userInfo']->value['bajie'];?>
</li>
		<li><?php echo $_smarty_tpl->tpl_vars['userInfo']->value['wukong'];?>
</li>
		<li><?php echo $_smarty_tpl->tpl_vars['userInfo']->value['bailongma'];?>
</li>
	</ul>
	<ul>
		<li><?php echo $_smarty_tpl->tpl_vars['userInfo']->value['bajie'];?>
</li>
		<li><?php echo $_smarty_tpl->tpl_vars['userInfo']->value['wukong'];?>
</li>
		<li><?php echo $_smarty_tpl->tpl_vars['userInfo']->value['bailongma'];?>
</li>
	</ul>
	<ul>
		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['userInfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
		<li><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
 ----> <?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</li>
		<?php } ?>
	</ul>
	<ul>
		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['userList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
		<li><?php echo $_smarty_tpl->tpl_vars['k']->value;?>

			<ul>
				<?php  $_smarty_tpl->tpl_vars['v2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v2']->_loop = false;
 $_smarty_tpl->tpl_vars['k2'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['v']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v2']->key => $_smarty_tpl->tpl_vars['v2']->value){
$_smarty_tpl->tpl_vars['v2']->_loop = true;
 $_smarty_tpl->tpl_vars['k2']->value = $_smarty_tpl->tpl_vars['v2']->key;
?>
				<li><?php echo $_smarty_tpl->tpl_vars['v2']->value;?>
</li>
				<?php } ?>
			</ul>
		</li>
		<?php } ?>
	</ul>
	<hr>
	<?php if ($_smarty_tpl->tpl_vars['a']->value>$_smarty_tpl->tpl_vars['b']->value){?>
	<?php echo $_smarty_tpl->tpl_vars['a']->value;?>
大于<?php echo $_smarty_tpl->tpl_vars['b']->value;?>

	<?php }else{ ?>
	<?php echo $_smarty_tpl->tpl_vars['a']->value;?>
小于或者等于<?php echo $_smarty_tpl->tpl_vars['b']->value;?>

	<?php }?>
	<hr>

	<?php if (isset($_smarty_tpl->tpl_vars['a']->value)){?>
	<?php echo $_smarty_tpl->tpl_vars['a']->value;?>
设置了
	<?php }else{ ?>
	a不存在
	<?php }?>
	
	<?php if (isset($_GET['page'])){?>
	<?php echo $_GET['page'];?>

	<?php }?>

	<?php echo $_SESSION['admin'];?>


</body>
</html><?php }} ?>