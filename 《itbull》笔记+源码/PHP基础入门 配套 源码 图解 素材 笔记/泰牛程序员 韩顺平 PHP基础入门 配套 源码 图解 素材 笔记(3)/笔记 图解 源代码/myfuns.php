<?php
	
	/**
		@author : 张某某
		@date : 2019.11.11
		@$num1 : 输入的一个数值
		@$num2 : 输入的第二个数
		@oper: 输入的运算符
		@return : 返回了运算结果
	*/
	function jiSuan($num1, $num2, $oper)
	{
		//定义一个变量,$res可以存放结果
		$res = 0;

		//通过判断运算符来决定进行怎样的操作
		if($oper == "+")
		{
			$res = $num1 + $num2;
				
		}else if($oper == "-")
		{
			$res = $num1 - $num2;
		}else if($oper == "*")
		{
			$res = $num1 * $num2;

		}else if($oper == "/")
		{
			$res = $num1 / $num2;
		}

		//我们返回
		return $res;
	}
	