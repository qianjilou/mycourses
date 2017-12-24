<?php
	header('content-type:text/html;charset=utf-8');
	//先看看opendir 和 readdir / closedir的基本使用

	$dir_full_path = 'e:/hspweb/';
	if(is_dir($dir_full_path)){
		//打开该目录
		$dir_handle = opendir($dir_full_path);

		//开始遍历该目录
		while(false !== ($file_name = readdir($dir_handle))){
			
			if(is_dir($dir_full_path . $file_name)){

				echo '<br> ' . $file_name  . ' 是目录 ';
			}else{
				echo '<br> ' . $file_name  . ' 是文件 ';
			}
		}
		//关闭目录
		closedir($dir_handle);

	}else{
		echo '<br> 不是目录，无法打开';
	}
