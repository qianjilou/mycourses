<?php
	header('content-type:text/html;charset=utf-8');
	//创建一级目录


	$dir_full_path = 'd:/tnweb';

	//判断有没有该目录
	if(!is_dir($dir_full_path)){
		
		if(mkdir($dir_full_path)){
			echo '<br> 创建目录ok';
		}else{
			echo '<br> 创建目录失败!';
		}

	}else{
		echo '<br> 已经存在该目录，无法再创建';
	}