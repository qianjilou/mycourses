<?php
date_default_timezone_set('PRC');
//加载smarty的核心类文件
require_once 'smarty/Smarty.class.php';
$smarty = new Smarty();

//cookie数据
setcookie('is_login','on',time()+60);
//session数据
session_start();
$_SESSION['cart'] = '笑傲江湖';

$str = 'hello world';
$smarty -> assign('str',$str);
$smarty -> assign('number',null);

$smarty -> display('templates/5.smarty_modifier.html');