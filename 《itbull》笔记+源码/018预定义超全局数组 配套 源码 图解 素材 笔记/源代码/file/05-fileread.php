<?php
	header("content-type:text/html;charset=utf-8");
	//第三种读取文件的方式-使用比较多

	$file_full_path = 'd:/yyy.txt';

	//读取文件
	$file_con = file_get_contents($file_full_path);
	//替换
	$file_con = str_replace("\r\n", "<br>", $file_con);
	$file_con = str_replace("\n", "<br>", $file_con);

	echo $file_con;