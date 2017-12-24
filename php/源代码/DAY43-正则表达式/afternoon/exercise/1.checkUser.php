<?php
//1. 用户名的验证规则：6-30位，字母、数字、下划线组合，字母开头
$reg = '/^[a-zA-Z]\w{5,29}$/';

$username = '1234zhang';

preg_match($reg, $username,$result);

if($result){
   echo '用户名合法'; 
}else{
    echo '用户名不合法';
}
    
