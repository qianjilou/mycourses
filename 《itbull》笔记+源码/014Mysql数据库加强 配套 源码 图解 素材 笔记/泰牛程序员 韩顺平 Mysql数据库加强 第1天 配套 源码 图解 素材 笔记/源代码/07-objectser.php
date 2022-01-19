<?php
	header("content-type:text/html;charset=utf-8");
	//序列化对象，并保存

	class Dog{
		
		public $name;
		protected $age;
		function __construct($name, $age){
			$this->name = $name;
			$this->age = $age;
		}
	}

	$dog1 = new Dog('大黄狗', 9);

	//把$dog1保存到文件
	
	//file_put_contents 可以把 字符串保存文件中
	//$str = '你好,okokook!';
	file_put_contents('d:/ok.txt', serialize($dog1));
	echo '<br> 保存成功!';