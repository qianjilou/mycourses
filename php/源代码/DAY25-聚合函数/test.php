<?php
	header('content-type:text/html;charset=utf-8');
	//操作int 类型的时间戳


	//2. 完成添加任务
	//2.1 连接数据库
	$conn = @mysql_connect('localhost', 'root', 'root');
	if(!$conn){
		echo '<br> 连接失败!';
		exit;
	}
	mysql_select_db('itbull');
	
	
	//2.2 添加方式1

	$sql1 = "INSERT INTO `mes` VALUES(2, '你好北京', unix_timestamp())";

	//2.2 添加方式2
	$time_now = time();
	$sql2 = "INSERT INTO `mes` VALUES(3, '你好南京', $time_now)";

	mysql_query($sql1);
	mysql_query($sql2);

	echo '<br> 添加ok!';

	//=================================================================

	//查询方式1
	$sql3 = "SELECT id, mes, from_unixtime(save_time,'%Y-%m-%d %H:%i:%s') AS save_time FROM `mes`";

	$res = mysql_query($sql3);

	while($row = mysql_fetch_assoc($res)){
		echo '<pre>';
		var_dump($row);
		echo '<br> 时间' . $row["save_time"];
	}

	//查询方式2
	$sql4 = "SELECT id, mes, save_time FROM `mes`";

	$res = mysql_query($sql4);

	while($row = mysql_fetch_assoc($res)){
		echo '<pre>';
		var_dump($row);
		//对取回的时间戳，进行格式转换
		//错误:It is not safe to rely on the system's timezone settings
		//方法1. php.ini 中，设置时区 ;date.timezone = PRC
		//方法2. 直接使用一个函数[推荐]
		date_default_timezone_set('PRC');
		echo '<br> 时间' . date('Y-m-d H:i:s', $row["save_time"]);
	}
	



