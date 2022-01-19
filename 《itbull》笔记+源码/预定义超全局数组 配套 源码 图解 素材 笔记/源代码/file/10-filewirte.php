<?php
	header("content-type:text/html;charset=utf-8");
	//使用file_put_contents完成写文件的任务

	//使用 file_put_contents 写 'hello,world!' 到 'tn111.txt', 如果这个文件不存在，就创建

	$file_full_path = 'd:/tn111.txt';
	//file_put_contents($file_full_path, 'hello,world'); 说明
	//1. 如果文件$file_full_path不存在，则创建，并且写入'hello,world'
	//2. 如果文件$file_full_path存在，写入'hello,world'到文件（覆盖）
//	file_put_contents($file_full_path, 'hello,world');
//	echo '写入ok';

	//如果希望使用file_put_contents 是以追加方式	
	file_put_contents($file_full_path, "泰牛,world\r\n",FILE_APPEND);
	echo '写入ok';

