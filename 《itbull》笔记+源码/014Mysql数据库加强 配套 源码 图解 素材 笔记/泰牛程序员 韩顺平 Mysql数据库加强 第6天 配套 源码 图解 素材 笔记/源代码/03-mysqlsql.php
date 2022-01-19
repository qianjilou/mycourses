<?php
	header("content-type:text/html;charset=utf-8");
	//使用mysql 扩展，发送其它的sql 语句(drop create alter...)

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

	$sql = 'DROP TABLE `exam`';

	if(mysql_query($sql)){
		echo '操作成功';
	}else{
		echo '操作失败' . mysql_error();
	}