<?php
$ch = curl_init();

//设置请求的地址
curl_setopt($ch, CURLOPT_URL, $url);


if(!empty($data)){
    //post请求
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
}
//判断是否返回数据
if(is_return === 1){
    //返回数据
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}else{
    //发出get请求
    curl_exec($ch);
    curl_close($ch);
}




