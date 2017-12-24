<?php
date_default_timezone_set('PRC');
//加载smarty的核心类文件
require_once 'smarty/Smarty.class.php';
$smarty = new Smarty();

$goods = array(
    array('goods_id'=>1,'goods_name'=>'Nokia N73'),
    array('goods_id'=>2,'goods_name'=>'华为 P10'),
    array('goods_id'=>3,'goods_name'=>'小米6')
);

$smarty -> assign('goods',$goods);
$smarty -> assign('money',6000);

$smarty -> display('templates/7.smarty.html');