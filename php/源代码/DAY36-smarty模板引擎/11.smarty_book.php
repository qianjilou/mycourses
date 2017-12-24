<?php
date_default_timezone_set('PRC');
//接收url地址栏中的参数书的id
$id = isset($_GET['id'])?$_GET['id']:1;

//加载smarty的核心类文件
require_once 'smarty/Smarty.class.php';
$smarty = new Smarty();

//先判断是否存在缓存文件
if(!$smarty->isCached('11.book.html',$id)){
    //从数据库查询商品的信息
    require_once 'DAOPDO.class.php';
    $option = array(
        'host'      =>  '127.0.0.1',
        'dbname'    =>  'php_7',
        'user'      =>  'root',
        'pass'      =>  'root',
        'port'      =>  3306,
        'charset'   =>  'utf8'
    );
    $dao = DAOPDO::getSingleton($option);
    
    
    $sql = "SELECT title FROM book WHERE id=$id";
    $title = $dao -> fetchColumn($sql);
    //再分配
    $smarty -> assign('title',$title);
}


//1. 开启缓存
$smarty -> caching = true;
//2. 设置缓存文件保存的地址(通常会存到cache目录里面)
$smarty -> setCacheDir('cache');
//3. 设置缓存的有效期
$smarty -> cache_lifetime = 60;

$smarty -> display('templates/11.book.html',$id);