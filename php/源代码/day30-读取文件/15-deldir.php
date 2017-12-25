<?php
	header('content-type:text/html;charset=utf-8');
	//删除目录
	//删除一级目录

	$dir_full_path = 'd:/tnweb';

	//php设计者没有提供一个直接删除整个目录函数, 一会我们自己开发
	//$dir_full_path = 'D:\tnweb2'; 

	//判断有没有该目录
	if(is_dir($dir_full_path)){
		
		if(rmdir($dir_full_path)){
			echo '<br> 删除目录ok';
		}else{
			echo '<br> 删除目录error';
		}

	}else{
		echo '<br> 该目录不存在，无法再删除';
	}