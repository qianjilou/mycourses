<?php
	header( "content-type:text/html;charset=utf-8" );

// function range () {
// 	echo "demo";
// }	

// range();

	// class Demo {
	// 	public function range () {
	// 		echo "demo";
	// 	}
	// }
	// $d = new Demo();
	// $d->range();

	
	function say () {
		echo "普通方法say<br/>";
	}

	class Person {
		public function say () {
			echo "类中的方法say<br/>";
		}
	}

	say();
	$p = new Person();
	$p->say();





?>