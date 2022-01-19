<?php
	header("content-type:text/html;charset=utf-8");
	//创建一个key=>值 数组
	$hero_arr = array('no1'=>'宋江', 'no2' =>'小卢', 'no3' => '吴用', 100, 
		'no4' => '林冲', 300);
	
	foreach($hero_arr as $key => $val)
	{
		echo $key . ' ' . $val. '<br>';
		echo $hero_arr[$key] . '<br>';
	}
	
	echo '<br><br><br>';

	foreach($hero_arr as $val)
	{
		echo $val. '<br>';
	}

	echo '<br><br><br>';
