<?php
//先设置session文件的存储位置
ini_set('session.save_path', 'D:/tmp');
session_start();    //session_start的时候，才会创建session文件
$_SESSION['name'] = 'zhangsan';
