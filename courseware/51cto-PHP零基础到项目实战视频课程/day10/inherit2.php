<?php
	header( "content-type:text/html;charset=utf-8" );

	class Person {
		public $name = "八戒";
		public function say () {
			echo "说话<br/>";
		}
	}

	class Programmer extends Person{
		public $name = "悟空";
		public function write() {
			echo "编程<br/>";
		}
	}

	class Employee extends Person{
		public $name = "唐僧";
		public function recruit () {
			echo "招聘<br/>";
		}
	}

	$p = new Person();
	$p->say();

	$programmer = new Programmer();
	$programmer->say();	
	$programmer->write();

	$employee = new Employee();
	$employee->say();	
	$employee->recruit();
	// $employee->write();	



?>