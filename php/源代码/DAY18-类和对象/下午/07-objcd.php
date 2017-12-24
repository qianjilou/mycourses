<?php
	header('content-type:text/html;charset=utf-8');

	class Person{
		public $name;
	}
	$p1 = new Person;
	$p1->name='aa';
	$p2=&$p1;
	$p2->name = 'bb';
	
	

	echo '<br>';
	echo $p1->name;

	echo '<pre>';
	//var_dump($p1, $p2);

	//echo $p1->name;
	
