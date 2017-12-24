<?php
	header("content-type:text/html;charset=utf-8");
//	abstract class Animal{
//		public function abc(){
//			echo 'abc';
//		}
//		public static function abc2(){
//			echo 'okno';
//		}
//	}
//	Animal::abc2();

	class Animal{
		abstract public function  abc();
		public static function abc2(){
			echo 'okno';
		}
	}

