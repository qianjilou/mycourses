<?php
	header("content-type:text/html;charset=utf-8");
	//定义一个数组，有5个数，请找出最大的数和最小的数和对应的数组下标(key)是多少?

	//1. 定义一个数组，有5个数
	$arr = array(34, 8, 90,12,100, -23, 900, 0);
	//2. 思路 
	// 2.1 先找出最大值和最大值对应下标, 
	// 我认为第一个数就是就是最大值, 最大值的下标就是0
	$max_val = $arr[0];
	$max_index = 0;

	// 我认为第一个数就是就是最小值, 最小值的下标就是0 
	$min_val = $arr[0];
	$min_index = 0;

	// 开始遍历数组，如果我发现有一个数比我认为的这个数还大，我就改变
	foreach($arr as $key=>$val)
	{
		if($max_val < $val)
		{
			$max_val = $val;
			$max_index = $key;
		}

		if($min_val > $val)
		{
			$min_val = $val;
			$min_index = $key;
		}

	}

	echo '<br>最大值 = ' . $max_val . '下标是=' .$max_index;
	echo '<br>最小值 = ' . $min_val . '下标是=' .$min_index;


