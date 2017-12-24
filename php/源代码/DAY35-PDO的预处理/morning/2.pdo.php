<?php
//通过PDO类实例化PDO对象
//参数1：数据源
//参数2：用户名
//参数3：密码
$dsn = "mysql:host=127.0.0.1;dbname=php_7;port=3306;charset=utf8";
$user = 'root';
$pass = 'root';
$pdo = new PDO($dsn,$user,$pass);

//增加一条记录：
//$sql = "INSERT INTO user VALUES(null,'admin','admin123')";
//$row = $pdo -> exec($sql);
// var_dump($row);

//修改一条记录
$sql = "UPDATE user SET name='zhangsan' WHERE id=1";
$row = $pdo -> exec($sql);
var_dump($row);
//exec()   excute执行     CEO首席执行官：chief  excute  offical

//删除记录
$sql = "DELETE FROM user";
$result = $pdo -> exec($sql);
var_dump($result);

