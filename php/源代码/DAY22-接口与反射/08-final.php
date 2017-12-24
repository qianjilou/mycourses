<?php
	header('content-type:text/html;charset=utf-8');

	//final 举例说明

	//如果我们不希望子类来继承Superman, 则使用final修饰该类即可
	final class Superman{
		
		public $name;

		public function __construct($name){
			$this->name = $name;
		}

		//攻击
		//如果我们不希望子类去重写attack方法, 使用final 修饰即可
		final public function attack(){
			echo '<br> 超人的攻击方式是 仍原子弹';
		}
	}

	class Spiderman extends Superman{
		
		
		//攻击[重写了Supername 的 attack]
//		public function attack(){
//			echo '<br> 蜘蛛侠的攻击方式是 吐口水';
//		}
	}