<?php
    //1. 初始化curl，返回资源
    $curl = curl_init();    
    //2. 设置curl工具请求的服务器文件地址
    //参数1：curl资源
    //参数2：设置的请求的选项
    //参数3：请求选项的值
    //设置将结果返回而不是直接显示
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    
    //跳过百度的https证书的验证
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);//不验证
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);//不验证
    curl_setopt($curl, CURLOPT_HEADER, 0);      //不返回header头信息
    
    curl_setopt($curl, CURLOPT_URL, 'https://www.baidu.com/index.php');
    
    //3. 发出请求,接收返回的数据
    $result = curl_exec($curl);
    echo '<pre>';
    var_dump($result);
    
    //4. 关闭curl资源
    curl_close($curl);
