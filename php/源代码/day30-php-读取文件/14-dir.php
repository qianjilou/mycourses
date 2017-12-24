<?php
	header('content-type:text/html;charset=utf-8');
	//创建多级目录
	//创建 d:/tnweb2/aaa/bbb/ccc/ddd

	$dir_full_path = 'd:/tnweb2/aaa/bbb/ccc/ddd';

	//判断有没有该目录
	if(!is_dir($dir_full_path)){
		
		//在默认情况下,我们的目录只能一级一级创建.

		//如果你希望一次性创建多级目录，则需要使用
		// mode  0777 在 Windows 下被忽略, true表示可以创建多级目录
		//mkdir($dir_full_path, 0777, true)
		if(mkdir($dir_full_path, 0777, true)){
			echo '<br> 创建目录ok';
		}else{
			echo '<br> 创建目录失败!';
		}

	}else{
		echo '<br> 已经存在该目录，无法再创建';
	}