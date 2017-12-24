<?php
	header('content-type:text/html;charset=utf-8');
	//修改文件名

	$file_full_path = 'd:/world.txt';

	//因为文件函数是比较早期的函数, 对gbk,gb2312支持比较好，对utf8支持
	//不够，因此我们这里需要使用转码

	//将   d:/王八.txt => gbk
	$file_new_full_path = 'd:/王八.txt';

	//iconv函数 字符串按要求的字符编码来转换
	$file_new_full_path = iconv('utf-8', 'gbk', $file_new_full_path);

	if(file_exists($file_full_path)){
		
		//存在
		if(rename($file_full_path, $file_new_full_path)){
			echo '<br> 改名ok';
		}else{
			echo '<br> 修改失败!';
		}
	}else{
		echo '<br> 文件不存在';
	}