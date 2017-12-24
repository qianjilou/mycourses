<?php
//1. 定义规则
$reg = '/[a-z]/';   //表示小写的a到小写的z之间的任意一个字符
$reg = '/[abc]/';   //表示筛选的是abc三个字母中的任意一个
$reg = '/[^abc]/';  //中括号里面的^表示非的意思，除了

//2. 运来一车沙子
$str = 'abcd1234';

//3. 开始筛选
preg_match($reg, $str,$match);
echo '<pre>';
var_dump($match);