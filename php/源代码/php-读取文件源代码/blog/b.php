<?php
	header('content-type:text/html;charset=utf-8');


	$str = 'kkk.ingi';

	var_dump(strrchr($str, '.') == '.ini');

	//b.php 来接收各种数据
	echo '<pre>';
	var_dump($_POST);

	$address = '天津';
	echo '<pre>';
	//$_REQUEST 含有 $_GET 、$_POST、$_COOKIE
	var_dump($_REQUEST);

	echo '<pre>';
	var_dump($GLOBALS);