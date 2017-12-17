<?php
	header( "content-type:text/html;charset=utf-8" );	
	/*
					private		protected		public
		本类:		Y			Y				Y				
		子类:		N			Y				Y
		类外:		N			N				Y
	*/
	class Person {
		public $name = "张三";
		protected $phone = "123456789";

		public function showName () {
			echo $this->name . "<br/>";
		}
		protected function showPhone () {
			echo $this->phone . "<br/>";
		}
	}

	class Student extends Person {
		public function showInfo () {
			echo $this->name . "<br/>";
			echo $this->phone . "<br/>";
		}
		public function showPhone2 () {
			$this->showPhone();
		}
	}

	// $p = new Person();
	// echo $p->name;
	// 类外部不能访问protected的属性
	// echo $p->phone;

	// $stu = new Student();	
	// print_r( $stu );
	// $stu->showInfo();
	// echo $stu->name . "<br/>";
	// echo $stu->phone . "<br/>";


	$stu = new Student();	
	$stu->showName();
	$stu->showPhone2();

?>