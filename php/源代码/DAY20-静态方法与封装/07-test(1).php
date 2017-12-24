<?php
	header('content-type:text/html;charset=utf-8');

	class Cat{
	}
	class Dog{
	}

	$cat1 = new Cat;
	$dog1 = new Dog;

	//$cat1 instanceof Cat 用于判断 $cat1是不是Cat类的一个对象实例
	if($cat1 instanceof Cat){
		echo '<br> $cat1 是Dog 的对象实例';
	}

