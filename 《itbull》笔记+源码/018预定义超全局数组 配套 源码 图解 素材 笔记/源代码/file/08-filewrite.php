<?php
	header("content-type:text/html;charset=utf-8");
	//给存在的文件中，将原来的内容覆盖成新的内容10句 "你好，泰牛"(修改)
	$file_full_path = "d:/tn123.txt";
	//打开文件
	if(file_exists($file_full_path)){
		
		//w 写入方式打开，1. 将文件指针指向文件头并将文件大小截为零。2.如果文件不存在则尝试创建之
		$fp = fopen($file_full_path, 'w');
		//准备好写入的字符串
		$con = '';
		for($i = 0; $i < 10; $i++){
			$con .= "泰牛，你好\r\n";
		}
		//写入文件
		fwrite($fp, $con);
		//关闭
		fclose($fp);
		echo '执行成功!';
		
	}else{
		echo '文件不存在，不玩了';
	}
