<?php
	header( "content-type:text/html;charset=utf-8" );

	class Human {
		public $language = "英语";
		public function say () {
			echo $this->language . "<br/>";
		}
		public static function walk () {
			echo "走路<br/>";
		}
	}

	$h = new Human();
	// $h->say();
	// $h->walk();

	// Human::say();
	Human::walk();

?>