<?php
	header('content-type:text/html;charset=utf-8');

	//打开一个已经存在的文件，在原来的内容追加内容'ABC! ENGLISH!';
	$file_full_path = 'd:/hello.txt';

	if(file_exists($file_full_path)){
		//创建
		if($fp = fopen($file_full_path, 'a')){
			//创建或者打开成功
			$con = '';
			for($i = 0; $i < 10; $i++){
				
				$con .= "ABC! ENGLISH!\r\n";

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
		echo '<br> 文件不存在，无法追加.';
	}