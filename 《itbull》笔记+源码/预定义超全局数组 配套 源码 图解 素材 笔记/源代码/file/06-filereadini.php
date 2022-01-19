<?php
	header("content-type:text/html;charset=utf-8");
	//使用parse_ini_file来读完ini类型文件
	//ini 类型文件有要求 
	//属性=属性值

	$option = parse_ini_file('db.ini');
	echo '<pre>';
	var_dump($option);