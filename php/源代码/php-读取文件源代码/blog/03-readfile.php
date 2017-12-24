<?php
	header('content-type:text/html;charset=utf-8');
	//读取文件的内容，并正确的显示在网页

	//1. 定义文件路径
	$file_full_path = 'd:/abc.txt';

	if(file_exists($file_full_path)){
		
		//1. 打开文件
		$fp = fopen($file_full_path, 'r');
		//2. 获取文件的大小
		$file_size = filesize($file_full_path);

		//3. 读取内容
		/*
			fread: 读取一个文件的内容
			@param stream $fp 表示文件资源
			@param int $file_size 表示从$fp读取多少个字节.
		*/
		$con_str = fread($fp, $file_size);

		//及时关闭文件!!!重要 数据采集 MFC  0字节 2500 5  
		fclose($fp);

		//说明原因: 
		//1. 在windows系统下, 文件中换行是 \r\n
		//2. 在linux系统下 , 文件中换行是 \n
		//3. 在网页中，换行是 <br>
		
		$con_str = str_replace("\r\n", '<br>', $con_str);
		//替换tab
		$con_str = str_replace("	", '&nbsp;&nbsp;&nbsp;&nbsp;', $con_str);
		//有人写了,why?=>兼容处理
		$con_str = str_replace("\n", '<br>', $con_str);
		


		//3. 显示在网页
		//echo '<pre>';
		echo $con_str;



	}else{
		echo '<br> 文件不存在....';
	}
