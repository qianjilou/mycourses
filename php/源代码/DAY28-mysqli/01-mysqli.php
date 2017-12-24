<?php
	header('content-type:text/html;charset=utf-8');
	//使用mysqli扩展对mysql进行crud操作.

	//步骤1
	/**
	创建一张测试表
	CREATE TABLE `user3`(
	id int unsigned primary key auto_increment,
	name varchar(64) not null default '',
	pwd char(32) not null default '',
	email varchar(64) unique not null,
	birthday date not null
	)charset=utf8 engine=MyISAM;

	INSERT INTO `user3` VALUES(null, '张三', md5('abc'), 'zs@sohu.com', current_date());

	INSERT INTO `user3` VALUES(null, '李四', md5('abc'), 'ls@sohu.com', '2001-12-12');

	*/

	//步骤2
	//在php.ini 文件中，打开我们的 php_mysqli.dll扩展
	/*
	; 打开, 重启apache 
	extension=php_mysqli.dll
	*/

	//步骤3, 具体的操作

	//1. 创建一个 对象
	/**
		
		@功能 得到一个连接到mysql数据库的连接 ,代表PHP和Mysql数据库之间的一个连接
		@param string localhost 主机
		@param string root 用户名
		@param string 123 密码
		@param string itbull 数据库
		@param int 3306 端口号
		
	*/
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
	//3.拼接sql语句.
	$sql = 'SELECT * FROM `user3`';
	//4.执行sql语句
	//$res 是 mysqli_result 的对象
	$res = $mySQLi->query($sql);

	//5.显示数据的时候,使用$res 来循环的取出
	//方式1: 使用 fetch_assoc() , 推荐大家使用第一种
	while($row = $res->fetch_assoc()){
		
		echo '<pre>';
		var_dump($row);

	}

	echo '<br>-------------------------------------';
	//方式2: 使用 fetch_row(); 返回的索引数组
	//将结果指向，设置为0, 相当于放到结果集最前面
	$res->data_seek(0);
	while($row = $res->fetch_row()){
		echo '<pre>';
		var_dump($row);
	}

	echo '<br>-------------------------------------';
	//方式3: 使用 fetch_array(); 返回的索引数组+关联数组
	//将结果指向，设置为0, 相当于放到结果集最前面
	$res->data_seek(0);
	while($row = $res->fetch_array()){
		echo '<pre>';
		var_dump($row);
	}

	echo '<br>-------------------------------------';
	//方式4: 使用 fetch_object(); 返回的对象
	//将结果指向，设置为0, 相当于放到结果集最前面
	$res->data_seek(0);
	while($row = $res->fetch_object()){
		echo '<pre>';
		var_dump($row);
		echo '<br> 电子邮件 = ' . $row->email; 
	}




	//6.关闭相关资源, 如果你不释放，系统也会自动释放.
	//先释放结果集
	$res->free();
	//关闭连接
	$mySQLi->close();



	
