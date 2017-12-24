<?php
	header('content-type:text/html;charset=utf-8');

	//__toString函数
	class Sheep{
		
		public $name;
		protected $food;

		public function __construct($name, $food){
			$this->name = $name;
			$this->food = $food;
		}
		//魔术方法
		//当输出一个对象时，就会触发该函数
		//1. _toString 没有形参
		//2. _toString 要求返回一个字符串
		//3. 当我们在项目开发时，需要 debug， 可以通过他输出对象信息  
		public function __toString(){
			
			return '名字: ' . $this->name . ' 食物是 ' . $this->food;
		}
	}

	$sheep = new Sheep('懒洋洋', '狼');

	//当我们将一个对象直接输出时，就会触发魔术方法__toString,
	//如果你没有写，就会报错
	echo $sheep;