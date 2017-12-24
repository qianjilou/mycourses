<?php
	header("content-type:text/html;charset=utf-8");
	//属性的重载

	class Dog{
		private $arr = array();

		//这里我们对属性的重载做一个处理
		public function __set($pro_name, $val){
			//如果我希望保留php本身的动态的增加属性
			$this->arr[$pro_name] = $val; 
		}

		public function __get($pro_name){
			if(isset($this->arr[$pro_name])){
				return $this->arr[$pro_name];
			}else{
				echo '<br> 属性值没有';
			}
		}
	}
	$dog1 = new Dog();
	$dog1->name = '大黄狗';
	echo '<br>' . $dog1->name;
	echo '<pre>';
	var_dump($dog1);