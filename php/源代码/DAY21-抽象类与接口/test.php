<?php
	header("content-type:text/html;charset=utf-8");
	class Animal{
		public function cry(){
			echo '动物叫唤..';
		}
	}
	class Cat extends Animal{
		public function cry(){
			echo '猫猫叫唤..';
			Animal::cry();
		}
	}
	$cat1=new Cat();

