<?php
	header('content-type:text/html;charset=utf-8');


	class Dog{
		public $name ;
		//小狗地址
		public  static $home = '小狗之家';

		public function __construct($name){
			$this->name = $name;
		}

		//显示小狗的住址
		public function showHome(){
			
			echo '<br> 地址 ' . self::$home;
			echo '<br> 地址 ' . Dog::$home;
 		}
	}

	$dog1= new Dog('aa');
	$dog2= new Dog('bb');

	$dog1->showHome();

	//如果在类的外部访问，要求是 public 才可以
	echo '<br> 小狗的家在 ' . Dog::$home;