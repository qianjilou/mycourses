<?php
	header("content-type:text/html;charset=utf-8");
	//数据类型转成对象

	$heros = array('no1'=>'宋江', 'no2'=>'小卢', 'no3' =>'小吴');

	//说明：当我们把一个数组转成了一个对象后，需要说明的是
	//1. 他成为 stdClass 对象实例
	//2. 如果是一个关联数组，数组的 key 变成属性名，数组值变成了属性的值
	$hero_obj = (object)$heros;

	echo '<pre>';
	var_dump($hero_obj);
	echo 'no3' . $hero_obj->no3 ;

	//基本数据类型
	$age = 90;

	$age_obj = (object)$age;

	echo '<pre>';
	var_dump($age_obj);
	echo 'age = ' . $age_obj->scalar;

	$isNull = null;

	$null_obj = (object)$isNull;
	echo '<pre>';
	var_dump($null_obj);




