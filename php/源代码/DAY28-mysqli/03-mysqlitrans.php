<?php
	header('content-type:text/html;charset=utf-8');
	// mysqli的事务控制

	
	//连接数据库...
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

	//3. 编写sql
	$sql1 = "UPDATE `account` SET money = money - 1 WHERE id = 100";
	$sql2 = "UPDAT `account` SET money = money + 1 WHERE id = 200";

	//4. 开始事务
	//$mySQLi->begin_transaction();
	$mySQLi->autocommit(false);

	$res1 = $mySQLi->query($sql1);
	$res2 = $mySQLi->query($sql2);

	if($res1 && $res2){
		
		echo '<br> sql语句执行成功, 正式提交';
		$mySQLi->commit();

	}else{
		echo '<br> sql语句有执行失败的, 回滚';
		$mySQLi->rollback();
	}

