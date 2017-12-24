<?php
	header("content-type:text/html;charset=utf-8");
	//重写

	class Animal {
		public $name;
		public function cry(){
			echo '<br> Animal cry()';
		}
	}

	class Cat extends Animal{
		
//		public function cry(){
//			echo '<br> 猫猫在叫.喵喵';
//		}
	}

	$cat1 = new Cat();
	$cat1->cry();

