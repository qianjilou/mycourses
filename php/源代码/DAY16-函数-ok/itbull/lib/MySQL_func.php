<?php 
//MySQL函数操作库
/*
 * @param 链接数据库
 * @param $host string 数据库主机的地址
 * @param $root string 链接数据库用户名
 * @param $pass string 链接数据库密码，可以为空
 * @param $charset string 设置链接的字符集
 * @param $dbname string 选择的数据库
 * @return $link 链接数据库失败信息
 */
function mysql_link($host,$root,$pass='',$charset,$dbname){
	$link = @mysql_connect($host,$root,$pass) or die('链接数据库失败：'.mysql_errno() . mysql_error());
	mysql_query('set names' . $charset);
	mysql_select_db($dbname);   //一个网站一个库，可以有多个表
}

/* select * from 表名;
 * @param 查询所有数据
 * @param $table string 表名
 * @return $res array 结果
 */
function select_data($table){
	$sql = "select * from $table";
	$res = mysql_query($sql);
	$arr = res($res);
	return $arr;
}

//解析结果集资源函数
function res($res){
	return mysql_fetch_assoc($res);
}








 ?>