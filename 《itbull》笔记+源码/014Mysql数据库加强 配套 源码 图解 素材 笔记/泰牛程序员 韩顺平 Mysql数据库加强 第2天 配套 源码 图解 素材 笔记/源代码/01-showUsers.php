<?php
	header("content-type:text/html;charset=utf-8");
	//显示数据库中的数据
	$con = @mysql_connect('localhost', 'root', 'root');
	if(!$con){
		die('错误信息' . mysql_error());
	}

	//设置编码
	mysql_query('set names utf8');
	//选择数据库
	mysql_select_db('db100');
	//构建sql
	$sql = 'SELECT id,name,salary,resume FROM `users`';
	//执行sql
	$res = mysql_query($sql);
	//显示
	echo "<table border='1px' width='400px'>";
	echo "<tr><th>id号</th><th>名字</th><th>薪水</th><th>介绍</th></tr>";
	while($row = mysql_fetch_assoc($res)){

//		echo '<pre>';
//		var_dump($row);
		echo "<tr><td>{$row['id']}</td><td>{$row['name']}</td><td>{$row['salary']}</td><td>{$row['resume']}</td></tr>";
		
	}
	echo "</table>";

	//引入模板文件 xxx.tpl;
	
	//如果这里你不写这两句话，在页面执行完毕，会由系统自动释放和关闭连接.
	//释放资源
	mysql_free_result($res);
	//关闭连接 
	mysql_close($con);