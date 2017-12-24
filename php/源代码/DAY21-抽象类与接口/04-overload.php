<?php
	header("content-type:text/html;charset=utf-8");
	//重载举例

	class Person{
		public $name;
	
		public function __construct($name){
			$this->name = $name;
		}

		//写两个函数
		private function getSum($n1, $n2){
			return $n1 + $n2;
		}
		//返回三个数据的最大值
		private function getMaxVal($n1, $n2, $n3){
			//max是php提供的一个方法，可以返回多个数的最大值
			return max($n1, $n2, $n3);
		}
		

		//写两个函数(静态)
		private static function getSum2($n1, $n2){
			return $n1 + $n2;
		}
		//返回三个数据的最大值
		private static function getMaxVal2($n1, $n2, $n3){
			//max是php提供的一个方法，可以返回多个数的最大值
			return max($n1, $n2, $n3);
		}



		//写一个__call魔术方法

		public function __call($method_name, $args){
			

			//在__call先判断是不是调用的getVal
			if($method_name == 'getVal'){
				if(count($args) == 2){
					//返回和
					return $this->getSum($args[0], $args[1]);
				}else if(count($args) == 3){
					//返回最大值
					return $this->getMaxVal($args[0], $args[1], $args[2]);
				}
			}else{
				echo '<br> 调用的方法错误!';
			}
		}

		//写一个魔术方法 __callStatic($method_name, $args)
		public static function __callStatic($method_name, $args){
			//echo '<br> __callStatic($method_name, $args)';
			if($method_name == 'getVal2'){
	
				if(count($args) == 2){
					return self::getSum2($args[0], $args[1]);
				}else if(count($args) == 3){
					return self::getMaxVal2($args[0], $args[1], $args[2]);
				}
			}
		}
	}

	$p1 = new Person('牛魔王');
	//返回两个数的和
	echo '<br> 和是 = ' .  $p1->getVal(10, 49);
	//返回三个数的最大值
	echo '<br> 最大值 = ' . $p1->getVal(10, 49, -90);
 
//	echo '<br> ' . $p1->getMaxVal(890, 34, 90);
//	echo '<br> ' . $p1->getSum(90, 30);

	//实现对静态方法的重载...
	//求和
	echo '<br> 和是=' . Person::getVal2(11, 50);
	//求最大值
	echo '<br> 最大值是=' . Person::getVal2(11, 55, -4);