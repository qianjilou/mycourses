<?php
	header('content-type:text/html;charset=utf-8');

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

	//获取对象
	$dao = DAOMySQLi::getSingleton($option_arr);
	$sql = 'SELECT * FROM emp';
	$emp_list = $dao->fetchAll($sql);

	foreach($emp_list as $emp){
		echo '<Pre>';
		var_dump($emp);
	}