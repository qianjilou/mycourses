<?php
	header('content-type:text/html;charset=utf-8');
	//给存在的文件中，将原来的内容覆盖成新的内容10句 "你好，泰牛"

	$file_full_path = 'd:/hello.txt';

	if(file_exists($file_full_path)){
		//创建
		if($fp = fopen($file_full_path, 'w')){
			//创建或者打开成功
			$con = '';
			for($i = 0; $i < 10; $i++){
				
				$con .= "你好,泰牛\r\n";

			}
			//写入
			//fwrite — 写入文件（可安全用于二进制文件)
			fwrite($fp, $con);
			//关闭
			fclose($fp);
			echo '<br> 执行成功!';

		}else{
			echo '<br> 创建失败!';
		}
	}else{
		echo '<br> 文件不存在，无法覆盖.';
	}