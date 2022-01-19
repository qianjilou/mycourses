<?php
	header("content-type:text/html;charset=utf-8");
	//mysqli扩展事务控制

	$mysqli = new MySQLi('localhost', 'root', 'root', 'db100', 3306);

	if($mysqli->connect_errno){
		
		die('连接失败' . $mysqli->connect_error);
	}

	$mysqli->set_charset('utf8');

	/*
	使用mysqli实现转账 宋江 + 100  吴用 -100
	*/
	$sql1 = "UPDATE `balance10` SET salary=salary+100 WHERE id=100";
	$sql2 = "UPDATE `balance` SET salary=salary-100 WHERE id=200";

	//开始一个事务
	$mysqli->query('start transaction');
	//$mysqli->query('set autocommit=false');
	//$mysqli->query('begin');

	//执行操作
	$res1 = $mysqli->query($sql1);
	$res2 = $mysqli->query($sql2);

	if($res1 && $res2){
		echo '<br>提交';
		$mysqli->commit();
	}else{
		echo '<br>执行失败';
		$mysqli->rollback();
	}
