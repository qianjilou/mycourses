<?php
namespace itbull\php;

class Beauty
{
    public function __construct()
    {
        echo 'itbull\php';
    }
}
//该Beauty类前面没有任何空间修饰，就属于非限定名称
//这种情况就会当前空间找Beauty类
new Beauty();