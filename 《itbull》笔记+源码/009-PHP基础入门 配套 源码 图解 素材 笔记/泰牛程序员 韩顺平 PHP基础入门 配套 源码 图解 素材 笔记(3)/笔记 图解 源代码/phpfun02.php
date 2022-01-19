<?php
	header("content-type:text/html;charset=utf-8");
	
	//函数的局部变量: 就是在函数的内部定义，其作用域
	//就在函数的内部

	$a = 20;
	
	function abc()
	{
		//如果，我们在函数内先使用 global $a
		//表示，函数内希望使用一个全局变量$a
		//1. 如果存在这个全局变量$a, 直接用
		//2. 如果不存在，则创建这个全局变量
		global $a;
		$a = $a + 90;
	}
	abc();
	echo $a;
