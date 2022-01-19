<?php
	header("content-type:text/html;charset=utf-8");
	//mysqli增强 预处理技术
	/*
	执行dml 语句(没有结果集返回)
需求: 请使用预处理的方式，向数据
库添加三个用户  balance

	*/

	$mysqli = new MySQLi('localhost', 'root', 'root', 'db100', 3306);

	if($mysqli->connect_errno){
		
		die('连接失败' . $mysqli->connect_error);
	}

	$mysqli->set_charset('utf8');

	//先准备一个sql语句
	$sql = "INSERT INTO `balance` VALUES(?, ?, ?)";

	//得的预处理对象 
	$stmt = $mysqli->prepare($sql);
	echo '<pre>';
	//var_dump($stmt);
	//准备添加数据
	$id = 1000;
	$name = '孙二娘';
	$salary = 45.89;
	//完成绑定
	//bind_param 做一个简单说明
	// 'isd' 表示后面参数的类型 i  : int , s : string  d:double/float
	$stmt->bind_param('isd', $id, $name, $salary);

	//执行
	if($stmt->execute()){
		echo '<br>预处理执行成功';
	}else{
		echo '<br>预处理执行失败' . $stmt->error; 
	}

	//第二个用户
	//准备添加数据
	$id = 2000;
	$name = '张青';
	$salary = 545.89;

	//这里直接执行
	if($stmt->execute()){
		echo '<br>预处理执行成功';
	}else{
		echo '<br>预处理执行失败' . $stmt->error; 
	}


	//关闭连接
	$stmt->close();
	$mysqli->close();

