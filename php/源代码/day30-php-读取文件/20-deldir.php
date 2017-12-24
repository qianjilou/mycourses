<?php
	header('content-type:text/html;charset=utf-8');
	//删除整个目录
	
	$src = 'e:/hspweb';

	rrmdir($src);
	//$src 是目录
	function rrmdir($src) {
		
		//1. 打开目录
		$dir = opendir($src);
		//2. 遍历
		while(false !== ( $file = readdir($dir)) ) {
			
			//3. 排除. 和  .. 
			if (( $file != '.' ) && ( $file != '..' )) {
				
				//拼接路径

				$full = $src . '/' . $file;
				if ( is_dir($full) ) {
					rrmdir($full);
				}
				else {
					unlink($full);
				}
			}
		}
		sleep(3);
		closedir($dir);
		//rmdir是删除本目录
		rmdir($src);
	}
