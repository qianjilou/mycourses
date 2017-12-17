<?php
	header( "content-type:text/html;charset=utf-8" );

	class Person {
		public $name = "张三";
		public $age = 22;
		public function say () {
			echo "说话";		
		}
	}
	$p = new Person();
	// echo $p->name . ':' . $p->age . "<br/>";
	$p->say();



?>