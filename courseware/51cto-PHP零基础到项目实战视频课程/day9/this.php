<?php
	header( "content-type:text/html;charset=utf-8" );
	class Human {
		public $name;
		public function __construct ( $n ) {
			$this->name = $n;
		}
		public function say () {
			// echo $this->name . "<br/>";
			$name = "沙增";
			// echo $name . "<br/>";
			echo $this->name . "<br/>";
		}
	}	
	$h = new Human( "八戒" );
	$h->say();
	$h2 = new Human( "悟空" );
	$h2->say();
?>