<?php
	header("content-type:text/html;charset=utf-8");
	//抽象类
	abstract class Animal{
		public $name;
		//当一个方法，不能确定怎么写.
		abstract public function cry();

		public function sayHello(){
			echo 'abc';
		}
	}

	//抽象类的存在价值是，让其它类来继承他，并实现它写的抽象方法, 他的价值在设计
	//1. 抽象类，不能被实例化
	//$animal = new Animal;

	//2. 抽象类，可以没有抽象方法
	//3. 抽象类中，可以有普通成员方法，属性和常量

	//4 .如果一个类中，有了抽象方法，则该类必须声明为abstract
	//5. 抽象方法不能有方法体 ,不能有{}
	//6. 如果一个类，继承了某个抽象类，则该类，必须把这个抽象类所有抽象方法，全部实现,(除非，该类自己也声明成abstract类)
	
	class Dog extends Animal{
	
		//所谓实现某个抽象方法，就是把这个方法重写，并写出方法体
		public function cry(){
			echo '<br>这是小狗在叫..';
		}
	}



