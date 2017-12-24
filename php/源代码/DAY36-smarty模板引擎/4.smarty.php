<?php
date_default_timezone_set('PRC');
//加载smarty的核心类文件
require_once 'smarty/Smarty.class.php';
$smarty = new Smarty();

//告诉smarty去哪里读取配置文件
$smarty -> setConfigDir('config');

//定义常量
define('ROOT', 'http://www.itbull.cn');

//真实的数据
$name = '习大大';
$true_name = '习近平';

//将真实数据分配一下，并显示即可生成编译文件
//参数1：html模板中使用的变量的名字（占位符的名字）
//参数2：真实的数据
//就会生成一个编译文件，会使用真实的数据代替模板中的占位符
$smarty -> assign('name',$name);
$smarty -> display('templates/3.smarty_inner.html');