<?php
	header('content-type:text/html;charset=utf-8');
	//一个接口不能继承其它的类,但是可以继承别的接口

	interface iUsb1{

		public function test1();
	}

	interface iUsb2 {
		
		public function test2();
	}

	//接口可以同时继承多个接口
	interface iUsb3 extends iUsb1, iUsb2{

		public function test3();
	}


	//我希望有一个类，可以实现三个接口
//	class A implements iUsb1, iUsb2, iUsb3{
//		
//	}

	//当一个类实现了，某个接口，如果该接口还继承了其它的接口
	//那么则该类必须将所有的抽象方法都实现
	class A implements iUsb3{
		
		public function test1(){
			echo '<br> test1()';
		}

		public function test2(){
			echo '<br> test2()';
		}

		public function test3(){
			echo '<br> test3()';
		}
	}

	