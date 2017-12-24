<?php
	header('content-type:text/html;charset=utf-8');


	class A{


		const MY_CONST = array('tax_rate'=> 0.08, 'copyright' => '泰牛程序员');
		
	}

	

	function test(){		
		echo A::MY_CONST['copyright'];
	}

	test();
	

	//使用
	echo A::MY_CONST['copyright'];
	echo '<br>';
	echo A::MY_CONST['tax_rate'];

	//常量
	define('MY_CONST', 'abc');

	echo MY_CONST;