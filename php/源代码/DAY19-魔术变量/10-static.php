<?php
	header('content-type:text/html;charset=utf-8');

	//静态属性的问题提出
	/*
		定义一个全局的变量 $total_num, 当有一个小朋友加入游戏时，我们就加1, 当我们需要查看有多少小朋友玩时，直接输出
	*/


	//定义全局变量
	$total_num = 0;
	
	class Child{
		public $name;
		
		public function __construct($name){
			$this->name = $name;
		}

		//加入游戏
		public function joinGame(){
			echo '<br> ' . $this->name . ' 小朋友加入cs';
			global $total_num;
			$total_num++;
		}
	}

	$child1 = new Child('白骨精');
	$child2 = new Child('犀牛精');
	$child3 = new Child('狐狸精');

	$child1->joinGame();
	$child2->joinGame();
	$child3->joinGame();

	echo '<br> 有 ' . $total_num . ' 个小朋友玩cs';