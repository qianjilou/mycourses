<?php
	header("content-type:text/html;charset=utf-8");
	//重写的细节
	//重写

	class Animal {
		public $name = '不知道';
		public static $num = 90; 
		public function cry(){
			echo '<br> Animal cry()';
		}
		public function abc(){
			echo '<br> abc()';
		}
	}

	class Cat extends Animal{
		
		public function cry(){
			//如果这里，我们希望使用被重写的方法，可以这样做
			Animal::cry();
			parent::cry();
			//如果子类没有重写，父类某个public 或者 protected 方法，你
		
			//还有一种方式掉 $this->abc()
			//$this->abc();
			echo '<br> 猫猫在叫.喵喵';
		}

		public function sayHello(){

			echo '<br>静态属性值 $num = ' . parent::$num ;
			echo 'vvv' . $this->name;

		}
	}

	$cat1 = new Cat();
	$cat1->cry();
	$cat1->sayHello();