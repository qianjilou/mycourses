<?php
	header("content-type:text/html;charset=utf-8");
	//属性重写

	class Person{
		public $name = 'aa';
		protected $age = 30;
		private $salary = 45.6;
	}

	class Student extends Person{
		public $name = 'bb';
		protected $age = 10;
		private $salary = 100;
	}

	$student = new Student;
	echo '<pre>';
	var_dump($student);