<?php
	header('content-type:text/html;charset=utf-8');

	//__clone 魔术方法

	class Sheep{
		public $name;
		protected $food;

		public function __construct($name, $food){
			$this->name = $name;
			$this->food = $food;
		}

		//__clone  的魔术方法

		//如果程序员希望阻止克隆, 则将该__clone 申明为private即可
		//在很多设计模式中，就会使用到这个特点-比如说，单例模式

		public  function __clone(){
			//在克隆一个对象时，可以在这个 __clone 函数中去修改某个属性(如果有必须要的)
			//$this->food = '青草';
			echo '<br> __clone被调用';
		}
	}

	$sheep1 = new Sheep('多利', '<。)#)))≦');

	//看一下对象的赋值方式
	$sheep2 = $sheep1;

	//讲一下对象的比较
	
	//当使用比较运算符（==）比较两个对象变量时，比较的原则是：如果两个对象的属性和属性值 都相等，而且两个对象是同一个类的实例，那么这两个对象变量相等

	if($sheep2 == $sheep1 ){
		echo '<br> $sheep2 == $sheep1';
	}

	//而如果使用全等运算符（===），这两个对象变量一定要指向某个类的同一个实例（即同一个对象）。
	if($sheep2 === $sheep1 ){
		echo '<br> $sheep2 === $sheep1';
	}

//	$sheep3 = new Sheep('多利', '<。)#)))≦');
	//对象的克隆, 会触发__clone 的魔术方法
	$sheep3 = clone $sheep1;

	if($sheep3 == $sheep1){
		echo '<br> $sheep3 == $sheep1';
	}

	if($sheep3 === $sheep1){
		echo '<br> $sheep3 === $sheep1';
	}