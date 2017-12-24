<?php
	header('content-type:text/html;charset=utf-8');


	class Cat{
		
		public $name;
		public function __constrcut($name){
			$this->name = $name;
		}

		public function __destruct(){
			echo '<br> 析构函数' . $this->name;
		}
	}

	$cat1 = new Cat('小花猫');
	$cat2 = &$cat1;

	//unset 是销毁变量本身
	//unset($cat1);
	$cat2 = null;

	echo '<br> **************<br>';