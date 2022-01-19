<?php
	header("content-type:text/html;charset=utf-8");
	//使用预处理可以防止 sql注入

	$mysqli = new MySQLi('localhost', 'root', 'root', 'db100', 3306);

	if($mysqli->connect_errno){
		
		die('连接失败' . $mysqli->connect_error);
	}

	$mysqli->set_charset('utf8');

	$sql = "SELECT * FROM `users` WHERE id = ? and pwd = ?";

	$stmt = $mysqli->prepare($sql);
	$id = 100;
	//$pwd = "abc' or 1='1";
	$pwd = "abc123";

	$stmt->bind_param('is', $id, $pwd);

	$stmt->bind_result($id, $name, $pwd);
	if($stmt->execute()){
		while($stmt->fetch()){
			echo '--' . $id. '--' . $name . '--' . $pwd;
		}
	}else{
		echo 'errr' . $stmt->error;
	}

	//关闭连接
	$stmt->free_result();
	$stmt->close();
	$mysqli->close();


