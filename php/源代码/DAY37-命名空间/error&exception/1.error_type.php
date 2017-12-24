<?php
ini_set('error_log', 'D:/tnwamp/php/errors/error.log');
ini_set('display_errors','Off');
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING & ~E_DEPRECATED);
//ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_WARNING & ~E_DEPRECATED);
//notice错误
echo $name;
echo 'aaa<br>';

error_log('这是测试的信息');

//warning警告
gettype();
echo 'bbb<br>';

//fatal致命错误
//getmoney();
//echo 'ccc<br>';
var_dump('hello');

mysql_connect('localhost','root','root');