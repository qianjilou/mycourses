<?php
	header('content-type:text/html;charset=utf-8');

	//将继承和实现接口做一个比较

	class Monkey{
		
		public $name;
	
		public function __construct($name){
			$this->name = $name;
		}
		//猴子爬树

		public function climbing(){
			echo '<br> ' . $this->name . ' 会爬树 ';
		}
	}

	interface iBirdable{
		public function flying();
	}

	interface iFisable{
		public function swimming();
	}


	//继承的类，子类就可以使用它的protected 和 public 的属性和方法
	//实现的接口，类需要自己去编写和实现方法
	class LittleMonkey extends Monkey implements iBirdable, iFisable{

		public function flying(){
			echo '<br> ' . $this->name . ' 通过学习 或 飞翔...';
		}

		public function swimming(){
			echo '<br> ' . $this->name . ' 通过学习 或 游泳...'; 
		}
	}

	$littleMonkey = new LittleMonkey('小悟空');

	$littleMonkey->climbing();
	$littleMonkey->flying();
	$littleMonkey->swimming();


	class SuperMonkey extends LittleMonkey{
		
	}

	
	$superMonkey = new SuperMonkey('超级猴子');

	$superMonkey->climbing();
	$superMonkey->flying();
	$superMonkey->swimming();
