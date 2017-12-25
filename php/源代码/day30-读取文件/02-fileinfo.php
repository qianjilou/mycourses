<?php
	header('content-type:text/html;charset=utf-8');
	/*
	如何获取到文件的大小，类型[文件/目录]，文件修改，
	访问和创建时间等信息(使用两种方式-熟悉相关函数)
	*/
	//1. 定义文件的路径
	$file_full_path = 'd:/abc.txt';
	date_default_timezone_set('PRC');
	if(file_exists($file_full_path)){
	
		//直接使用一组函数来获取文件信息，而不需要打开文件
		echo '<br> 文件的信息如下 ';
		echo '<br> 文件大小 ' . filesize($file_full_path);
		echo '<br> 文件类型 ' . filetype($file_full_path);
		
		echo '<br> 文件创建时间 ' . date('Y-m-d H:i:s', filectime($file_full_path));
		
		echo '<br> 文件修改时间 ' . date('Y-m-d H:i:s', filemtime($file_full_path));
		
		echo '<br> 文件访问时间 ' . date('Y-m-d H:i:s', fileatime($file_full_path));
	}else{
		echo '<br> 文件不存在...';
	}