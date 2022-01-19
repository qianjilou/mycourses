<?php
	header("content-type:text/html;charset=utf-8");
	//mysqli批量执行select

	//mysqli扩展事务控制

	$mysqli = new MySQLi('localhost', 'root', 'root', 'db100', 3306);

	if($mysqli->connect_errno){
		
		die('连接失败' . $mysqli->connect_error);
	}

	$mysqli->set_charset('utf8');

	/**
	请使用mysqli的mysqi::multi_query() 一次性查询并显示①emp表的empno ename 和 job、 ② balance表中用户id ,和用户名字

	*/

	$sql = "SELECT * FROM `emp`;";
	$sql .= "SELECT id,name FROM `balance`";

	//批量执行select
	if($mysqli->multi_query($sql)){
		
		//开始取出结果
		do{
			//依次取出结果
			//每次只会取出一个结果集[一个结果集可以理解成一个select的结果]
			$res = $mysqli->store_result();
			echo '<br><pre>***********************';
			//var_dump($res);
			
			//这里我们就把每个结果集的数据取出并显示.
			while($row = $res->fetch_assoc()){
				echo '<br>';
				foreach($row  as $val){
					echo '--' . $val; 
				}
			}
			
			//释放使用过的结果集
			$res->free();
			//$mysqli->more_resultes(), 可以检查还有没有
			if(!$mysqli->more_results()){
				break;
			}

		}while($mysqli->next_result());

	}else{
		echo '执行error' . $mysqli->error;
	}

	//关闭连接
	$mysqli->close();
	
