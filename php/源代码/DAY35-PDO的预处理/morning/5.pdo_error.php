<?php
//通过PDO类实例化PDO对象
//参数1：数据源
//参数2：用户名
//参数3：密码
$dsn = "mysql:host=127.0.0.1;dbname=php_7;port=3306;charset=utf8";
$user = 'root';
$pass = 'root';
$pdo = new PDO($dsn,$user,$pass);

$sql = "SELECT * FRPM user";
$pdo -> query($sql);


//获得错误信息
$result = $pdo -> errorInfo();
$code = $pdo -> errorCode();
echo '<pre>';
var_dump($result);
var_dump($code);