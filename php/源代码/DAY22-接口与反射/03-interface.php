<?php
	header('content-type:text/html;charset=utf-8');
	//最佳实践

	//定义一个接口, 定义规范(方法)
	//,我们认为不管什么设备，有三种工作状态[1. 开始  2. 工作 3. 停止]

	interface iUsb{
		
		public function start();
		public function working();
		public function stop();
	}

	//让相机和手机设备来实现这个接口

	class Phone implements iUsb{
		
		public function start(){
			echo '<br> 手机开始工作....';
		}

		public function working(){
			echo '<br> 手机正在工作中....';
		}

		public function stop(){
			echo '<br> 手机停止工作';
		}
	}

	class Camera implements iUsb{
	
		public function start(){
			echo '<br> 相机开始工作....';
		}

		public function working(){
			echo '<br> 相机正在工作中....';
		}

		public function stop(){
			echo '<br> 相机停止工作';
		}
	}

	//计算机

	class Computer{

		//多态[接口体现]
		public function work(iUsb $iMyUsb){
			
			$iMyUsb->start();
			$iMyUsb->working();
			$iMyUsb->stop();
		}
	}


	$computer = new Computer;
	$phone = new Phone;
	$camera = new Camera;

	//一个实现了接口的对象是不是 接口的一个实例.

	//var_dump($phone instanceof iUsb);

	$computer->work($phone);
	$computer->work($camera);