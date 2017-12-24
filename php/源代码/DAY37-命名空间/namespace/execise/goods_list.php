<?php
use itbull\pdo\DAOPDO;

date_default_timezone_set('PRC');

//从数据库查询商品的信息
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
//查询所有商品
$sql = "SELECT * FROM goods";
$goods = $dao -> fetchAll($sql);
echo '<pre>';
var_dump($goods);