<?php
//添加商品的操作
session_start();
if(!isset($_SESSION['user'])){
    //没有设置user这个session数据,非法登录
    echo '非法访问，小心我告你';
    header("Refresh:3;url=login.php");
    die;
}
echo '添加商品';
