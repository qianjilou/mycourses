<?php
	header( "content-type:text/html;charset=utf-8" );

	class Person {
		public $name = "张三";
		protected $phone = "123456789";
		private $money = 2000;
		public function __get ( $k ) {
			echo "你要访问我的{$k}属性<br/>";
		}
		public function __set ( $k, $v ) {
				
		}
	}
	$p = new Person();
	// echo $p->name;
	// echo $p->phone;
	// echo $p->money . "<br/>";
	// echo $p->age . "<br/>";

?>