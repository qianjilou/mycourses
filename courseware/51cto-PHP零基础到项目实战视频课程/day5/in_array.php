<?php
	header( "content-type:text/html;charset=utf-8" );

	$fileExt = array( "jpg", "gif", "jpeg", "png" );
	$fileName = "test.JPG";
	list( $name, $ext ) = explode( ".", $fileName );
	if ( in_array( strtolower($ext), $fileExt ) ){
		echo $ext . "文件,允许上传<br/>"; 
	}else {
		echo $ext . "文件,不允许上传<br/>"; 
	}


	// $str = "JPG";
	// echo strtolower( $str );
?>