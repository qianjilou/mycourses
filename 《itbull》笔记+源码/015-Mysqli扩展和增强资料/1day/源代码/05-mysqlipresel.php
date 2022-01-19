<?php
	header("content-type:text/html;charset=utf-8");
	//mysqli预处理技术 (select)

	/*
	执行dql 语句(有结果集返回)
需求: 请使用预处理的方法，查询所有id>5的用户 的id,name,email，(id可能变化
	*/

	$mysqli = new MySQLi('localhost', 'root', 'root', 'db100', 3306);

	if($mysqli->connect_errno){
		
		die('连接失败' . $mysqli->connect_error);
	}

	$mysqli->set_charset('utf8');

	//先写一个sql语句
	$sql = "SELECT id,name,salary FROM `balance` WHERE id > ? and id < ?";

	//得到一个$stmt对象
	$stmt = $mysqli->prepare($sql);
	$id = 5;
	$id2 = 300;
	//绑定
	$stmt->bind_param('ii', $id, $id2);
	//绑定结果集
	$stmt->bind_result($id, $name, $salary);
	//执行
	if($stmt->execute()){
		echo '<br> 预处理查询ok';
		//取出结果
		while($stmt->fetch()){
			echo '<br>';
			echo '--' . $id . '--' . $name . '--' . $salary;
		}

	}else{
		echo '<br> 预处理查询失败' . $stmt->error;
	}

	//释放结果集
	$stmt->free_result();
	//关闭连接
	$stmt->close();
	$mysqli->close();
