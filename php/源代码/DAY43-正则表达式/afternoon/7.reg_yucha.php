<?php
//1. 定义一个字符串
$str = 'QuestionTopicModel';

//需求：筛选出T、M()
$reg = '/[A-Z]/';   //会把QTM都匹配到
$reg = '/(?<=[a-z])[A-Z]/'; //(?<=)逆向预查，表示后面是大写字母，前面是小写字母的字符


//3. 开始匹配
//preg_match($reg, $str,$match);  //Q

//区别在于：preg_match匹配到结果之后就停止了
//preg_match_all() 匹配到结果先保存，然后接着匹配一直到字符串的结束
preg_match_all($reg, $str,$match);


echo '<pre>';
var_dump($match);