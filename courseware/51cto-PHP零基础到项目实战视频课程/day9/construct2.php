<?php
	header( "content-type:text/html;charset=utf-8" );

	// class Person {
	// 	public $name = "张三";
	// 	public $age = 22;
	// 	public function __construct() {
	// 		echo "一个新生命诞生了<br/>";
	// 		$this->name = "李四";
	// 	}	
	// }
	// $p = new Person();
	// echo $p->name . "<br/>";
	// $p2 = new Person();
	// echo $p2->name . "<br/>";
	// $p3 = new Person();
	// echo $p3->name . "<br/>";



	class Person {
		public $name = "张三";
		public $age = 22;
		public function __construct( $n, $a ) {
			$this->name = $n;
			$this->age = $a;
		}	
	}

	$p = new Person( "李四", 20 );
	echo $p->name . ':' . $p->age . "<br/>";
	$p2 = new Person( "王五", 23 );
	echo $p2->name . ':' . $p2->age . "<br/>";




?>