<?php
require 'I_DAO.interface.php';
class DAOPDO implements I_DAO
{
    private static $instance;
    private $pdo;
    
    private function __construct()
    {
        $this -> pdo = new PDO($dsn,$user,$pass);
    }
    private function __clone()
    {
        
    }
    public static function getSingleton()
    {
        if(!self::$instance instanceof self){
            self::$instance = new self();
        }
        return self::$instance;
    }    
    
    public function fetchRow($sql){
        //获得pdo对象
        
    }
    public function fetchAll($sql){
        
    }
    public function fetchColoumn($sql){}
    public function exec($sql){}
    public function lastInsertId(){}
    public function quote($data){}
}

//单例模式，保证类只生成一个对象