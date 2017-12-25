<?php
	header('content-type:text/html;charset=utf-8');
	//拷贝图片

	$file_src_full_path = 'd:/郁金香.jpg';
	$file_src_full_path = iconv('utf-8', 'gbk', $file_src_full_path);

	$file_des_full_path = 'e:/小花.jpg';

	$file_des_full_path = iconv('utf-8', 'gbk', $file_des_full_path);

	if(file_exists($file_src_full_path)){
		
		if(copy($file_src_full_path, $file_des_full_path)){
			echo '<br> 拷贝成功';
		}else{
			echo '<br> 拷贝失败';
		}

	}else{
		
		echo '<br> 没有这个文件，无法拷贝!';
	}