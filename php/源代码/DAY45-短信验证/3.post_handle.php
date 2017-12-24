<?php
    //接收2.curl_post.php文件post提交过来的数据
    $order = $_POST['order'];
    
    //将接收的post提交的数据保存到文件中
    file_put_contents('./post.txt', $order);