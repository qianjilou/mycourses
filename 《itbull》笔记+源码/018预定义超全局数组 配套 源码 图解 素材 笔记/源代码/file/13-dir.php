<?php
	header("content-type:text/html;charset=utf-8");
	//对目录的操作
	/*
	创建一级目录
	创建多级目录
	删除目录

	*/

	//创建一级目录 就是创建单目录

	$dir_path = 'd:/hello';
	if(is_dir($dir_path)){
		echo '已经存在这个目录';
	
	}else{
		if(mkdir($dir_path)){
			echo '创建ok';
		}else{
			echo '创建失败';
		}
	}


	//创建多级目录 一次性创建多个目录

	$dir_path = 'd:/hsp/aaa/bbb/ccc/ddd/eeee';
	if(is_dir($dir_path)){
		echo '已经存在这个目录';
	
	}else{
		//mkdir($dir_path) 只能创建单个目录,如果希望一次创建多级目录
		// 这里  true 递归创建
		//可以这样写 mkdir($dir_path,0777, ture);
		if(mkdir($dir_path, 0777, true)){
			echo '创建ok';
		}else{
			echo '创建失败';
		}
	}

	//删除目录
	//删除单个目录
	
	$dir_path = 'd:/hello';
	if(is_dir($dir_path)){
		
		if(rmdir($dir_path)){
			echo '删除ok';
		}else{
			echo '删除失败';
		}
	
	}else{
		echo '这个目录没有，无法删除!';
	}

	//删除多级目录[单独的写程序才可以完成]

