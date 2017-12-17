<?php
	header( "content-type:text/html;charset=utf-8" );
	
	// class Human {
	// 	public $name = "张三";
	// }	
	// $h = new Human();
	// echo $h->name . "<br/>";


	class Human {
		public $name;
	}
	$h = new Human();
	var_dump( $h->name );


		

?>