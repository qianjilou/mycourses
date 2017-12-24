<?php
	header('content-type:text/html;charset=utf-8');

	class Monk{
		public $name;
		public $age;

		//默认构造函数如下
		public function __construct(){
			echo '<br> __construct';
		}
	}

	$monk1 = new Monk();
	$monk2 = new Monk;