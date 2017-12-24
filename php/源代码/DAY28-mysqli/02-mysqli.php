<?php
	header('content-type:text/html;charset=utf-8');
	//演示使用mysqli完成dml
	$mySQLi = new MySQLi('localhost', 'root', '123', 'itbull', 3306);

	//判断是否连接成功
	//Returns the error code from last connect call
	//如果没有错误，返回0,如果有错误，返回对应错误号
	if($mySQLi->connect_errno){
		
		//connect_error 属性表示错误信息
		die('连接错误，错误信息是' . $mySQLi->connect_error);
	}else{
		echo '<br> 连接ok!';
	}
	
	//2.设置字符集
	$mySQLi->set_charset('utf8');

	//3. 拼接sql
	$sql1 = "INSERT INTO `user3` VALUES(null, '王五',md5('abc'), 'www@sohu.com', '2011-11-11')";

	//$sql1 = "UPDATE `user3` SET email='abc@sohu.com' WHERE id = 3";

	//$sql1 = "DELETE FROM `user3` WHERE id=2";

	//如果执行的是一个dml语句，成功返回 true, 失败返回false
	if($mySQLi->query($sql1)){
		echo '<br> 执行成功';
	}else{
		echo '<br> 执行失败 sql语句是' . $sql1;
		echo '<br> 失败的原因是 ' . $mySQLi->error;
		exit;
	}

	//判断一下是否真正的影响我们表
	if($mySQLi->affected_rows > 0){
		echo '<br> 对表，真正进行改变';
	}else{
		echo '<br> 没有对表造成任何影响';
	}

	//如何获取到刚刚添加的数据的哪个自增长的id值
	echo '<br> id = ' . $mySQLi->insert_id;


	