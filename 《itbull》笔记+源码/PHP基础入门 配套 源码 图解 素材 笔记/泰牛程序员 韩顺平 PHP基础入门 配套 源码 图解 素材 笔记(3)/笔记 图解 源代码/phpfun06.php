<?php
	header("content-type:text/html;charset=utf-8");
	//使用php的字符串函数
	//在php中，我们的下标取字符串是按照字节取
	$str = "abcc北京aa";
	echo $str[6];
	//这里关于字符串的输出函数

	$myvar1 = "hello,world<br>";
	echo $myvar1;
	echo 12,30,'abc','<p>hello</p>';

	$res = print ('abc,hello');
	var_dump($res);

	//printf可以格式化输出内容
	$name="北京";
	$age=5;
	$address = "安博";
	printf("my name is %s, age %d , 地址 %s", $name, $age, $address);

	$num = 108;
	$name = '宋江';
	$sal=11156.67;
	$str = '<br/>梁山好汉有 %d 个  老大是 %s 老二是 %s 工资是 %f 工资是 %.3f<br/>';
	//把字符串格式化,但是不输出
	$str = sprintf($str, $num, $name,$name,$sal,$sal);

	//....
	echo $str;

	//还有四个常用的字符串函数
	//chop rtrim ltrim trim
	
	$str = "abcddd3";
	//rtrim 去掉字符串右边的空白字符,或者是指定的字符
	$str = rtrim($str);
	echo $str . 'kk';

	$str = ",,,,,,,v,bcddd";
	//ltrim 去掉字符串左边的空白字符,或者是指定的字符
	$str = ltrim($str, ',');
	echo '<br>aa'. $str . 'kk';


	$str = 'rrrabrcrrrrrr';
	//trim 去掉字符串左右两边的空白字符，或者是指定的字符
	$str = trim($str, 'r');
	echo '<br>hello' . $str . 'yyy';