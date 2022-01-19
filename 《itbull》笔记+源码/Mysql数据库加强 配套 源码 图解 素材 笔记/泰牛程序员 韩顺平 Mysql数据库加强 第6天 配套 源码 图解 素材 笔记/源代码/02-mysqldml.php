<?php
	header("content-type:text/html;charset=utf-8");
	//这里演示一个使用mysql扩展操作数据库的流程

	//得到连接
	$con = @mysql_connect('localhost', 'root', 'root');
	if(!$con){
		die('连接失败，错误信息' . mysql_error());
	}

	//先选择数据库
	mysql_select_db('db100');
	//设置字符集
	mysql_set_charset('utf8');
	//创建sql语句
	
	//添加操作
	//$sql = "INSERT INTO `user1` VALUES(6,'宋江', md5('abc'), 'sj@sohu.com', unix_timestamp('1990-11-10'), 20)";
	//删除操作
	//$sql = "DELETE FROM `user1` WHERE id=5";
	//修改操作
	$sql = "UPDATE `user1` SET name='林冲' WHERE id=6";
	
	//执行sql
	if(mysql_query($sql)){
		echo '操作成功';
	}else{
		echo '操作失败' . mysql_error();
		exit;
	}

	//这里我们可能需要去判断是否对记录数有影响
	if(mysql_affected_rows($con) > 0){
		echo '操作对记录有影响';
	}else{
		echo '操作没有对记录影响';
	}
	//dml 不需要释放资源