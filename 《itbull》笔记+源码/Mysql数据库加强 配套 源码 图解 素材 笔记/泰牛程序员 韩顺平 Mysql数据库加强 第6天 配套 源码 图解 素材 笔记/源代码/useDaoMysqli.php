<?php
	header("content-type:text/html;charset=utf-8");
	
	//使用DAOMySQLi.class.php

	require 'DAOMySQLi.class.php';

	$option = array(
		'host' => 'localhost',
		'user' => 'root',
		'pwd' => 'root',
		'dbname' => 'db100',
		'port' => 3306,
		'charset' => 'utf8'
	);

	$dao_mysqli = DAOMySQLi::getSingleton($option);

	//如何完成 dml 操作
	$sql = "INSERT INTO `user1` VALUES (null, '北京100', md5('123'), 'ws@sohu.com', unix_timestamp('1980-10-10'), 30)";

	if($dao_mysqli->query($sql)){
		echo '成功!';
	}
	

//  使用select 语句ok
//	$sql = "SELECT * FROM `user1`";
//	$user_list = $dao_mysqli->fetchAll($sql);
//
//	echo '<pre>';
//
//	//取出$user_list 的记录
//	foreach($user_list as $user){
//		echo '<br> id = ' .$user['id'] . ' name =' . $user['name'] . ' email = ' . $user['email'];
//	}
	//var_dump($user_list);

	



