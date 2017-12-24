<?php
//1. 定义规则
$reg = '/./u';  //约束前面的规则，在筛选之前先将内容进行utf8转码

//utf8转码之后的中文的范围：转码后的第一个中文\x{4e00}   转码后的最后一个中文\x{9fa5}
$reg = '/[\x{4e00}-\x{9fa5}]/u';


//2. 运来一车沙子
$str = '我爱你中国';

//3. 开始筛选
preg_match($reg, $str,$match);
echo '<pre>';
var_dump($match);