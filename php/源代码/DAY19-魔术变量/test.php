<?php
	header('content-type:text/html;charset=utf-8');


	//检测变量是否设置，并且不是 NULL
	$a = null;
	var_dump(isset($a));

	//
	//empty
	//1. 如果没有设置过这个变量，则返回true
	//2. ""、0、"0"、NULL、FALSE、array()、var $var;以及没有任何属性的对象都将被认为是空的，如果 var 为空，则返回 TRUE。 
	$b = 0;
	var_dump(empty($b));


	$num1 = 'hello';
	$num2 = &$num1;
	unset($num1);

	var_dump($num2);