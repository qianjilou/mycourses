<?php

	//header这个头信息，表示告诉浏览器，需要使用utf-8显示
	//header("content-type:text/html;charset=utf-8");
	//整型
	$age = 100;

	//函数，可以查看一个变量的数据类型和大小
	var_dump($age);

	//小数
	$salary = 25000.55;

	var_dump($salary);
	echo $salary;

	$is_open = false;
	var_dump($is_open);

	$str = "hello,world北京你好!";
	//$str 的length表示的长度.
	var_dump($str);
	//如果在 php文件中，显示正确的中文编码
	//1. 可以在<meta charset="utf-8">
	//2. header("content-type:text/html;charset=utf-8");
	//一个中文，多少个字节 如果你的编码是utf-8 ,一个中文是3个字节
	//如果你的编码是gbk/gb2312 ,一个中文是2个字节

