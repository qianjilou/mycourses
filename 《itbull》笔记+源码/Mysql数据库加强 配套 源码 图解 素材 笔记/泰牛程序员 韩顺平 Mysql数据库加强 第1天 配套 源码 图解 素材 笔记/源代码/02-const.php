<?php
	header("content-type:text/html;charset=utf-8");
	

	//讨论类常量的数据类型
	class Company{
		
		//把所得税率定义成一个类常量
		const TAX_RATE = array ('no1' => 0.08 , 'no2' => 0.09);
		public $name = 'hello';

		function getIncomeingTax($money){
			
			echo '公司应该交的所得税是' . $money * self::TAX_RATE;
		}
	}

	class A{
		public function test(){
			echo 'A ' . Company::TAX_RATE['no1'];
		}
	}

	$a = new A();
	$a->test();

	$company = new Company();

	$company = null;

	echo Company::TAX_RATE['no1'];



//	echo Company::TAX_RATE['no2'];
//
//	function getTax($money){
//
//		return '<br>' . $money * Company::TAX_RATE['no1'];
//	}
//
//	echo getTax(8000);

