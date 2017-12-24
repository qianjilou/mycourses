<?php
//开启ob缓冲
ob_start();
//先输出到缓冲区域
echo "helloworld";

//ob_flush();     //直接把缓冲区域的内容刷出去、输出
$result = ob_get_flush(); //返回缓冲区域的内容而不是直接输出

//清空缓冲区域的内容
ob_clean();

var_dump($result);
