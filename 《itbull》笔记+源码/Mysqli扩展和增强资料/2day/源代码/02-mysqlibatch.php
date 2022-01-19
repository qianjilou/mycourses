<?php
	header("content-type:text/html;charset=utf-8");
	//mysqli增强，批量执行sql语句(批量执行dml)

	//mysqli扩展事务控制

	$mysqli = new MySQLi('localhost', 'root', 'root', 'db100', 3306);

	if($mysqli->connect_errno){
		
		die('连接失败' . $mysqli->connect_error);
	}

	$mysqli->set_charset('utf8');

	//拼接sql语句
	$sql = "INSERT INTO `balance` VALUES(300, '武松', 3000.89);";
	$sql .= "INSERT INTO `balance` VALUES(400, '矮脚虎', 5000.80);";
	$sql .= "UPDATE `balance` SET salary=5000 WHERE id=100";
	

	//执行这个  sql语句
	if($mysqli->multi_query($sql)){
		echo '执行成功';
	}else{
		echo '执行失败' . $mysqli->error;
	}

	//关闭连接
	$mysqli->close();