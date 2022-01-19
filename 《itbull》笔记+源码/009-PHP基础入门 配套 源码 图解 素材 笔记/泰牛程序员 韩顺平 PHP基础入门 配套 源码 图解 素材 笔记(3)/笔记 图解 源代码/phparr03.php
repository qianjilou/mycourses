<?php
	header("content-type:text/html;charset=utf-8");
	
	$arr[0] = 10;
	$arr[1] = '北京';
	$arr[2] = 100;
	$arr[4] = 300;
	//var_dump($arr);
//	for($i = 0; $i < count($arr); $i++)
//	{
//		echo $arr[$i];
//	}

	/*
		@$arr 表示你要遍历的数组
		@$key 当遍历$arr数组时，$key就是元素的键值
		@$val 当遍历$arr数组时，$val就是元素的值
	*/
	foreach($arr as $key => $val)
	{
		echo $key . ' ' . $val . '<br>';
	}
	