<?php
//接收表单数据，并验证
$username = $_POST['user'];
$password = $_POST['pass'];

//实例化PDO对象
$dsn = "mysql:host=127.0.0.1;dbname=php_7;port=3306;charset=utf8";
$user = 'root';
$pass = 'root';
$pdo = new PDO($dsn,$user,$pass);

$username = $pdo -> quote($username);   //转义并引号包裹   ''

$sql = "SELECT * FROM user WHERE name=$username AND password='$password'";
//$sql = "SELECT * FROM user WHERE name='1' or 1=1 or'' AND password='$password'";

@mysql_connect('127.0.0.1','root','root');
mysql_select_db('php_7');
mysql_query('set names utf8');

$result = mysql_query($sql);
$row = mysql_fetch_assoc($result);
if($row){
    echo '登录成功';  
}else{
    echo '登录失败';
}