<?php
	header('content-type:text/html;charset=utf-8');
	//stdClass std(standard 标准) 举例

	$obj = new stdClass;
	$obj->name = '北京';
	$obj->address = '小汤山';
	$obj->age = 200;

	echo '<pre>';
	var_dump($obj);