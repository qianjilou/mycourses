<?php
	header('content-type:text/html;charset=utf-8');

	class Person{
		
		public $name;

		//构造函数
		public function __construct($name){
			$this->name = $name;
		}
		//析构函数
		public function __destruct(){
			echo '<br> 析构函数被调用' . $this->name;
		}
	}

	//栈 
	$p1 = new Person('大和尚');
	//显示销毁
	//$pp = $p1;
	$p1 = null;
	
	//..
	//..

	//..
	$p2 = new Person('小和尚');
	//unset($p2);
	$p3 = new Person('老和尚');
	//$p3 = 'abc';

	echo '<br>-----<br>';