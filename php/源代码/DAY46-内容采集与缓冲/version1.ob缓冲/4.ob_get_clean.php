<?php
//开启ob缓冲
ob_start();
//先输出到缓冲区域
echo "helloworld";

//ob_clean(); //直接清空缓冲区域的内容
$result = ob_get_clean(); //将清空的缓冲区域的内容返回
var_dump($result);


