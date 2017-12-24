<?php
//实例化pdo对象
$dsn = "mysql:host=127.0.0.1;dbname=php_7;port=3306;charset=utf8";
$user = 'root';
$pass = 'root';
$pdo = new PDO($dsn,$user,$pass);

//use表不存在
$sql = "SELECT * FROM use";

$pdo_statement = $pdo -> prepare($sql);
//先执行，才能获得sql语句里面的错误信息
$pdo_statement -> execute();

$result = $pdo_statement -> errorInfo();

echo '<pre>';
var_dump($result);