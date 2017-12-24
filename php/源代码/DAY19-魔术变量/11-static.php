<?php
	header('content-type:text/html;charset=utf-8');

	//静态属性的问题提出
	/*
		定义一个全局的变量 $total_num, 当有一个小朋友加入游戏时，我们就加1, 当我们需要查看有多少小朋友玩时，直接输出
	*/


	
	class Child{
		public $name;
		
		//定义一个静态属性
		public static $total_num = 0;
		public function __construct($name){
			$this->name = $name;
		}

		//加入游戏
		public function joinGame(){
			echo '<br> ' . $this->name . ' 小朋友加入cs';
			//在类中，访问静态变量的方式是
			//self::静态变量名
			self::$total_num++;
		}

		//输出有多少小朋友在玩游戏
		public function showNum(){
			echo '<br> 共有 ' . self::$total_num . ' 小朋友在玩游戏 ';
		}
	}

	$child1 = new Child('白骨精');
	$child2 = new Child('犀牛精');
	$child3 = new Child('狐狸精');
	$child4 = new Child('蜘蛛精');

	$child1->joinGame();
	$child2->joinGame();
	$child3->joinGame();
	$child4->joinGame();

	$child1->showNum();
	$child2->showNum();

	