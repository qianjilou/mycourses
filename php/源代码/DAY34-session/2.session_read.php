<?php
    //session_start()，先在服务器创建一个session文件的名字，然后再把该文件名字响应给客户端
    session_start();
    
    //读取session文件的数据
    var_dump($_SESSION['name']);