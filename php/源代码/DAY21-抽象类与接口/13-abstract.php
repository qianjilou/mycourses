<?php
	header("content-type:text/html;charset=utf-8");
	//项目经理写了一个DB类
	abstract class DB{
		//连接数据
		abstract  protected  function   connect(array $arr);
		abstract  protected  function   query(array $arr);
	}

	class MySQLDB extends DB{
		
		protected  function connect(array $arr){
			echo '连接mysql的操作';
		}
		protected  function  query(array $arr){
			echo '查询mysql的操作';
		}
	}

	class OracleDB extends DB{

		protected  function connect(array $arr){
			echo '连接oracle的操作';
		}
		protected  function  query(array $arr){
			echo '查询oracle的操作';
		}
	}