<?php
	header('content-type:text/html;charset=utf-8');
	//final的注意事项

	final class A{
		//final 不能修饰属性
		//final public $name = 'hello';

		//子类不能重写final方法，但是可以继承
//		final public function sayOk(){
//			echo '<br> say Ok';
//		}

		public function sayOk(){
			echo '<br> say Ok';
		}
	}


	//final类可以被实例化
	$a = new A;
	$a->sayOk();

