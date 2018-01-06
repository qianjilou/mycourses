<?php

	header('content-type:text/html;charset=utf-8');
	/*
	如何获取到文件的大小，类型[文件/目录]，文件修改，
	访问和创建时间等信息(使用两种方式-熟悉相关函数)

	*/

	//1 定位文件的全路径
	$file_full_path = 'd:/abc.txt';

	//2.判断文件是否存在
	if(file_exists($file_full_path)){

		//3.打开该文件
		/*
			fopen: 函数是打开一个文件，获取到文件指针(资源)
			@param string $file_full_path 文件路径
			@param string 'r' 以只读方式打开
			@return $fp 文件指针(资源) resource(3) of type (stream)
		*/
		$fp = fopen($file_full_path, 'r');

		$fileinfo_arr = fstat($fp);

		echo '<pre>';
		//var_dump($fileinfo_arr);
		
		date_default_timezone_set('PRC');
		echo '<br> 文件的信息是:';
		echo '<br> 文件的大小是 ' . $fileinfo_arr['size'];
		echo '<br> 文件的创建时间 ' . date('Y-m-d H:i:s',$fileinfo_arr['ctime']);

		echo '<br> 文件的修改时间 ' . date('Y-m-d H:i:s',$fileinfo_arr['mtime']);


		//在php文件编程中，不是说你打开文件就访问，而是通过php程序来操作
		//touch
		touch($file_full_path);
		echo '<br> 文件的访问时间 ' . date('Y-m-d H:i:s',$fileinfo_arr['atime']);


	}else{
	
		echo '<br> 文件不存在....';
	}