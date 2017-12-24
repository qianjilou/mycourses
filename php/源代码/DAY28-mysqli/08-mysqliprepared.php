<?php
	header('content-type:text/html;charset=utf-8');
	//演示预处理防止sql的案例

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


	//3.组织sql语句
	$sql = "SELECT id,name,pwd FROM `users` WHERE id = ? and pwd = ?";

	$pre_sql = $mySQLi->prepare($sql);
	//绑定?值
	$id = 100;
	$pwd = "abc1' or 1='1";
	$pre_sql->bind_param('is', $id, $pwd);

	//绑定结果, 因为bind_result 是引用传递，因此变量名和后面取的时候一样就可以了.
	$pre_sql->bind_result($my_id, $myName, $myPwd);
	if($pre_sql->execute()){
		echo '<br>执行ok';
		if($pre_sql->fetch()){
			echo '<br> --' . $my_id. ' -- ' . $myName . ' -- ' . $myPwd;  
		}	

	}else{
		echo '<br> 预处理查询失败' . $mySQLi->error;
	}

	//依次是否资源
	$pre_sql->free_result();
	$pre_sql->close();
	$mySQLi->close();
