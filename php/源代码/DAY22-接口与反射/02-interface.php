<?php
	header('content-type:text/html;charset=utf-8');
	//接口的快速入门
	//接口
	interface iMyInterface{
		//求和
		public function getSum($n1, $n2);
		//求差
		public function getSub($n1, $n2);
	}
	//使用一下接口[实现接口]
	class A implements iMyInterface{
		
		public function getSum($n1, $n2){
			
			return $n1 + $n2;
		}

		public function getSub($n1, $n2){
			return $n1 - $n2;
		}
	}
	$a = new A;
	echo $a->getSum(1,2);
