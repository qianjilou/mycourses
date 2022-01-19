<?php
	header("content-type:text/html;charset=utf-8");
	// php 内置标准类
	
	$person = new stdClass();
	echo '<pre>';
	var_dump($person);

	$person->name = '八戒';
	$person->ability = '36变化';

	var_dump($person);

	echo 'name = ' . $person->name;