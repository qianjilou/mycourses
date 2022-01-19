<?php
	header("content-type:text/html;charset=utf-8");
	
	/*
	一个养鸡场有6只鸡，它们的体重分别是3kg,5kg,1kg,3.4kg,2kg,50kg 。请问这六只鸡的总体重是多少?平均体重是多少? 请你用现在掌握的技术编一个程序
	*/

//	$hen1 = 3;
//	$hen2 = 5;
//	$hen3 = 1;
//	$hen4 = 3.4;
//	$hen5 = 2;
//	$hen6 = 50;
//
//	$total_weight = $hen1 + $hen2 + $hen3 + $hen4 + $hen5 + $hen6;
//
//	echo "总的体重=" . $total_weight . " 平均体重 = " .  $total_weight/6;

	
	/*
		我们使用数组的方法来解决上面的问题.
	*/
	
	$hen_arr = array(3, 5, 1, 3.4, 2, 50);

	//如何遍历数组,先给大家介绍最基本
	$hen_arr_size = count($hen_arr);
	//定义一个变量，保存总的重量
	$hen_total_weight = 0;

	for($i = 0; $i < $hen_arr_size; $i++)
	{
		$hen_total_weight += $hen_arr[$i];
	}

	echo "总的重量是 = " . $hen_total_weight . "平均重量是 = " . $hen_total_weight/$hen_arr_size;



