<?php
	header("content-type:text/html;charset=utf-8");
	//数组创建的第二种方式
	/*
		当我们创建数组时:
		1.如果我们没有指定下标(key), 则会自动的分配下标(key) 从0开始分配
	*/
	$city[0] = '北京';
	$city[1] = '天津';
	$arr = array(10, 'abc', 123.4, true, $city);
	var_dump($arr);