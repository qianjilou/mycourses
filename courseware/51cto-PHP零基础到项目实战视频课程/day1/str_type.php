<?php
	header("content-type:text/html;charset=utf-8");
	// $str = "字符串类型<br/>";
	// $str = "字符串类型" . "<br/>";
	// echo $str;
	// echo $str;
	// echo $str;
	// echo $str;
	
	
	// $str = '单引号类型的变量';
	// echo $str . "<br/>";	
	// echo $str . "<br/>";	
	// echo $str . "<br/>";	
	// echo $str . "<br/>";	

	
	// $str = '这是';		
	// $str2 = '$str一个字符串';
	// $str2 = "{$str}一个字符串";
	// $str2 = $str . "一个字符串";
	// echo $str2;

	$str = <<< HTML
	this is a test string<br/>
	this is a test string<br/>
	this is a test string<br/>
HTML;
	echo $str;


?>