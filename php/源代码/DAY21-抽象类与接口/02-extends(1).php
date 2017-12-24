<?php
	header("content-type:text/html;charset=utf-8");
	//举例说明

	class Person{
		public $name;
		public function __construct($name){
			$this->name = $name;
		}

		public function sayHello(){
			echo '<br> sayHello';
		}
	}

	class Student extends Person{
		public $age;

		//子类有自己的一个构造方法
		public function __construct($age, $name){
			parent::__construct($name);
			$this->age = $age;
			//$this->name = $name;	
		}

		public function showInfo(){
			echo '<br>' . $this->name . ' ' . $this->age; 
			//这里，我们去调用父类的普通成员方法
			$this->sayHello();
			//parent::sayHello();
			//Person::sayHello();
		}
	}

	$stu1 = new Student(300, '小马');

	$stu1->showInfo();

