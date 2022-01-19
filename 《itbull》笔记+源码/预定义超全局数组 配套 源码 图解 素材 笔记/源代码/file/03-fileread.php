<?php
	header("content-type:text/html;charset=utf-8");
	//读文件的操作
	//第一种方式
	$file_full_path = 'd:/yyy.txt';
	//先判断文件是否存在
	if(file_exists($file_full_path)){
	
		$fp = fopen($file_full_path, 'r');
		//获取文件大小-字节
		$file_size = filesize($file_full_path);
		//fread 读取文件
		$str = fread($fp, $file_size);
		//因为文件的换行时windows下 \r\n  linux 下\n
		//我们把得到$str 中的 \r\n 或是是 \n 替换成 <br>
		$str = str_replace("\r\n", "<br>", $str);
		echo $str;

		//关闭我们的文件
		fclose($fp);
	
	}else{
		echo '<br> 文件不存在';
	}
