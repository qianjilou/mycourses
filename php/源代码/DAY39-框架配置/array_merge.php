<?php
$config1 = array(
    'host'  =>  'localhost'
);

$config2 = array(
    //数据库的配置信息
    'host'              =>  '127.0.0.1',
    'user'              =>  'root',
    'pass'              =>  'root',
    'dbname'            =>  'php_7',
    'port'              =>  3306,
    'charset'           =>  'utf8'
);
//后面的数组的优先级比前面的高
$config3 = array_merge($config2,$config1);
echo '<pre>';
var_dump($config3);