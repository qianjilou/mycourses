<?php
	header('content-type:text/html;charset=utf-8');
	//创建一个新文件，写入内容 10句 'hello,world

	$file_full_path = 'd:/hello.txt';

	if(!file_exists($file_full_path)){
		//创建
		if($fp = fopen($file_full_path, 'w')){
			//创建或者打开成功
			$con = '';
			for($i = 0; $i < 10; $i++){
				
				$con .= "hello,world\r\n";

			}
			//写入
			//fwrite — 写入文件（可安全用于二进制文件)
			fwrite($fp, $con);
			//关闭
			fclose($fp);

		}else{
			echo '<br> 创建失败!';
		}
	}else{
		echo '<br> 文件已经存在了.';
	}