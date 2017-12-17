<?php
	class Person {
		public $name;
		public $age;
		public function __construct ( $n, $a ) {
			$this->name = $n;
			$this->age = $a;
		}
	}
	class Student extends Person {
		//构造函数被重写,覆盖
		public function __construct () {

		}
	}
	$stu = new Student( "张三", "20" );
	echo $stu->name . ": " . $stu->age . "<br>";

?>