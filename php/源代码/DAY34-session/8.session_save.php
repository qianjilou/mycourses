<?php
ini_set('session.save_path', 'D:/tmp');
session_start();

//脚本运行周期，只是对$_SESSION这个数组进行操作
//这些数据是在内存中运行的
$_SESSION['name'] = 'lisi';
$_SESSION['age'] = 30;

//遇到session_destroy（）就会把session文件删除
session_destroy();

echo '<pre>';
var_dump($_SESSION);