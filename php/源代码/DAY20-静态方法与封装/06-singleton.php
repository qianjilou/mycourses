<?php
	header('content-type:text/html;charset=utf-8');
	//单例模式
	
	//这是一个操作数据库的工具类
	class DaoMysql{
	
		//定义需要的属性
		//是一个mysql数据库的连接
		private $mysql_link;
		//$instance 是一个静态属性，表示DaoMysql的一个对象实例 
		private static $instance = null;

		//构造方法
		private function __construct($host, $user, $pwd){
			
			//因为这里我们只连接了一次数据库，因此，就节省了资源
			$this->mysql_link = @mysql_connect($host, $user, $pwd);
		}

		//写一个静态方法，通过这个静态方法来创建对象实例
		public static function getSingleton($host, $user, $pwd){
		
			//通过getSingleton 来创建对象
			//如何控制只能new 一次
			//第一种写法
			/*
			if(self::$instance == null){
				self::$instance = new DaoMysql($host, $user, $pwd);
			}*/

			//第二种写法(使用的比较多，推荐写)
			// instanceof : 是类型运算符，他用于判断某个变量是否是某个类的对象实例
			if(!self::$instance instanceof self){
				//..
				self::$instance = new self($host, $user, $pwd);
			}

			//返回对象

			echo '<pre> self::$instance<br>';
			var_dump(self::$instance);
			return self::$instance;
		}

		//阻止克隆
		private function __clone(){}
	}


	$dao1 = DaoMysql::getSingleton('localhost', 'root', 'root');
	//$dao2 = DaoMysql::getSingleton('localhost', 'root', 'root');
	//$dao3 = clone $dao1;
	
	echo '<pre>';
	var_dump($dao1);

//	$dao1 = new DaoMysql('localhost', 'root', 'root');
//	$dao2 = new DaoMysql('localhost', 'root', 'root');
//	echo '<pre>';
//	var_dump($dao1, $dao2);


	