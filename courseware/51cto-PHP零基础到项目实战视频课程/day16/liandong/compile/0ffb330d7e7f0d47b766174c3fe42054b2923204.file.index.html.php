<?php /* Smarty version Smarty-3.1.10, created on 2017-12-09 15:58:16
         compiled from ".\template\index.html" */ ?>
<?php /*%%SmartyHeaderCode:20757575fa817dcdfd1-71421038%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ffb330d7e7f0d47b766174c3fe42054b2923204' => 
    array (
      0 => '.\\template\\index.html',
      1 => 1465886876,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20757575fa817dcdfd1-71421038',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_575fa817e04ae7_89339989',
  'variables' => 
  array (
    'provinceList' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_575fa817e04ae7_89339989')) {function content_575fa817e04ae7_89339989($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>省，市，县三级联动</title>
	<script src="jquery.min.js"></script>
	<script src="json2.js"></script>
	<script>

	//$.get
	//$.post
	function getCities( provinceId ) {
		$.get( "ajax.php", { province_id : provinceId }, function( data ){
			var str = '';
			var obj = JSON.parse( data );
			for ( var i in obj ) {
				str += "<option value='" + obj[i].region_id + "'>" + obj[i].region_name + "</option>";
			}	
			$("#city").empty().append( str );
			$("#city").triggerHandler( "change" );
		} );
	}
	function getDistric( cityId ) {
		// $.get( "ajax.php", { city_id : cityId }, function( data ){
		// 	var str = '';
		// 	var obj = JSON.parse( data );
		// 	for ( var i in obj ) {
		// 		str += "<option value='" + obj[i].region_id + "'>" + obj[i].region_name + "</option>";
		// 	}	
		// 	$("#district").empty().append( str );
		// } );
		$.post( "ajax.php", { city_id : cityId }, function( data ){
			var str = '';
			var obj = JSON.parse( data );
			for ( var i in obj ) {
				str += "<option value='" + obj[i].region_id + "'>" + obj[i].region_name + "</option>";
			}	
			$("#district").empty().append( str );
		} );
	}
	$(function(){
		$("#province").change(function(){
			var index = $("#province option:selected").val();
			getCities( index );
		});
		$("#city").change(function(){
			var index = $("#city option:selected").val();
			getDistric( index );
		});
	});
	</script>
</head>
<body>
	
	<select name="province" id="province">
		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['provinceList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['region_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['region_name'];?>
</option>	
		<?php } ?>
	</select>	
	<select name="city" id="city">
		<option value="0">请选择市</option>
	</select>
	<select name="district" id="district">
		<option value="0">请选择区</option>
	</select>
</body>
</html><?php }} ?>