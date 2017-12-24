<?php
	header("content-type:text/html;charset=utf-8");
	//重写的细节
	/**
	1.子类的方法的参数个数 ,方法名称,要和父类方法的参数个数,方法名称一样。
	2.如果父类的方法的参数使用了类型约束，还必须保证数据类型一致.
	3.子类方法不能缩小父类方法的访问权限	

	*/

	class Person{
		protected function getSum(array $num1, $num2){
			//处理..
		}
	}

	class Student extends Person{
		
		public function getSum(array $num1, $num2){
			//xxx
		}
	}