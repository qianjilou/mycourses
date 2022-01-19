<?php
	header("content-type:text/html;charset=utf-8");
	//+,-,*,/法
	$num1 = 10;
	$num2 = 20;
	$res = $num1 + $num2;
	
	$res2 = $num1 - $num2;

	$res3 = $num1 * $num2;
	$res4 = $num1 / $num2;

	//取模 %
	$res5 = $num1 % $num2;

	//判断$num1 是否可以被$num2整除

	if($num1 % $num2 == 0)
	{
		echo '可以整除';
	}else
	{
		echo '不可以整除';
	}
	