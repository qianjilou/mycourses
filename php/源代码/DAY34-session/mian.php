<?php
session_start();
$_SESSION['name'] = 'zhangsan';
$_SESSION['age'] = 10;


session_destroy();

echo '<pre>';
var_dump($_SESSION);