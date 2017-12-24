<?php
//修改配置文件，将session存储机制修改为user（自定义）
ini_set('session.save_handler', 'user');
//开始自己定义session的存储
//参数1：就表示session_start的时候，怎么处理
//参数2：脚本结束的时候怎么处理
//参数3：读取session数据表中数据的函数
//参数4：向session数据表写入数据的函数
//参数5：销毁session数据表中的数据的函数
//参数6：session过期之后的处理函数
session_set_save_handler('open', 'close', 'read', 'write', 'destroy', 'gc');

session_start();

//初始化session、session_start时执行的函数
function open()
{
    //初始化数据库的链接
    $link = @mysql_connect('127.0.0.1','root','root');
    mysql_select_db("php_7");
    mysql_query("set names utf8");
}
//脚本结束的函数
function close()
{
    echo '脚本结束了...';
    return true;
}

//从session表读取数据的方法
//说明：客户端携带过来session_id,会自动传递到read里面
function read($sess_id)
{
    $sql = "SELECT sess_content FROM session WHERE sess_id='$sess_id'";
    $result = mysql_query($sql);
    $res = mysql_fetch_assoc($result);
    return $res['sess_content'];
}

//向session数据表写入数据的函数
//说明：当用户$_SESSION['name'] = 'lisi';这样操作的时候，就会把数据写入到session表
function write($sess_id,$sess_content)
{
    $sql = "INSERT INTO session VALUES('$sess_id','$sess_content',".time().")";
    return mysql_query($sql);   
}

//destroy,当执行session_destroy()删除文件，现在要删除数据表中的记录
//说明：自动传递浏览器携带的session_id
function destroy($sess_id)
{
    $sql = "DELETE FROM session WHERE sess_id = '$sess_id'";
    return mysql_query($sql);
}

//当session_start()的时候判断哪些session文件过期了，在这里会判断哪些数据过期了
//说明：会自动把session数据的有效期传递进来
function gc($max_lifetime)
{
    $time = time() - $max_lifetime;       
    $sql = "DELETE FROM session WHERE last_time < $time";   //35 36 37 38 39 40
    return mysql_query($sql);
}

// $_SESSION['name'] = 'zhangsan';
// echo '写入成功';
session_destroy();
echo '删除成功';


