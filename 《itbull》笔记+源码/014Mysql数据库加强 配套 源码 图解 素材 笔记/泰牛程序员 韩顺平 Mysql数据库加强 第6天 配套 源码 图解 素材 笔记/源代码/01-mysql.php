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
	$sql = 'SELECT * FROM `user1`';
	//执行sql
	//如果是 dml 语句，mysql_query返回bool
	//如果是 select 语句，返回一个 表示resource 标识符
	if($res = mysql_query($sql)){
		
		//说明执行成功!
		//循环遍历取出结果
		//这里 mysql_fetch_assoc 取回的是关联数组
	
		//在mysql扩展中，取出数据记录使用的就是  mysql_fetch_assoc
		while($row = mysql_fetch_assoc($res)){
		// mysql_fetch_array($res) 返回了关联数组，同时返回索引数组
//		while($row = mysql_fetch_array($res)){
		// mysql_fetch_row($res)返回索引数组
//		while($row = mysql_fetch_row($res)){
		
//		while($row = mysql_fetch_object($res)){
			echo '<pre>';
			var_dump($row);
//			echo '<br> id = ' . $row[0] . '  id =' . $row['id'];
			echo 'email =' . $row->email;
		}
	}
	//先释放结果
	//关于结果集的释放一般这样处理，尽量早点释放这个结果集。
	//如果你不释放，在php这个脚本执行完毕后，也会释放，但是有延时.
	mysql_free_result($res);
	//关闭连接
	//关于mysql 连接 $con 的关闭的原则，一般来说，我们让系统帮我们关闭.
	//why ? 因为可能在这个php页面中，还有可能继续操作mysql, 因此我们让系统更好
	mysql_close($con);

	//....  操作数据库..























