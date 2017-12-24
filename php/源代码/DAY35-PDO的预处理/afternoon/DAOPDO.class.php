<?php
require_once 'I_DAO.interface.php';
//首先，类要实现、完成接口规定的内容
class DAOPDO implements I_DAO
{
    //私有的属性，将将来实例化的对象保存到该属性上
    private static $instance;   //DAOPDO类的单利对象
    private $pdo;               //PDO对象
    //私有的构造方法,参数就是数据库的链接信息
    private function __construct($option)
    {
        //在构造方法中，初始化操作（连接数据库）
        $host = isset($option['host'])?$option['host']:'';
        $user = isset($option['user'])?$option['user']:'';
        $pass = isset($option['pass'])?$option['pass']:'';        
        $dbname = isset($option['dbname'])?$option['dbname']:'';
        $port = isset($option['port'])?$option['port']:'';
        $charset = isset($option['charset'])?$option['charset']:'';
        
        $dsn = "mysql:host=$host;dbname=$dbname;port=$port;charset=$charset";
        $this->pdo = new PDO($dsn,$user,$pass);        
    }
    //私有的克隆方法
    private function __clone()
    {        
    }
    //提供一个公共的静态方法生成对象
    public static function getSingleton($option)
    {
        //如何生成单利的对象（只生成一个对象）,先判断$pdo属性是否是当前类的实例
        if(!self::$instance instanceof self){
            self::$instance = new self($option);
        }
        return self::$instance;
    }
    
    //查询一条记录的方法
    public function fetchRow($sql){
        $pdo_statement = $this->pdo->query($sql);
        if($pdo_statement == false){
            //说明sql语句有误,输出错误信息
            $error = $this -> pdo -> errorInfo();
            $err_str = "SQL语句有误，详细信息如下:<br>".$error[2];
            echo $err_str;
            return false;
        }
        //执行到这里，说明sql语句没有问题
        return $pdo_statement->fetch(PDO::FETCH_ASSOC);
    }
    //查询所有记录的方法
    public function fetchAll($sql){
        $pdo_statement = $this->pdo->query($sql);
        if($pdo_statement == false){
            //说明sql语句有误,输出错误信息
            $error = $this -> pdo -> errorInfo();
            $err_str = "SQL语句有误，详细信息如下:<br>".$error[2];
            echo $err_str;
            return false;
        }
        //执行到这里，说明sql语句没有问题
        return $pdo_statement->fetchAll(PDO::FETCH_ASSOC);
    }
    //查询一个字段的值
    public function fetchColumn($sql){
        $pdo_statement = $this->pdo->query($sql);
        if($pdo_statement == false){
            //说明sql语句有误,输出错误信息
            $error = $this -> pdo -> errorInfo();
            $err_str = "SQL语句有误，详细信息如下:<br>".$error[2];
            echo $err_str;
            return false;
        }
        //执行到这里，说明sql语句没有问题
        //因为将来查询的时候 sql语句如下：SELECT goods_name FROM goods WHERE goods_id = 1;
        //已经告诉数据库查询的是goods_name这个字段，所以fetchColumn的时候就不用再传递字段的索引
        return $pdo_statement->fetchColumn();
    }
    //执行增删改的操作,返回的是执行增删改受影响的记录数
    public function exec($sql){
        return $this->pdo->exec($sql);
    }
    //引号转义包裹的方法,返回转义包裹之后的数据
    public function quote($data){
        return $this->pdo->quote($data);
    }
    //查询刚刚插入的这条数据的主键
    public function lastInsertId(){
        return $this->pdo->lastInsertId();
    }
}

$option = array(
    'host'      =>  '127.0.0.1',
    'user'      =>  'root',
    'pass'      =>  'root',
    'dbname'    =>  'php_7',
    'port'      =>  3306,
    'charset'   => 'utf8'
);
$dao = DAOPDO::getSingleton($option);
// $sql = "INSERT INTO user VALUES(NULL,'zhaoliu',md5('admin123'))";
// $dao -> exec($sql);
// $id = $dao -> lastInsertId();
// echo '<pre>';
// var_dump($id);

//如果sql语句写错了：
// $sql = "SELECT * FROM use";
// $dao -> fetchAll($sql);

//查询一条数据
// $sql = "SELECT * FROM user WHERE id=6";
// $result = $dao -> fetchRow($sql);
// echo '<pre>';
// var_dump($result);

//对数据进行转义并包裹
$data = "hello '1 or 1' world";
$new_data = $dao -> quote($data);
echo '<pre>';
var_dump($new_data);

    
