<?php
	header("content-type:text/html;charset=utf-8");

	$arr1 = array(90,91,0,12,899);
	
	$arr_max = $arr1[0];
	$max_inx = 0;
	$arr_min = $arr1[0];
	$min_inx = 0;

	foreach($arr1 as $key => $val)
	{
		if($arr_max < $val)
		{
			$arr_max = $val;
			$max_inx = $key;
		}
		if($arr_min > $val)
		{
			$arr_min = $val;
			$min_inx = $key;
		}
	}

	echo $arr_min . ' = ' . $min_inx;