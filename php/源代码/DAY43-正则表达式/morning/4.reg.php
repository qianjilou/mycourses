<?php
//1. 定义规则
$reg = '/./';   //除了换行符之外的任意一个字符
$reg = '/.+/';  //+用来约束数量，表示至少一个（默认是贪婪模式，尽可能多的匹配）

//2. 运来一车沙子
$str = '!bcd\r\n1234';  //  \r  enter回车， \n  line换行
$str = '!bcd
1234';
//$str = "!bcd\n1234";  //除了换行符 \n 之外的任意一个字符
//3. 开始筛选
preg_match($reg, $str,$match);
echo '<pre>';
var_dump($match);