<?php
	header('content-type:text/html;charset=utf-8');
	/*
	要求:
	请设计一个Person类, （有 名字， 年龄  和  蛋糕 三个属性）
	蛋糕一共1000块，是所有人共享的.
	创建唐僧师徒四人，他们每人都吃蛋糕, 唐僧每天吃 3块，悟空吃5块，沙和尚吃9块，猪八戒吃 30块. (编写一个 eat方法来吃)
	问两天后，还剩多少块蛋糕，(编写一个 showCake() 来显示)
	请计算，蛋糕一共可以吃多少天.

	*/


	class Person{
		public $name;
		public $age;
		// 蛋糕一共1000块，是所有人共享的, 因为共享的，因此我们应该设为static
		protected static $cakeNum = 1000;

		//构造函数
		public function __construct($name, $age){
			$this->name = $name;
			$this->age = $age;
		}

		//编写一个eat方法
		public function eat($num){

			//判断一下是否够吃
			if(self::$cakeNum >= $num){
				self::$cakeNum -= $num;
				return true;
			}else{
				
				echo '<br> 当' .$this->name. ' 想吃 ' . $num . ' 块蛋糕, 不够了，不能吃了';
				return false;
			}
		}

		//编写一个方法，显示还有多少块蛋糕
		public function showNum(){
			
			echo '<br> 当前还有 ' . self::$cakeNum . ' 蛋糕...';
		}

		

	}

	//使用
	//问两天后，还剩多少块蛋糕，(编写一个 showCake() 来显示)
	//1. 创建四个对象
	$monk = new Person('唐僧', 30);
	$monkey = new Person('悟空', 500);
	$pig = new Person('八戒', 400);
	$sMonk = new Person('沙僧', 300);

	//2. 统计两天后
	$day = 20;
	for($i = 0; $i < $day; $i++){
		
		if(!$monk->eat(3)){
			break;
		}
		if(!$monkey->eat(5)){
			break;
		}
		if(!$sMonk->eat(9)){
			break;
		}
		if(!$pig->eat(30)){
			break;
		}
	}

	echo '<br> 一共 可以吃 ' . ($i+1) . '天';

	/*
		//思想   【程序员  思想=====（锻炼）=====>代码（php技术） 】
		$count_day = 0;
		while(true){
			
			if(!$monk->eat(3)){
			break;
			}
			if(!$monkey->eat(5)){
				break;
			}
			if(!$sMonk->eat(9)){
				break;
			}
			if(!$pig->eat(30)){
				break;
			}

			$count_day++;
		}

	*/

	//3. 看看还剩多少块

	$monk->showNum();