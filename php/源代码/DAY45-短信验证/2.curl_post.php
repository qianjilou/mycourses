<?php
    //1. 初始化curl，返回资源
    $ch = curl_init();
    
    //2. 设置选项，设置请求的服务器地址
    //开启post提交
    curl_setopt($ch, CURLOPT_POST, true);
    //设置提交什么数据过去
    $data = array('order'=>'ESC1000012');
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    
    curl_setopt($ch, CURLOPT_URL, 'http://localhost/0420curl/3.post_handle.php');
    
    //3. 发出请求
    curl_exec($ch);
    
    //4. 关闭资源
    curl_close($ch);
    
    