<?php
	header('content-type:text/html;charset=utf-8');
	//类常量案例

	class Clerk{
		
		//定义一个常量表示所得税率.
		const TAX_RATE = 0.08;

		//统计该交的所得税
		public function getTax($salary){
		
			echo '<br> 该交的税是  ' . ($salary * self::TAX_RATE) . ' 元'; 
		}
	}

	$clerk = new Clerk;
	$clerk->getTax(30000);