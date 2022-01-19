<?php
	header("content-type:text/html;charset=utf-8");
	/*
	 为加强大家对数组的理解，我们再给大家出一个题，我们一起完成.在运动会上，五个小孩比赛滑轮，他们的滑完100米,分别用了10s、12s、5.7s、9s、14s,请编写一个程序,计算他们的平均时间?[array03.php] 时间保留到小数点后两位.

	*/
	//分析 
	$arr = array(10, 12, 5.72123, 9, 14);
	//foreach
	$total_time = 0;
	$arr_size = count($arr);
//	foreach($arr as $val)
//	{
//		$total_time += $val;
//	}
//
//	echo "平均时间是" . round($total_time/$arr_size, 2);



	//for完成
//	for($i = 0; $i < $arr_size; $i++)
//	{
//		$total_time += $arr[$i];
//	}
//	
//	echo "for平均时间是" . round($total_time/$arr_size, 2);

	//while
	$i = 0;
	while($i < $arr_size)
	{
		
		$total_time += $arr[$i];
		$i++;
	}
	echo "while平均时间是" . round($total_time/$arr_size, 2);

