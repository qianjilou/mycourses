<?php 
//配置文件
//设置编码
header("Content-type:text/html;charset=utf-8");
//配置网站目录结构
define('ROOT', substr(str_replace('\\','/',__DIR__),0,-6));   //网站的根目录
define('STYLE_ROOT', ROOT . 'style' . '/');
define('LIB_ROOT', ROOT . 'lib' . '/');
define('TEMPS_ROOT' , ROOT .  'temps' . '/');
define('TEMPS_ROOT_HOME' , ROOT .  'temps/home' . '/');

//配置数据链接信息
$link_mysql_info =  array(
	'host' => 'localhost',
	'root' => 'root',
	'pass' => '',
	'charset' => 'utf8',
	'dbname' => 'php07'
);






 ?>