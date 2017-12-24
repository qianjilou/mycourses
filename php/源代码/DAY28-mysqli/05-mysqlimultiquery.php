<?php
	header('content-type:text/html;charset=utf-8');
	//批量执行select语句
	
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

	//组织sql语句
	$sqls = "SELECT * FROM `emp`;";
	$sqls .= "SELECT * FROM `account`;";
	$sqls .= "SELECT * FROM `votes`";

	if($mySQLi->multi_query($sqls)){
		
		//把结果取出.
		do{
			//$res 就是一个  mysql_result对象
			$res = $mySQLi->store_result();	
			
			while($row = $res->fetch_assoc()){
				
				foreach($row as $val){
					echo '--' . $val;
				}
				echo '<br>';
			}

			//是否结果
			$res->free();

			//判断还有没有下一个结果集, 该函数只是判断还有没有更多的结果.

			if(!$mySQLi->more_results()){
				break;
			}

		}while($mySQLi->next_result());

	}else{
		echo '<br> 执行失败' . $mySQLi->error;
		exit;
	}