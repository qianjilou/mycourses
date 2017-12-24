<?php
//实例化pdo对象
$dsn = "mysql:host=127.0.0.1;dbname=php_7;port=3306;charset=utf8";
$user = 'root';
$pass = 'root';
$pdo = new PDO($dsn,$user,$pass);

//执行删除操作,结果会导致把所有的数据都删除
//$sql = "DELETE FROM user WHERE id=3 || 1=1";
//分析原因：id的值把整个sql语句分割成2部分：
//$sql = "DELETE FROM user WHERE id=3";
//$sql = "DELETE FROM user WHERE 1=1";

//预处理：
//1. 先使用占位符代替值部分(占位符：?   :id)
$sql = "DELETE FROM user WHERE id=?";
//2. 固定sql语句的结构,使用pdo对象的prepare方法固定，返回PDOStatement对象
$pdo_statement = $pdo -> prepare($sql);
//3. 使用真实的值替换占位符(这样绑定的：1表示第一个?,2表示第2个?....),
//由于之前已经固定了sql的结构，后期不会因为值而变化
$pdo_statement -> bindValue(1, '5 || 1=1');
//4. 执行
$pdo_statement -> execute();
echo '删除成功';

