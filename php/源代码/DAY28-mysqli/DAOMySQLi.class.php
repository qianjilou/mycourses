<?php
	
	//DAOMySQLI.class.php

	//完成对mysql数据库操作,单例模式
	
	//开发类
	//1. 定类名
	//2. 定成员属性
	//3. 定成员方法[查询，dml操作]

	final class DAOMySQLi{
		
		// 将成员属性以 _开头是一种命名风格. 老外比较喜欢.
		//主机名
		private $_host;
		private $_user;
		private $_pwd;
		private $_dbname;
		private $_port;
		private $_charset;

		//因为我们做成单例
		// $_instance : 表示DAOMySQLi 的一个对象实例
		private static $_instance;

		// 有个mysqli连接[对象]
		private $_mySQLi;
		
		//定构造方法.
		//option : 选项
		private function __construct(array $option){
			
			//初识化数据库属性
			$this->_initOption($option);

			//初始化_mySQLi属性
			$this->_initMySQLi();

		}

		private function _initMySQLi(){
			
			//初始化我们的 _mySQLi 
			$this->_mySQLi = new MySQLi($this->_host, $this->_user, $this->_pwd, $this->_dbname, $this->_port);

			if($this->_mySQLi->connect_errno){
				
				die('连接失败 , 错误信息时候' . $this->_mySQLi->connect_error);
				}

			//设置字符集
			$this->_mySQLi->set_charset($this->_charset);

		}

		//一个函数，用于初始化连接数据库选项
		private function _initOption(array $option){
			
			//验证数据
			$this->_host = isset($option['host'])? $option['host'] : '';
			$this->_user = isset($option['user'])? $option['user'] : '';
			$this->_pwd = isset($option['pwd'])? $option['pwd'] : '';
			$this->_dbname = isset($option['dbname'])? $option['dbname'] : '';
			$this->_port = isset($option['port'])? $option['port'] : '';
			$this->_charset = isset($option['charset'])? $option['charset'] : '';
			
			if($this->_host == '' || $this->_user == '' || $this->_pwd == '' || $this->_dbname == '' || $this->_port == '' || $this->_charset == ''){
				die('参数传入有误!');
			}

		}

		//定义一个静态方法 getSingleton..
		public static function getSingleton(array $option){

			//判断是否已经有对象实例
			if(!self::$_instance instanceof self){
				//创建一个对象
				self::$_instance = new self($option);
			}
			return self::$_instance;
		}

		//防止克隆
		private function __clone(){}

		//编写一个成员方法，完成对数据表的查询
		public function fetchAll($sql){
			
			//定义一个空数组[封装数据]
			$arr = array();

			if($res = $this->_mySQLi->query($sql)){
				
				//{把 $res 对象返回给调用者
				//问题1. 一般情况下，我们程序员希望将$res对象尽快释放.
				//解决思路:
				//(1)$res ==数据===>$arr
				while($row = $res->fetch_assoc()){
					$arr[] = $row;
				}
				//(2)释放$res
				$res->free();
				//(3)返回数组
				return $arr;

			}else{
				//失败
				echo '<br> 执行失败 sql语句是' . $sql;
				echo '<br> 失败的原因是 ' . $this->_mySQLi->error;
				exit;
			}
		}

		//编写一个方法，完成对表的dml操作
		public function query($sql){
			
			if($this->_mySQLi->query($sql)){
				
				return true;
			}else{
				//失败
				echo '<br> 执行失败 sql语句是' . $sql;
				echo '<br> 失败的原因是 ' . $this->_mySQLi->error;
				exit;
			}
		}

	}

