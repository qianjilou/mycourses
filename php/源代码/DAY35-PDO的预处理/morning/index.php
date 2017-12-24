<?php
session_set_save_handler('open', 'close', 'read', 'write', 'destroy', 'gc');
//参数1：session_start()时，以前是创建session文件，现在我们打开数据库连接，要保存到数据库
function open()
{
    //打开数据库连接
    
}
function close()
{
    //脚本结束的时候
}
function read($sess_id)
{
    //读取session数据的时候，怎么处理,从数据库中查找session数据
}
function write($sess_id,$sess_content)
{
    //写入session数据时的函数
}
function gc($max_lifetime)
{
    $time = $last_time - $max_lifetime;
    //该时间之前就是过期的
    
}

var_dump($_SESSION);
$_SESSION['name'] = 'zhangsan';
