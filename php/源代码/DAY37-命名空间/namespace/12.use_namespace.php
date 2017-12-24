<?php
namespace itbull\php;
require_once '9.fullprefix_namespace.php';
//导入类
use itbull\web\Beauty;
//导入函数
use function itbull\web\myfunc;
//导入常量
use const itbull\web\ROOT;

//使用时导入的类：
new Beauty();
//使用导入的函数
myfunc();

//使用导入的常量
echo ROOT;
