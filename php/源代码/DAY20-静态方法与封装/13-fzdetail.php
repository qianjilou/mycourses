<?php
	header('content-type:text/html;charset=utf-8');
	//封装的细节
	//普通属性要定义为公有，受保护，私有之一。如果用 var 定义，则被视为公有。静态属性可以不指定访问修饰符，默认是public

	class B{
		//对应普通的属性前面需要有访问控制符，否则报错
		public $name;
		var $age; //在php4版本语法，var $age <=====> public $age;

		//对应静态属性前面可以有访问控制符(public ,protected , private)，
		//也可以不写，默认是public
		static $total_num = 10;
	}

	echo B::$total_num;