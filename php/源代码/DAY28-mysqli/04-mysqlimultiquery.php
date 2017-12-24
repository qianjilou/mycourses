<?php
	header('content-type:text/html;charset=utf-8');
	//批量添加 --》 提高效率

	//获取$mySQLi对象
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

	//3.拼接sqls语句
	$sqls = "INSERT INTO `account` VALUES(900, '宋江', 345);";
	$sqls .= "INSERT INTO `account` VALUES(1000, '吴用', 1300);";
	$sqls .= "INSERTv INTO `account` VALUES(11000, '卢俊义', 400);";
	$sqls .= "UPDATE `account` SET money = 2 WHERE id = 100";

	//4. 执行
	if($mySQLi->multi_query($sqls)){
		echo '<br> 添加成功!';
	}else{
		echo '<br> 添加失败 , 错误原因 ' . $mySQLi->error;
		exit;
	}