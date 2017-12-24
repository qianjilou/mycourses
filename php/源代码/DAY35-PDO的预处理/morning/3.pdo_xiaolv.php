<?php
$start = microtime(true);   //开始时间

//连接100次
for($i=0;$i<100;$i++){
    $dsn = "mysql:host=127.0.0.1;dbname=php_7;port=3306;charset=utf8";
    $user = 'root';
    $pass = 'root';
    $pdo = new PDO($dsn,$user,$pass);
}

$end = microtime(true);   //结束时间

$time = $end - $start;

echo 'PDO连接数据库:'.$time.'<br>';

//使用mysql扩展、或mysqli扩展连接100次
$m_start = microtime(true);   //开始时间
for($i=0;$i<100;$i++){
    @mysql_connect('127.0.0.1','root','root');
    mysql_select_db('php_7');
    mysql_query('set names utf8');
}

$m_end = microtime(true);   //结束时间
$m_time = $m_end - $m_start;
echo 'mysqll连接数据库:'.$m_time.'<br>';



echo 'helloworld';
echo 'helloworld';
echo 'helloworld';
echo 'helloworld';
echo 'helloworld';
echo 'helloworld';

for($i=0;$i<10;$i++){
    echo 'helloworld';
}





