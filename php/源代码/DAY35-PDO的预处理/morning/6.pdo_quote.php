<?php
//通过PDO类实例化PDO对象
//参数1：数据源
//参数2：用户名
//参数3：密码
$dsn = "mysql:host=127.0.0.1;dbname=php_7;port=3306;charset=utf8";
$user = 'root';
$pass = 'root';
$pdo = new PDO($dsn,$user,$pass);

$str = "hello 'zhangsan'";
//对字符串的内容进行转义并包裹
$result = $pdo -> quote($str);

echo '<pre>';
var_dump($result);