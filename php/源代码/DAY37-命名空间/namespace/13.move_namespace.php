<?php
namespace itbull\php;
require_once '9.fullprefix_namespace.php';

//动态语言特性：可以将空间保存到变量里面
$className = 'itbull\web\Beauty';       //限定名称
//$className = '\itbull\web\Beauty';      //完全限定名称

//使用的时候：
new $className;