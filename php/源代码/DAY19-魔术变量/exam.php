<?php
	header('content-type:text/html;charset=utf-8');

	class A{
		public  static  $a=90;
		public function  __construct(){
		   echo 'hello';
		}
	
	}
	//告诉大家，我们使用静态属性，不一定非要创建一个对象实例
	echo A::$a;  



