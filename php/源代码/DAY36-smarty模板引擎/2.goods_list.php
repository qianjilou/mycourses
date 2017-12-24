<?php
//php程序员的工作
//查询商品信息
require_once 'DAOPDO.class.php';
$option = array(
    'host'      =>  '127.0.0.1',
    'dbname'    =>  'php_7',
    'user'      =>  'root',
    'pass'      =>  'root',
    'port'      =>  3306,
    'charset'   =>  'utf8'
);
$dao = DAOPDO::getSingleton($option);

//查询所有与商品
$sql = "SELECT * FROM goods";
$goods = $dao -> fetchAll($sql);

require '3.goods_temp.php';