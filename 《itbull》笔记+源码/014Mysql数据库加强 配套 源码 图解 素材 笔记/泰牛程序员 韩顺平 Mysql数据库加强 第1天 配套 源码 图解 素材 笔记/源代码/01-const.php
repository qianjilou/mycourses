<?php
	header("content-type:text/html;charset=utf-8");
	//常量的讲解

	class Company{
		
		//把所得税率定义成一个类常量
		const TAX_RATE = 0.08;


		function getIncomeingTax($money){
			
			echo '公司应该交的所得税是' . $money * self::TAX_RATE;
		}
	}


	class A extends Company{
	
	}

	echo '<br> tax_rate' . A::TAX_RATE;
	//使用
	$company = new Company();
	$company->getIncomeingTax(30000);
	echo '<br> 测试' . Company::TAX_RATE * 1000;
	
