<?php
//引入DAOMySQLiclass.php类
require_once 'DAOMySQLi.class.php';

$option = array(
    'host'      =>  '127.0.0.1',
    'user'      =>  'root',
    'pwd'       =>  'root',
    'port'      =>  3306,
    'db'        =>  'php_7',
    'charset'   =>  'utf8'
);
$dao = DAOMySQLi::getSingleton($option);

//拼接sql语句查询所有的商品信息
$sql = "SELECT * FROM goods";
$goods_list = $dao -> fetchAll($sql);

//加载商品列表的模板（模子）
require_once '2.template.php';