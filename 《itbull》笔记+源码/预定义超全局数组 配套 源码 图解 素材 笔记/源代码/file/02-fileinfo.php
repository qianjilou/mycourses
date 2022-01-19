<?php
	header("content-type:text/html;charset=utf-8");
	//获取文件信息的第二种方式

	$file_full_path = 'd:/yyy.txt';

	/*如何获取到文件的大小，类型，文件修改，访问和创建时间等
	信息(使用两种方式-熟悉相关函数)*/

	$file_size = filesize($file_full_path);

	echo '<br> 文件大小=' . $file_size;

	$file_type = filetype($file_full_path);
	echo '<br> 文件类型=' . $file_type;

	$modify_time = filemtime($file_full_path);
	$create_time = filectime($file_full_path);
	$access_time = fileatime($file_full_path);
	echo '<br> 文件访问信息';
	echo '<br> 修改时间 = ' . $modify_time;
	echo '<br> 创建时间 = ' . $create_time;
	echo '<br> 访问时间 = ' . $access_time;
