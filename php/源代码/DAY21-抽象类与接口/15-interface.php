<?php
	header("content-type:text/html;charset=utf-8");
	//接口的初步使用

	interface iMyInterface{
		//写上方法
		public function sayHello();
	}

	//怎么使用接口
	class Monkey implements iMyInterface{
		
		public function sayHello(){
			echo '<br> 猴子hello';
		}
	}

	$monkey1 = new Monkey;
	$monkey1->sayHello();