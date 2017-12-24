<?php
	header('content-type:text/html;charset=utf-8');
	//读取ini文件

	//定义配置文件
	$file_full_path = 'config.ini';
	$arr_ini = parse_ini_file($file_full_path);

	echo '<pre>';
	var_dump($arr_ini);

	echo '<br> user = ' . $arr_ini['user'];
	echo '<br> pwd = ' . $arr_ini['pwd'];