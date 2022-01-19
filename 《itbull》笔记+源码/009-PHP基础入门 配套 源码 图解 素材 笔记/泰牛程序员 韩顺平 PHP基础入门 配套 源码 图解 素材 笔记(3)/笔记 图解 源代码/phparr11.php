<?php
	header("content-type:text/html;charset=utf-8");
	/*
	（数组）定义一个数组，输入4个任意的整数，求该数组中奇数的平均值。
	*/

	$arr = array(3,6,8,9);
	$js_sum = 0;
	$js_num = 0;
	foreach($arr as $key => $val)
	{
		//判断这个数是不是奇数
		if($val % 2 != 0)
		{
			$js_num++;
			$js_sum += $val;
		}
	}

	echo "奇数的平均数= " . $js_sum/$js_num;
