<?php
	header('content-type:text/html;charset=utf-8');
	//分目录存放文件

	date_default_timezone_set('PRC');
	//获取年/月日
	$time = date("Y/md");

	$dir_full_path = "E:/$time";

	
	//逻辑...
	if (!is_dir($dir_full_path)) {
		//die('目录已存在,无需创建!');

		if (mkdir($dir_full_path,0777,true)) {
			echo '<br>目录创建成功!<br>';
		}else{
			echo '<br>创建目录失败!<br>';
		}
	}
	
	

	$file_full_path = "$dir_full_path/abc101.txt";
	
	if (file_exists($file_full_path)) {
		die('<br>文件已存在<br>');
	}
	
	if ($fp = fopen($file_full_path,'w')) {

		echo '<br>文件创建成功!<br>';
		$con = '';
		for ($i=0; $i <100 ; $i++) { 
			$con .= "Hello world!\r\n";
		}
		fwrite($fp, $con);
		fclose($fp);
		echo '<br>数据写入成功!<br>';
	} else {
		echo '<br>创建文件失败!<br>';
	}