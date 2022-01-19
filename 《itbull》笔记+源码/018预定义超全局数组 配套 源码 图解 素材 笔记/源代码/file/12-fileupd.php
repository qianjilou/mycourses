<?php
	header("content-type:text/html;charset=utf-8");
	//修改文件名

	if(file_exists('d:/tnabc.txt')){
		if(rename('d:/tnabc.txt', 'd:/hello.txt')){
			echo '修改成功!';
		}else{
			echo '修改失败';
		}
	}else{
		echo '文件不在';
	}