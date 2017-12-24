<?php
	header('content-type:text/html;charset=utf-8');


	class A{
		
		//在定义常量时，必须给初始值
		const MY_PI = 3.14; 


	}




	class B extends A{
	}

	echo B::MY_PI;

	//常量不能修改值
	//A::MY_PI = 3.1415926;