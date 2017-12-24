<?php
	header('content-type:text/html;charset=utf-8');
	//第三种处理方式-简捷方式

	//1. 定义文件路径
	$file_full_path = 'd:/abc.txt';

	if(file_exists($file_full_path)){
		
		//file_get_contents做了一个封装处理，底层使用仍然是fopen fread..
		$con_str = file_get_contents($file_full_path);

		//替换换行
		$con_str = str_replace("\r\n", '<br>', $con_str);
		$con_str = str_replace("\n", '<br>', $con_str);

		echo $con_str;

	}else{
		echo '<br> 文件不存在';
	}