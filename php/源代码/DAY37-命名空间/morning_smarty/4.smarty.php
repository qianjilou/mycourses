<?php
date_default_timezone_set('PRC');
//加载smarty的核心类文件
require_once 'smarty/Smarty.class.php';
$smarty = new Smarty();

//开启缓存
$smarty -> caching = true;
$smarty -> setCacheDir('cache');
$smarty -> cache_lifetime = 60;

$id = isset($_GET['id'])?$_GET['id']:1;

$smarty -> display('templates/1.smarty.html');