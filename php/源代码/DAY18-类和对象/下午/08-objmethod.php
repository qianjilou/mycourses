<?php
	header('content-type:text/html;charset=utf-8');
	//成员方法的举例

	/*
	①添加sayHello 成员方法,输出 'hello'
   ②添加getResult成员方法,可以计算1到10的和
   ③修改getResult2 成员方法,该方法可以接收一个数num，计算它的三倍值结果
   ④添加getMax成员方法,可以计算显示最大值.

	*/

	class Person{
		public $name;
		public $age;

		//添加sayHello 成员方法,输出 'hello'
		public function sayHello(){
			echo '<br> hello!';
		}
		
		//添加getResult成员方法,可以计算1到10的和,并且返回结果
		public function getResult(){
			
			$result = 0;
			for($i = 0; $i <= 10; $i++){
				$result += $i;
			}
			return $result;
		}

		//修改getResult2 成员方法,该方法可以接收一个数num，计算它的三倍值结果
		public function getResult2($num){
			
			return $num * 3;
		}

		//在成员方法中，我们可以调用系统函数
		//添加getMax成员方法,可以计算显示最大值
		public function getMax($n1, $n2, $n3){

			//echo '<br> ' $n1 . $n2 . $n3;
			return max($n1, $n2, $n3);
		}


	}
	$p1 = new Person;
	$p1->name = '木头人';
	$p1->age = 10;
	//如何调用成员方法呢
	$kk = $p1->sayHello();
	var_dump($kk);


	//调用有返回值
	$res = $p1->getResult();
	echo '<br> 计算结果是 ' . $res;
	
	$res2 = $p1->getResult2(3);
	echo '<br> 计算结果是 ' . $res2;

	$res3 = $p1->getMax(1, 3, 90);

	echo '<br> 计算结果是 ' . $res3;

	

