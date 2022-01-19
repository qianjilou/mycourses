<?php
	header("content-type:text/html;charset=utf-8");
	//第二种方式来获取文件的内容并显示到网页

	$file_full_path = 'd:/yyy.txt';

	//先判断文件是否存在
	if(file_exists($file_full_path)){
		//打开文件
		if($fp = fopen($file_full_path, 'r')){
			//这里我们想去处理大文件，我们可以一点点的读
			//一次读取1024个字节
			//定义一个buffer
			$buf = '';
			$buf_size = 1024;
			$file_con = '';
			// !feof($fp) 这句话的意思是，如果没有到文件的最后,就一直读
			while(!feof($fp)){
				//$buf = fread($fp, $buf_size); 我一次最多读取1024个字节
				$buf = fread($fp, $buf_size);
				//然后拼接到 $file_con 字符串
				$file_con .= $buf;
			}
			//关闭文件
			fclose($fp);
			//windows下
			$file_con = str_replace("\r\n", "<br>", $file_con);
			//linux下兼容处理
			$file_con = str_replace("\n", "<br>", $file_con);
			echo $file_con;
		}else{
			
			echo '<br> 文件打开失败';
		}

	}else{
		echo '<br> 文件不存在!';
	}