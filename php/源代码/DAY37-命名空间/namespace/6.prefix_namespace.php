<?php
namespace itbull\php;
require_once '7.prefix_namespace.php';
class Beauty
{
    public function __construct()
    {
        echo 'itbull\php';
    }
}
//需要实例化7.prefix_namespace.php这个文件里面的类
//在当前空间找：itbull\php\web\Beauty
new web\Beauty();
