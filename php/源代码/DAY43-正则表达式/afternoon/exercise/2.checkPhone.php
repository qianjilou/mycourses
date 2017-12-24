<?php
//1. 定义手机号码的规则
$reg = '/^1[34578]\d{9}$/';

$phone = 'a13109876543';

preg_match($reg, $phone,$result);

if($result){
   echo '该号码可以使用'; 
}else{
    echo '请输入正确的手机号码';
}
    
