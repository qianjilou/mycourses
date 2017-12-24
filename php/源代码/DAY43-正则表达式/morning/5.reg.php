<?php
//1. 定义规则
$reg = '/red|green|blue/';  // | 表示或者

//2. 运来一车沙子
$str = "blue";

//3. 开始筛选
preg_match($reg, $str,$match);
echo '<pre>';
var_dump($match);