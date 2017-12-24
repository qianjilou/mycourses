<?php
date_default_timezone_set('PRC');
//加载smarty的核心类文件
require_once 'smarty/Smarty.class.php';
$smarty = new Smarty();

//$smarty -> clearCache('1.smarty.html');
//设置模板文件保存的目录
$smarty -> setTemplateDir('tpl');
//设置编译文件保存的目录
$smarty -> setCompileDir('tpl_c');

//修改定界符
$smarty -> left_delimiter = '<{';
$smarty -> right_delimiter = '}>';

$smarty -> display('1.smarty.html');