<?php
	header("content-type:text/html;charset=utf-8");
	//mysqli扩展库来操作mysql数据库

	//1. 创建一个对象mysqli对象
	$mySQLi = new MySQLi('localhost', 'root', 'root', 'db100', 3306);

	//2. 确定是否创建成功
	if($mySQLi->connect_errno){
		
		die('连接失败 : 错误信息如下:' . $mySQLi->connect_error);
	}else{
		echo '连接成功!';
	}


	//3. 设置字符集
	$mySQLi->set_charset('utf8');

	//4. 组织sql
	$sql = 'SELECT * FROM `user1`';
	//5. 执行查询
	// $res 就是 代表从一个数据库查询中获取的结果集
	$res = $mySQLi->query($sql);
	echo '<pre>';
	var_dump($res);
	//6. 要取出每一条记录

	//这里我们有四种方法取出记录，推荐使用  $res->fetch_assoc()
	//1. $res->fetch_assoc() 返回的是关联数据
	//while($row = $res->fetch_assoc()){
	//2. $res->fetch_row()返回的是索引数组
//	while($row = $res->fetch_row()){
	//3. $res->fetch_array() 返回的关联数组和索引数组
//	while($row = $res->fetch_array()){
	//4. $res->fetch_object() 返回的是对象
	while($row = $res->fetch_object()){
		//这里，我们就可以输出
		echo '<pre>';
		var_dump($row);
		echo '<br> name = ' . $row->name .  '  age' . $row->age;
	}

	//7.可以释放结果集
	$res->free();
	//8.关闭连接
	$mySQLi->close();






