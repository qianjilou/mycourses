<?php
namespace php\php_7;
function var_dump($var)
{
    echo $var;
}
var_dump('hello<br>');  //使用的是当前空间的函数
\var_dump('hello');     //使用的是全局空间的函数
//如果使用全局空间，使用 \ 表明全局空间


namespace php\php_6;
//后面的代码就属于php_6这个空间
function var_dump($var)
{
    echo $var;
}
var_dump('hello<br>');  //使用的是当前空间的函数
\var_dump('hello');     //使用的是全局空间的函数
