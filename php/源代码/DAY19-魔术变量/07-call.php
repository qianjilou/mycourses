<?php
	header('content-type:text/html;charset=utf-8');
	//__call魔术方法

	 class Monk{
		public $name;
		protected $hobby;

		public function __construct($name, $hobby){
			$this->name = $name;
			$this->hobby = $hobby;
		}
		
		//输出该对象的信息
		public function showInfo(){
			
			echo '<br> 名字是 ' . $this->name;
			foreach($this->hobby as $hobby){
				echo '<br> 爱好有 ' . $hobby;
			}
		}

		//会做算术题, 保护的
		protected function getSum($num1, $num2){
			
			return $num1 + $num2;
		}

		//编写这个__call魔术方法， __call 魔术方法会接收到两个参数
		/*
			@param $method_name 就是函数名
			@param $parameters 就是参数，类型是array
		*/
		public function __call($method_name, $parameters){
			
//			echo '<br> method_name = ' . $method_name;
//			echo '<br> $parameters <br>';
//			var_dump($parameters);
			
			//判断 $this 中是否有  $method_name 函数，有就返回true,否则返回false
			if(method_exists($this, $method_name)){

				return $this->$method_name($parameters[0], $parameters[1]);
			}else{
				return '没有你要调用的函数';
			}
			
		}
	 }

	 $monk = new Monk('济公', array('no1'=>'腾云驾雾', 'no2'=>'喝酒'));

	 $monk->showInfo();

	 //当我们直接调用 protected 方法时，就会触发 __call 魔术方法
	 echo '<br> 结果是' . $monk->getSum(100, 200);
