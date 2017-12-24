<?php
	header('content-type:text/html;charset=utf-8');
	
	$file_full_path='text.ini';
	
	
	$arr = my_parse_ini_file($file_full_path);

	var_dump($arr);


	function my_parse_ini_file($file_full_path){
	
		$content = array();

		if(file_exists($file_full_path)){
			$fp=fopen($file_full_path,'r');
			while(!feof($fp)){
				$row=fgets($fp);
				//对$row进行去掉 \r\n
				$row = str_replace("\r\n",'', $row);
				$con = explode('=',$row);
				$content[$con[0]] = $con[1];
			}
			fclose($fp);
		}else{
			echo '<br> 文件不存在....';
		}
		
		return $content;
	}

	

