<?php
//web空间
namespace web;
class Beauty
{
    public function __construct()
    {
        echo '2.php';
    }
}
function myfunc()
{
    echo 'myfunc2';
}

//const: php5.3之后使用const在类外面定义常量，而且const定义常量效率比define快的多
const ROOT = '2.php';