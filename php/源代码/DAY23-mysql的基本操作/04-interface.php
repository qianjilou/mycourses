<?php
	header('content-type:text/html;charset=utf-8');
	//一个类可以实现多个接口,逗号隔开


	interface iUsb1{
		
		public function sayHello();
	}

	interface iUsb2{
		public function sayOk();
	}
	class A implements iUsb1, iUsb2{
		
		//当一个类实现了多个接口后，则需要将所有接口的方法都实现
		public function sayHello(){
			echo '<br> sayHello';
		}
		public function sayOk(){
			echo '<br> say ok';	
		}
	}