<?php
	
	//php数据类型的自动转换
	$a = 10;
	var_dump($a);
	$a = 123.4;
	var_dump($a);
	$a = true;
	var_dump($a);

	//这里我们说一下php数据类型的精度
	//1.php基本数据类型的精度 bool < int < 小数
	//2.在运算时，数据类型会自动的向高精度转换
	$res = 23.5 + 4;
	var_dump($res);