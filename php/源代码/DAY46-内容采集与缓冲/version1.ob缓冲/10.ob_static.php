<?php
//查询商品表的数据
$option = array(
    'host'              =>  '127.0.0.1',
    'user'              =>  'root',
    'pass'              =>  'root',
    'dbname'            =>  'php_7',
    'port'              =>  3306,
    'charset'           =>  'utf8',
);

require_once 'I_DAO.interface.php';
require_once 'DAOPDO.class.php';

$dao = DAOPDO::getSingleton($option);

$sql = "SELECT * FROM goods";
$result = $dao -> fetchAll($sql);

ob_start();
//一旦ob_start()之后，就会先将加载的内容，保存缓冲区域了
require_once '8.template.php';

//在读取ob缓冲区域的内容
$content = ob_get_contents();

//再将拿到的结果保存到静态html文件
file_put_contents('./goods.html', $content);
//清空缓冲
ob_clean();




