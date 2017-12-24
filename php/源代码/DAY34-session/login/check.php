<?php
//用来接收表单提交的用户名、密码
//暂时指定      用户名为张三、密码为：admin123
$user = isset($_POST['user'])?$_POST['user']:'';
$pass = isset($_POST['pass'])?$_POST['pass']:'';

if($user == 'zhangsan' && $pass =='admin123'){
    //正确直接进入index.php
    //登录成功，在session中保存标记，用户名称
    session_start();
    $_SESSION['user'] = $user;
    
    echo '恭喜你,登录成功,3秒后自动进入首页';
    header("Refresh:3;url=index.php");
    die;
}else{
    //错误，返回登录页面
    echo '用户名或密码错误，请重新输入';
    header("Refresh:3;url=login.php");
    die;
}