<?php
//1. 定义一个字符串
$str = 'helloworld,hellochina';

//2. 
$reg = '/hello\w+/'; //筛选helloworld
//需求：筛选出hellochina,匹配到hello之后，向前踩踩点，找到后面是china的
$reg = '/hello(?=china)/';  //后面是china的hello,由于是修饰词，不匹配任意字符
$reg = '/hello(?=china)\w+/'; 


//3. 开始匹配
preg_match($reg, $str,$match);
echo '<pre>';
var_dump($match);