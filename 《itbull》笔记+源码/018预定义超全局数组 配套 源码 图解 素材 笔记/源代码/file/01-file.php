<?php
	header("content-type:text/html;charset=utf-8");
	/*
	如何获取到文件的大小，类型，文件修改，访问和创建时间等
	信息(使用两种方式-熟悉相关函数)
	*/

	//第一种方式来获取文件信息
	//1. 打开这个文件
	
	// $file_full_path 是文件的全路径
	$file_full_path = 'd:/tnabc.txt';
	
	//  fopen($file_full_path, 'r')
	//  (1)$file_full_path参数是 文件的路径
	//  (2)'r' 表示以只读的方式打开.
	//  (3) 返回值 $fp 这是获取到的文件指针资源，这个$fp 就代表该文件

	$fp = fopen($file_full_path, 'r');
	
	//touch($file_full_path);
	$file_info = fstat($fp);
	echo '<pre>';
	//var_dump($file_info);

	echo  '<br> 文件的信息如下**********';
	echo '<br> 文件大小 = ' . $file_info['size'];
	echo '<br> 文件创建时间 = ' . date('Y-m-d : H:i:s', $file_info['ctime']);
	echo '<br> 文件访问时间 = ' . date('Y-m-d : H:i:s', $file_info['atime']);
	echo '<br> 文件修改时间 = ' . date('Y-m-d : H:i:s', $file_info['mtime']);

	//操作完文件后，应该及时的关闭文件资源.
	fclose($fp);
	