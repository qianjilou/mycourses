<?php
	header("content-type:text/html;charset=utf-8");
	
	//这里把继承和实现接口
	class Monkey {
		public function climbing(){
			echo '<br>猴子可以爬树';
		}
	}
	interface iFlyable{
		public function flying();
	}
	interface iSwimmingable{
		public function swimming();
	}
	class LittleMonkey extends Monkey implements iFlyable, iSwimmingable{

		public function flying(){
			echo '<br> 我学会飞翔';
		}
		public function swimming(){
			echo '<br> 我学会游泳..';
		}
	}
	$littleMonkey = new LittleMonkey();
	$littleMonkey->climbing();
	$littleMonkey->flying();
	$littleMonkey->swimming();