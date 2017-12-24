<?php
	header('content-type:text/html;charset=utf-8');
	//统计某个目录下所有文件和子文件夹的大小
	
	//定义文件夹
	$dirname='e:/hspweb';

	$all_size = getDirSize($dirname);
	echo $all_size;
	
	function getDirSize($dirname) {
		//定义一个变量，默认为0
		$dirsize=0;
		//打开目录
		$dir=opendir($dirname);

		while(false !== ($filename=readdir($dir))){
			
			//拼接该文件的全路径
			$file=$dirname.'/'.$filename;
			
			//如果不是.并且不是 ..
			if($filename!="." && $filename!=".."){
				//是不是目录
				if(is_dir($file)){
					$dirsize += getDirSize($file); 
				}else{
					$dirsize += filesize($file);
				}
			}
		}
		closedir($dir);
		return $dirsize;
	}
