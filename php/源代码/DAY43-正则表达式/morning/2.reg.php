<?php
//1. 定义规则（找来一把筛子）
$reg = '/\bis\b/';      //两侧是字符边界的is

//2. 运来一车沙子
$str = 'this is a phone';

//3. 进行筛选、替换
//参数1：定义的规则，通过该规则查找的内容
//参数2：将查找到的内容替换成什么
//参数3：在哪个字符串中进行替换
$new_str = preg_replace($reg, 'was', $str);
var_dump($new_str);