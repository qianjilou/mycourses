<?php
	$str1 = 'hello';

	$str2 = 'abc';
	$str1 = $str1 . $str2;
	//如果使用左连接 .= 放在一起.
	$str1 .= $str2;
	//echo $str1;

	//三元运算符
	$a = 10;
	$b = 20;
	
	//这里在说一下规则
	//三元运算的语法
	//表达式 (表达式1) ? (表达式2) : (表达式3) 
	// 表达式1 为真，则结果是 表达式2
	// 表达式1 为假，则结果是 表达式3
	$res = 10 > 9 ?  'abc' : 'hello200';
	echo $res;