<?php
	
	header("content-type:text/html;charset=utf-8");
	//引入myfuns.php
	require "./myfuns.php";

	function sayHello(){
		echo "say hello";
	}

	$a = 100;
	$b = 20;
	//定义一个运算符
	$c = "-";

	//使用(调用)函数完成运算
	//所谓调用函数，就是通过函数名和传入参数(实际参数)

	$res2 = jiSuan($a, $b, $c);
	echo "运算结果是 = " . $res2;

	sayHello();

	


