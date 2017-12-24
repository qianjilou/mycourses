<?php
	header('content-type:text/html;charset=utf-8');
	//作业的点评

	/*
	要求: 
请编写一个Cat类(有 年龄, 名字 二个属性)，要求二个属性全部都是public。
Cat类有一个 方法 jiSuan($n1, $n2, $oper) 可以计算+ - * / 是私有的.
在类外部，$对象名->play('jiSuan', $n1, $n2, $oper) 得到结果，注意play这个方法，在类中没有定义.
要求 play 是固定的，如果没有按规则写，则给出相应的错误提示!

	*/

	class Cat{
		public $name;
		public $age;
		public function __construct($name, $age){
			$this->name = $name;
			$this->age = $age;
		}
		
		private function jiSuan($n1, $n2, $oper){
			
			$res = 0;
			switch($oper){
				case '+':
					$res = $n1 + $n2;
					break;
				case '-':
					$res = $n1 - $n2;
					break;
				case '*':
					$res = $n1 * $n2;
					break;
				case '/':
					$res = $n1 / $n2;
					break;
				default :
					echo '你输入的运算符号不对';
			}

			return $res;
		}

		//编写一个__call 魔术方法
		public function __call($method_name, $parameters){
			
			//先判断是否通过 'play' 调用
			if($method_name == 'play'){
				//继续
				if( method_exists($this, $parameters[0]) ){
					//继续
					return $this->$parameters[0]($parameters[1], $parameters[2], $parameters[3]);
				}else{
					return ' 你调用的 ' . $parameters[0] . ' 不存在';
				}
			}else{
				return ' 你调用的方式有问题 ';
			}
		}

	}

	$cat = new Cat('小花猫', 3);

	echo '<br> 运算的结果是 ' . $cat->play('jiSuan', 10, 20, '-');