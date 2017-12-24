<?php
	header('content-type:text/html;charset=utf-8');

	class Person{
	
		public $name;
		public $age;
	}

	$p1 = new Person;
	
	$p1->name = '金角大王';
	$p1->age = 400;

	//这个地方，到底怎样?
	$p2 = $p1;

	$p2->name = '银角大王';

	echo '<pre>';
	echo ' p1 name = ' . $p1->name;
	echo ' p2 name = ' . $p2->name;