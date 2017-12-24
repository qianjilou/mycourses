<?php
class DAOPDO
{
    //私有的属性，将将来实例化的对象保存到该属性上
    private static $pdo;
    //私有的构造方法
    private function __construct()
    {
    }
    //私有的克隆方法
    private function __clone()
    {
    }
    //提供一个公共的静态方法生成对象
    public static function getSingleton()
    {
        //如何生成单利的对象（只生成一个对象）,先判断$pdo属性是否是当前类的实例
        if(!self::$pdo instanceof self){
            self::$pdo = new self();
        }
        return self::$pdo;
    }
}
$pdo1 = DAOPDO::getSingleton();
$pdo2 = DAOPDO::getSingleton();
$pdo3 = DAOPDO::getSingleton();
echo '<pre>';
var_dump($pdo1,$pdo2,$pdo3);