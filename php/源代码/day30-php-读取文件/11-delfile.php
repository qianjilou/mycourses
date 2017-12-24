<?php
	header('content-type:text/html;charset=utf-8');
	//删除文件

	$file_full_path = 'd:/myhello.txt';

	if(file_exists($file_full_path)){
		//删除
		if(unlink($file_full_path)){
			echo '<br> 删除成功!';
		}else{
			echo '<br> 删除失败';
		}
	}else{
		echo '<br> 该文件不存在，无法删除!';
	}