<?php
date_default_timezone_set('PRC');
//加载smarty的核心类文件
require_once 'smarty/Smarty.class.php';
$smarty = new Smarty();

$smarty -> display('templates/9.extend.html');