<?php
	header( "content-type:text/html;charset=utf-8" );

	class Person {
		public $name = "张三";
		public $age = 22; 
	}

	$p = new Person();
	echo $p->name . ":" . $p->age . "<br/>";
	$p1 = new Person();
	echo $p1->name . ":" . $p->age . "<br/>";
	$p2 = new Person();
	echo $p2->name . ":" . $p->age . "<br/>";



?>