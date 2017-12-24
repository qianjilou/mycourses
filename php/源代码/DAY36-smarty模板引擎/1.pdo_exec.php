<?php
//实例化pdo对象
$dsn = "mysql:host=127.0.0.1;dbname=php_7;port=3306;charset=utf8";
$user = 'root';
$pass = 'root';
$pdo = new PDO($dsn,$user,$pass);


//更新一条数据
$sql = "UPDATE user SET name='liuneng' WHERE id=10";
$result = $pdo -> exec($sql);
echo '<pre>';
var_dump($result);
