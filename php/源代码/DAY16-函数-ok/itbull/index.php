<?php
//入口文件
//引入配置文件
require_once './config/conn.php';

//调用数据库函数库来获取数据
require_once LIB_ROOT . 'MySQL_func.php';
//var_dump($link_mysql_info);
//调用链接函数
mysql_link($link_mysql_info['host'],$link_mysql_info['root'],$link_mysql_info['pass'],$link_mysql_info['charset'],$link_mysql_info['dbname']);

//可以调用获取所有数据的函数
$arr = select_data('php07_student');
var_dump($arr);
/*
array (size=5)
  'host' => string 'localhost' (length=9)
  'root' => string 'root' (length=4)
  'pass' => string '' (length=0)
  'charset' => string 'utf8' (length=4)
  'dbname' => string 'php07' (length=5)
 */

//引入首页的模板
require_once TEMPS_ROOT_HOME . 'index.html';
?>