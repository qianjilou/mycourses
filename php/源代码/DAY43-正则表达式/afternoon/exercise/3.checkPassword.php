<?php
//1. 先定义一个纯字母、纯数字的规则
$reg1 = '/^[a-zA-Z]{6,20}$/'; //纯字母
$reg2 = '/^\d{6,20}$/';       //纯数字
$reg3 = '/^[a-zA-Z0-9]{6,20}$/';    //字母、数字的组合
$reg4 = '/^[a-zA-Z0-9~`!@#\$%\^&\*\(\)\-_\+=\{\}\[\]\|\\;:\'\"<>,\.\?\/]{6,20}$/';

//获得用户输入的密码
$password = 'admin123*!';

preg_match($reg1, $password,$result1);
preg_match($reg2, $password,$result2);
preg_match($reg3, $password,$result3);
preg_match($reg4, $password,$result4);

if($result1 || $result2){
    //说明是纯字母或纯数字的
    echo '密码太简单了';
}elseif ($result3){
    //说明是字母、数字的组合
    echo '密码安全性一般';
}elseif($result4){
    //说明是特殊符号、字母、数字的组合
    echo '密码杠杠滴';
}else{
    echo '密码不符合规则';
}

