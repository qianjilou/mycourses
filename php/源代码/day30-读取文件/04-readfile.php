<?php
	header('content-type:text/html;charset=utf-8');
	//读取文件[第二种方式]

	//1. 定义文件路径
	$file_full_path = 'd:/abc.txt';

	if(file_exists($file_full_path)){
	
		$fp = fopen($file_full_path, 'r');

		//设置缓冲
		$buffer = '';
		$buffer_size = 1024;
		$con_str = '';

		//开始一次读取$buffer_size, 循环读取
		//!feof($fp) 如果没有到文件的结束位置,就继续读取
		while(!feof($fp)){
			$buffer = fread($fp, $buffer_size);
			//程序员可以根据需要，再这里对$buffer处理.
			$con_str .= $buffer;
		}

		//关闭文件
		fclose($fp);

		//替换换行
		$con_str = str_replace("\r\n", '<br>', $con_str);
		$con_str = str_replace("\n", '<br>', $con_str);

		echo $con_str;

	}else{
		echo '<br> 文件不存在，无法读取';
	}