<?php
//通过PDO类实例化PDO对象
//参数1：数据源
//参数2：用户名
//参数3：密码
$dsn = "mysql:host=127.0.0.1;dbname=php_7;port=3306;charset=utf8";
$user = 'root';
$pass = 'root';
$pdo = new PDO($dsn,$user,$pass);

//查询数据，使用query方法，并没有直接返回所有的数据
//而是返回了预编译的对象，也就是PDOStatement对象
$sql = "SELECT * FROM user";
$pdo_statement = $pdo -> query($sql);

//获取一条数据
$row = $pdo_statement ->fetch(PDO::FETCH_ASSOC);
//获取所有数据
// $row = $pdo_statement -> fetchAll();
//获取一列数据（一个字段的值,参数是字段的索引）
// $row = $pdo_statement -> fetchColumn(0);
echo '<pre>';
var_dump($row);
die;

echo '<pre>';
var_dump($pdo_statement);