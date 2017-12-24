<?php
	header('content-type:text/html;charset=utf-8');
	//__get 和 __set

	class Monkey{
		public $name;
		protected $food;
		public function __construct($name, $food){
			$this->name = $name;
			$this->food = $food;
		}

		//魔术方法 __get
		//1. 魔术方法名字是固定，系统提供
		//2. $pro_name 是形式参数，表示属性名
		public function __get($pro_name){
		
//			echo '<br> pro_name ' . $pro_name;
			
			//做一个判断
			if(property_exists($this, $pro_name)){
				return $this->$pro_name;
			}else{
				return '没有该属性，无法返回!';
			}

		}

		//魔术方法 __set
		//1. 魔术方法名字是固定，系统提供
		//2. $pro_name 是形式参数，表示属性名, $pro_val 是属性值
		public function __set($pro_name, $pro_val){
		
			//echo '<br> $pro_name = ' . $pro_name . ' pro_val ' . $pro_val;
			//判断属性是否存在
			if(property_exists($this, $pro_name)){
				$this->$pro_name = $pro_val;
			}else{
				return '属性不存在，无法赋值';
			}
		}


	}

	//创建对象
	$monkey1 = new Monkey('妖猴', '小孩');

	echo '<br> 猴子名字是 ' . $monkey1->name;

	//需求
	//因为 food是不可访问的属性(protected)

	echo '<br> 猴子喜欢吃 ' . $monkey1->food;


	//修改猴子的名字和食物
	$monkey1->name = '猴妖';
	//在默认情况下，不能直接给一个protected属性赋值, 会触发
	//__set魔术方法.
	$monkey1->food = '桃子';

	echo '<br> 新的值是 <br>';
	echo '<br> 猴子名字是 ' . $monkey1->name;

	//需求:
	echo '<br> 猴子喜欢吃 ' . $monkey1->food;

