<?php
//1. 定义一个字符串
$str = 'zhouweiguo,zhengweiguo';

//2. 筛选zhouweiguo
$reg = '/\w+(?<=zhou)weiguo/';   //(?<=zhou)修饰词，前面是zhou的
preg_match($reg, $str,$result);

//3. 定义一个字符串
$str = 'coming quick,going quick';
$reg = '/\w+(?=ing)\w+/';
preg_match_all($reg, $str,$result);

echo '<pre>';
var_dump($result);  
