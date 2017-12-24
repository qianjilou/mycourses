<?php
//实例化PDO对象
$dsn = "mysql:host=127.0.0.1;dbname=php_7;port=3306;charset=utf8";
$user = 'root';
$pass = 'root';
$pdo = new PDO($dsn,$user,$pass);

//先开启事务
$pdo -> beginTransaction();

//先从宋江的账号上扣3000
$sql = "UPDATE cash SET money=money-3000 WHERE name='宋江'";
$res1 = $pdo -> exec($sql);

//李逵的账号上加 3000
$sql = "UPDATE cash SET money=money+3000 WHERE name='李逵'";
$res2 = $pdo -> exec($sql);

if($res1 && $res2){
    //一组操作都成功则提交
    $pdo -> commit();
}else{
    //有任何一个单元出错则回滚
    $pdo -> rollBack();
}