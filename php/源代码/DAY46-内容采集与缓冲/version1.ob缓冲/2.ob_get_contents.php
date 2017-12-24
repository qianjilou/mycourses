<?php
//开启ob缓冲
ob_start();
//先输出到缓冲区域
echo "helloworld";

//读取到缓冲区域的内容，并保存到变量中
$result = ob_get_contents();
$result = ob_get_length();

//清空缓冲区域的内容
ob_clean();

var_dump($result);
