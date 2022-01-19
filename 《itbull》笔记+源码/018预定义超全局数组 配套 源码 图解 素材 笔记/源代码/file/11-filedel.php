<?php
	header("content-type:text/html;charset=utf-8");
	//删除文件操作

	$file_full_path = 'd:/yyy.txt';

	if(file_exists($file_full_path)){
		
		if(unlink($file_full_path)){
			echo '删除文件成功!';
		}else{
			echo '删除文件失败';
		}
		
	}else{
		echo '文件不存在，无法删除';
	}

