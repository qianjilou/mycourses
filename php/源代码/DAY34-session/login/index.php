<?php
//程序的主页面，只有登录成功之后才能进入
session_start();
if(!isset($_SESSION['user'])){
    //没有设置user这个session数据,非法登录
    echo '非法访问，小心我告你';
    header("Refresh:3;url=login.php");
    die;
}
//如果执行到这里，说明没有非法登录，正确登录
echo '欢迎登录到后台首页';