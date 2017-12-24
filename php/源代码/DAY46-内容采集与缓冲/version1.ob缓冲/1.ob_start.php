<?php
//开启ob缓冲
ob_start();
//先输出到缓冲区域
echo "helloworld";

//清空缓冲区域的内容
ob_clean();
