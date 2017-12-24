<?php
    session_start();
    //写入session数据(数据类型可以是除了资源类型之外的任意数据)
    $_SESSION['name'] = array('zhangsan','lisi');
    $_SESSION['age'] = 30;
    $_SESSION['sex'] = 'female';
    