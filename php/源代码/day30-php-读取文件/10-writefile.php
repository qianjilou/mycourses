<?php
	header('content-type:text/html;charset=utf-8');
	/*
	如果文件不存在,创建一个新文件，写入内容 10句 'hello,world'，如果已经存在这个文件，则写入10句 "你好，泰牛"

	*/

	$file_full_path = 'd:/myhello.txt';

	if(!file_exists($file_full_path)){
		
		$con = '';
		for($i = 0; $i < 10; $i++){
			$con .= "hello,world\r\n";
		}
		/*
		file_put_contents 函数 
		1. 当文件不存在时，就会先创建，在添加.
		2. 当文件存在时，就会默认覆盖写内容
		
		*/
		file_put_contents($file_full_path, $con);
	}else{
		
		$con = '';
		for($i = 0; $i < 10; $i++){
			$con .= "你好,苹果\r\n";
		}
		
		//file_put_contents 函数,如果文件存在，默认是覆盖写
		//file_put_contents($file_full_path, $con);
		
		//file_put_contents 函数,如果文件存在，希望追加写, 则需要这样打开.
		file_put_contents($file_full_path, $con, FILE_APPEND);
		
	}