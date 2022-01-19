<?php
	header("content-type:text/html;charset=utf-8");
	//创建数组的3种方式
	//1.直接赋值
	$arr[0] = 10;
	$arr[1] = 12.3;
	$arr[2] = "北京";
	$arr[3] = true;
	$arr_size = count($arr);
	for($i = 0; $i < $arr_size; $i++)
	{
		echo '<br>' . $arr[$i];
	}

