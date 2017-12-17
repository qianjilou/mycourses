<?php
	header( "content-type:text/html;charset=utf-8" );	

	// class Person {
	// 	public $name;
	// 	public function __construct( $n ) {
	// 		$this->name = $n;
	// 		echo $this->name . "诞生了<br/>";
	// 	}
	// 	public function __destruct() {
	// 		echo $this->name . "死亡了<br/>";	
	// 	}
	// }
	// $p1 = new Person( "悟空" );
	// $p2 = new Person( "八戒" );


	class Person {
		public $name;
		public function __construct ( $n ) {
			$this->name = $n;
			echo $this->name . "诞生了<br/>";
		}
		public function __destruct () {
			echo $this->name . "死亡了<br/>";
		}
	}

	$p = $p1 = new Person( "悟空" );
	unset( $p1 );
	$p = null;
	$p2 = new Person( "八戒" );
	$p2 = null;
	$p3 = new Person( "沙僧" );




?>