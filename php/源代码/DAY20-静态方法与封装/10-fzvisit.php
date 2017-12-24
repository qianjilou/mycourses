<?php
	header('content-type:text/html;charset=utf-8');
	//使用__get 和 __set 来操作protected 和 private 属性

	class Person{
		public $name;
		protected $nickname;
		private $address;
		private $salary;

		public function __construct($name, $nickname, $address){
			$this->name = $name;
			$this->nickname = $nickname;
			$this->address = $address;
		}

		//魔术方法
		public function __set($pro_name, $pro_val){

			if(property_exists($this, $pro_name)){
				$this->$pro_name = $pro_val;
			}else{
				echo '<br> 属性不存在..';
			}
		}

		//魔术方法
		public function __get($pro_name){
			
			if(property_exists($this, $pro_name)){
				return $this->$pro_name;
			}else{
				echo '<br> 属性不存在';
			}
		}
	}

	$p1 = new Person('小明', '葫芦娃', '葫芦山');

	//操作 $nickname $address

	$p1->nickname = '大葫芦娃';
	$p1->address = '葫芦岛';
	$p1->salary = '北京你好'; 

	echo '<br> 信息如下: ';
	echo '<br> 名字: ' . $p1->name;
	echo '<br> 外号: ' . $p1->nickname;
	echo '<br> 地址: ' . $p1->address;
	echo '<br> 薪水: ' . $p1->salary;
 