<?php
	header('content-type:text/html;charset=utf-8');
	/**
	使用预处理语句快速入门案例
	执行dml 语句(没有结果集返回)
	需求: 请使用预处理的方式，向数据
	库添加三个用户  

	*/
	//连接数据库，得到$mySQLi对象
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

	//3. 编写添加用户的语句 ?占位符号
	$sql = "INSERT INTO `account` VALUES(?, ?, ?)";
	//$sql = "UPDATE `account` SET money = ? WHERE id = ? ";
	

	//4.代表一个prepared语句
	$pre_sql = $mySQLi->prepare($sql);
	
	//5.给$pre_sql绑定参数
	$id = 60;
	$name = '顺平';
	$money = 56.7;
	/*
		功能: 给预处理语句的? 绑定参数 
		@param isd : 表示i=>int s=>string d=>double 小数
		@param $id, $name, $money 传入值
	*/
	$pre_sql->bind_param('isd', $id, $name, $money);
	if($pre_sql->execute()){
		echo '<br> 执行成功!';
	}else{
		echo '<br> 执行失败' . $mySQLi->error;
	}


	//添加一个用户


	//5.给$pre_sql绑定参数
	$id = 40;
	$name = '顺平100';
	$money = 560.7;
	/*
		功能: 给预处理语句的? 绑定参数 
		@param isd : 表示i=>int s=>string d=>double 小数
		@param $id, $name, $money 传入值
	*/
	$pre_sql->bind_param('isd', $id, $name, $money);
	if($pre_sql->execute()){
		echo '<br> 执行成功!';
	}else{
		echo '<br> 执行失败' . $mySQLi->error;
	}
	
	//是否资源，关闭连接
	$pre_sql->close();
	$mySQLi->close();


	