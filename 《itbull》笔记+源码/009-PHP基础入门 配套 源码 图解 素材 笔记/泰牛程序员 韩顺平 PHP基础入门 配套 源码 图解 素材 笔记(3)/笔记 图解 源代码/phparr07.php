<?php
	header("content-type:text/html;charset=utf-8");
	//php的数组是动态增长的特点

//	$arr[0] = 10;
//	$arr[1] = 12;

//	for($i = 1; $i <=1000; $i++)
//	{
//		//如果我们没有指定数组的下标(key), 就会自动分配，从最大的下标递增
//		$arr[] = $i;
//	}
//	echo '<pre>';
//	print_r($arr);

	$arr[3] = 1000;
	$arr[] = 345;
	echo '<pre>';
	print_r($arr);

	//is_array判断是否是一个数组.
	$arr = array(12, 90);
	if(!is_array($arr))
	{
		echo "yes";
	}

	//空数组会返回一个0
	$arr=array();
	echo count($arr);