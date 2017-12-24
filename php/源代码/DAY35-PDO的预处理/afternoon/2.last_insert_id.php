<?php
//实例化pdo对象
$dsn = "mysql:host=127.0.0.0;dbname=php_7;port=3306;charset=utf8";
$user = 'root';
$pass = 'root';
$pdo = new PDO($dsn,$user,$pass);

//插入一条数据
$sql = "INSERT INTO user VALUES(NULL,'wangwu','admin123')";
$pdo -> exec($sql);
//获得刚刚插入的这条记录的主键的值
$id = $pdo -> lastInsertId();
var_dump($id);