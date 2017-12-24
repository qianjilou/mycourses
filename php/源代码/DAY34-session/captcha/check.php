<?php
//接收表单提交过来的数据
//拿用户提交过来的验证码 和 生成的图像里面的   随机数   进行比较
//思考：如何把生成的随机数保存起来？
session_start();
//将用户输入的验证码 和 session文件中的验证码统一大写、或小写转换之后再进行比较
if(strtolower($_POST['captcha']) != strtolower($_SESSION['code'])){
    //验证码错误
    echo '验证码 都输错了，再来一次';
    header("Refresh:3;url=login.html");
    die;    
}
//执行到这里说明，验证码正确
echo '验证码正确';