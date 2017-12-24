<?php
	header("content-type:text/html;charset=utf-8");
	//重载的讲解

	//传统的面向对象编程的重载.

	class Person{
		
		public function getVal($va1){
			echo '<br>  getVal($va1)';
		}

		public function getVal($val, $val2){
			echo '<br>  getVal($val, $val2)';
		}
	}

	$p1 = new Person();
	$p1->getVal(10);
	$p1->getVal(30, 400);

