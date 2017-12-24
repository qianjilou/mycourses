<?php
	header('content-type:text/html;charset=utf-8');

	class Monk{
		
		public $name;
	}


	//在使用默认构造方法时，下面的两种创建对象方法一样
	$monk1 = new Monk;
	$monk1->name = '法海';
	$monk2 = new Monk();
	$monk2->name = '济公';

	$monk3 = new monk;
	$monk3->name = '唐僧';
	
	echo '<pre>';
	var_dump($monk1, $monk2, $monk3);

	