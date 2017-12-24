<?php
	header('content-type:text/html;charset=utf-8');
	//a.php


	require 'DAOMySQLi.class.php';
	
	//连接数据库的参数
	$option_arr = array(
	    'host' => 'localhost',
	    'user' => 'root',
	    'pwd' => '123',
	    'dbname' => 'itbull',
	    'port' => 3306,
	    'charset' => 'utf8'
	);
	
	//获取到dao对象实例
	$dao1 = DAOMySQLi::getSingleton($option_arr);

	$sql = 'SELECT * FROM `user3`';
	$user_list = $dao1->fetchAll($sql);

	foreach($user_list as $user){
		
		echo '<pre>';
		var_dump($user);
	}

	$sql = "INSERT INTO `user3` VALUES(null, '溜溜', md5('123'), 'll@sohu.com', '2000-01-01')";

	if($dao1->query($sql)){
		echo '<br> 执行成功';
	}

	