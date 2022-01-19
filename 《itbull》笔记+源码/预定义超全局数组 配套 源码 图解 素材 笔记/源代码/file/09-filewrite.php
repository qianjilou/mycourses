<?php
	header("content-type:text/html;charset=utf-8");
	//打开一个已经存在的文件，在原来的内容追加内容'ABC! ENGLISH!';

	$file_full_path = "d:/tn123.txt";
	//打开文件
	if(file_exists($file_full_path)){
		
		//a 写入方式打开，1. 将文件指针指向文件末尾。2.如果文件不存在则尝试创建之
		$fp = fopen($file_full_path, 'a');
		//准备好写入的字符串
		$con = '';
		for($i = 0; $i < 10; $i++){
			$con .= "ABC! ENGLISH\r\n";
		}
		//写入文件
		fwrite($fp, $con);
		//关闭
		fclose($fp);
		echo '执行成功!';
		
	}else{
		echo '文件不存在，不玩了';
	}