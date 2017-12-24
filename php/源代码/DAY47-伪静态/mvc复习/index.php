<?php
$m = isset($_GET['m'])?$_GET['m']:'home';
$c = isset($_GET['c'])?$_GET['c']:'Index';
$a = isset($_GET['a'])?$_GET['a']:'index';


//实例化控制器对象，调用对象的方法
$controller = $c.'Controller';
require 'app/'.$m.'/controller/'.'.class.php';

$controller = new $controller();
$controller -> $a();