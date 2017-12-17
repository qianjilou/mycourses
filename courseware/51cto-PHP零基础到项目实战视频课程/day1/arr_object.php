<?php
	$arr = array( 10, 20, 30 );
	var_dump( $arr );

	$p = new Person();
	var_dump( $p );
	class Person {
		public $name = "张三";
		public function showName (){ 
			echo $this->name;
		}
	}
?>
