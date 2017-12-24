<?php
ob_start();

//下面这些操作都会输出到缓冲区域
//echo 'aaaaa<br>';
//var_dump('helloworld');
//require_once '8.template.php';
include_once '9.template.html';

$content = ob_get_contents();

ob_clean();

var_dump($content);