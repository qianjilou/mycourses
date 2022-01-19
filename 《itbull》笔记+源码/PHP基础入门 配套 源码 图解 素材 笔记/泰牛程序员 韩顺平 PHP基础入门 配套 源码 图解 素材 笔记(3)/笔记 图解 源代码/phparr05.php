<?php
	header("content-type:text/html;charset=utf-8");
	
	//水浒英雄数组
	/*
		注意:
		1. 如果你自己指定键，那是什么就是什么
		2. 如果你没有给某个值，指定键。就从最大的那个键继续分配
	*/
	$hero_arr = array('no1'=>'宋江', 'no2' =>'小卢', 'no3' => '吴用', 100, 
		'no4' => '林冲', 300);
	var_dump($hero_arr);


	//请问这时我们访问 吴用这个元素. 就是 $arr[key]
	echo $hero_arr['no3'];
	