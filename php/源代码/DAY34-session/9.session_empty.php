<?php
session_start();

//清空内存中的所有session数据
$_SESSION = array();

//删除session文件
session_destroy();

//删除cookie文件中保存的session文件名称
//session_name就是session的名字，PHPSESSID，通过它找到值：sess_hrq06vj6sc9kb6ie2it3ap3lh4
setcookie(session_name(),'',time()-1);