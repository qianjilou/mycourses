<?php
	header("content-type:text/html;charset=utf-8");
	//mysqli面向过程

	//1. 创建一个连接
	$mysqli = mysqli_connect('localhost', 'root', 'root', 'db100', 3306);

	//2. 确定是否创建成功
	if(mysqli_connect_errno()){
		
		die('连接失败 : 错误信息如下:' . mysqli_connect_error());
	}else{
		echo '连接成功!';
	}

	//3. 设置字符集
	mysqli_set_charset($mysqli, 'utf8');

	//4. 组织sql
	$sql = 'SELECT * FROM `user1` WHERE id > 3';
	//5. 执行查询
	// $res 就是 代表从一个数据库查询中获取的结果集
	$res = mysqli_query($mysqli, $sql);
	
	//6. 要取出每一条记录

	
	while($row = mysqli_fetch_assoc($res)){
	
		//这里，我们就可以输出
		echo '<pre>';
		var_dump($row);
	}

	//7.可以释放结果集
	mysqli_free_result($res);
	//8.关闭连接
	mysqli_close($mysqli);