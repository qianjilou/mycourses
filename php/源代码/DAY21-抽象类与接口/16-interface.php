<?php
	header("content-type:text/html;charset=utf-8");
	
	//一个接口的案例

	//定义一个接口
	interface iUsb{
		//写两个方法的声明
		public function start();
		public function stop();
	}

	//再定义一个接口
	interface iMyInterface{

		const NAME = '小红';
		public function sayHello();
	}

	//1. 接口不能被实例化
	//$iusb = new iUsb();
	//2. 接口中的所有方法，都不能实现，即不能有方法体.
	//3. 一个类可以实现多个接口, 则需要把实现的接口的所有方法都实现 
	class Abc implements iUsb,iMyInterface{
		public function  start(){
		}
		public function  stop(){
		}
		public function sayHello(){
		}
	}

	//4. 一个接口中，可以有属性，但是是常量
	//const NAME = '小红';
	//5. 接口的方法，都是public ,默认就是public
	//public function sayHello();
	//6. 一个接口可以去继承其它的接口，可以多继承，中间使用逗号隔开
	interface iA{
	}
	interface iB{
	}
	//接口之间是继承.
	interface iC extends iA,iB{
	}





	//照相机->接口
	class Camera implements iUsb{
		public function start(){
			echo '<br> 照相机开始工作...';	
		}
		public function stop(){
			echo '<br> 照相机停止工作...';	
		}
	}

	//手机
	class Phone implements iUsb{
		public function start(){
			echo '<br> 手机开始工作...';	
		}
		public function stop(){
			echo '<br> 手机停止工作...';	
		}
	}

	$phone = new Phone();
//	$phone->start();
//	$phone->stop();

	//照相机对象
	$camera = new Camera();
//	$camera->start();
//	$camera->stop();

	class Computer {
		
		public function working($iUsb){
			$iUsb->start();
			echo '<br> 工作了1个小时';
			$iUsb->stop();
		}
	}

	$computer  = new Computer();
	$computer->working($phone);
	$computer->working($camera);