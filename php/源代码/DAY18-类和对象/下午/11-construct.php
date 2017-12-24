<?php
	header('content-type:text/html;charset=utf-8');

	class B{
		
		public function __construct($n){
			echo '<br> n = ' . $n;
		}

		//如果再定义一个
		public function __construct($a, $b){
			echo '<br> a = ' . $a ;
		}
	}