<?php
	header("content-type:text/html;charset=utf-8");
	//讲解一下mysqli 进行dml操作(insert ,update,delete)

	$mySQLi = new MySQLi('localhost', 'root', 'root', 'db100', 3306);

	if($mySQLi->connect_errno){
		die('连接失败 ，错误信息是' . $mySQLi->connect_error);	
	}

	$mySQLi->set_charset('utf8');

	//$sql = "INSERT INTO `user1` VALUES (null, '武松', md5('123'), 'ws@sohu.com', unix_timestamp('1980-10-10'), 30)";
	//$sql = "UPDATE `user1` SET name='花和尚' WHERE id=6";
	$sql = "DELETE FROM `user1` WHERE name='武松'";

	//执行添加

	if($mySQLi->query($sql)){
		echo '执行成功';
	}else{
		echo '执行失败'. $mySQLi->error; 
	}

	//如何确定你的操作对记录有影响
	if($mySQLi->affected_rows > 0){
		echo '<br> 操作对记录有影响 影响数是' . $mySQLi->affected_rows;
	}else{
		echo '<br> 操作对记录没有影响';
	}


	//不需释放资源.
	$mySQLi->close();
