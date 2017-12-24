<?php
	header('content-type:text/html;charset=utf-8');
	//接口中可以有属性,但只能是常量 ,默认是public, 但不能用public 显式修饰


	interface iAbc{
		//不能含有普通的成员属性
		//public $name = 'hello';
		//接口中可以有常量，默认就是public , 但是不要使用public修饰
		const My_PI = 3.14;
	}

	//如何调用常量
	echo ' pi = ' . iAbc::My_PI;



