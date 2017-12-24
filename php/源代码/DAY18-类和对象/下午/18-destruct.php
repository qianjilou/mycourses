<?php
	header('content-type:text/html;charset=utf-8');

	//析构函数的最佳实践-及时的释放数据链接

	//用来链接和操作数据库的 
	class DAOMySQL{
		
		public $mysql_link;

		//构造函数
		public function __construct($host, $user, $pwd){
			
			$this->mysql_link = @mysql_connect($host, $user, $pwd);
		}

		//析构函数
		public function __destruct(){
			echo '<br> 析构函数被调用..';
			echo '<br> 这里我们关闭我们的链接';
			mysql_close($this->mysql_link);

		}
	}

	$dao = new DAOMySQL('localhost', 'root', 'root');

	var_dump($dao->mysql_link);

	mysql_select_db('itbull');
	$sql = 'SELECT * FROM `student`';
	$res = @mysql_query($sql, $dao->mysql_link);

	while($row = mysql_fetch_assoc($res)){
		echo '<pre>';
		var_dump($row);
	}

	$dao = null;

	echo '<br> ----------------------<br>';
	$sql = 'SELECT * FROM `student`';
	$res = @mysql_query($sql);

	while($row = mysql_fetch_assoc($res)){
		echo '<pre>';
		var_dump($row);
	}

	//....
	//....




	//...

	echo '<br> end 结束';