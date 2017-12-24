<?php
    //读取session文件中的商品信息
    session_start();
    
    foreach ($_SESSION['cart'] as $k=>$v){
        echo '您购买了:'.$k.'数量：'.$v.'<br>';
    }