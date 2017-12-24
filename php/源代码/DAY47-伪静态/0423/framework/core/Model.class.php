<?php
namespace framework\core;
use framework\dao\DAOPDO;
/*
 * 基础模型类，各个模型类中的公共的代码
 */
class Model
{
    protected $dao;
    protected $true_table;  //真实表名
    protected $pk;          //主键字段
    public function __construct()
    {
       //初始化dao对象
       $this->initDAO();
       //初始化真实表名
       $this->initTrueTable();
       //获得数据表的字段
       $this->initField();
    }
    //初始化数据表的字段
    public function initField()
    {
        $sql = "DESC $this->true_table";
        $result = $this->dao->fetchAll($sql);
        //遍历二维数组
        foreach ($result as $k=>$v){
            if($v['Key']=='PRI'){
                //说明$v['Field']为主键字段
                $this->pk = $v['Field'];
            }
        }
        //echo '<pre>';
        //var_dump($result);
        //die;
    }
    //初始化dao对象
    public function initDAO()
    {
        $option = $GLOBALS['config'];
        $this->dao = DAOPDO::getSingleton($option);
    }
    //初始化    表名
    public function initTrueTable()
    {
        //如果定义了logic_table属性，就使用该属性
        if(isset($this->logic_table)){
            $this->true_table = '`'.$GLOBALS['config']['table_prefix'].$this->logic_table.'`';
            return;
        }
        //执行到这里，说明：没有定义logic_table，则我们自己动手
        //如何获得当前实例化的是哪个模型类：MessageModel
        $className = get_class($this);  //home\model\QuestionModel
        //通过basename() 获得最后分隔符后面的内容
        $className = basename($className);  //  QuestionModel
        //去掉Model
        $tableName = substr($className, 0,-5);
        //将特殊情况：TopicQuestion----->topic_question
        $reg = '/(?<=[a-z])([A-Z])/';
        $tableName = strtolower(preg_replace($reg, '_$1', $tableName));
        
        $this->true_table = '`'.$GLOBALS['config']['table_prefix'].$tableName.'`';
        //var_dump($tableName);
        //die;        
    }     
    //自动插入数据
    /*
     * 参数：数组(字段名称=>字段值)
     * $data = array(
     *    'goods_name'  =>  'iphone 7'
     *    'shop_price'  =>  '999'
     * )
     * 返回值：返回刚刚插入的这条记录的主键值
     */
    public function insert($data)
    {
        //最终拼接成完整的sql语句，并执行
        //$sql = "INSERT INTO `表名`(`goods_name`,`shop_price`) VALUES('iphone7',999)";
        $sql = "INSERT INTO $this->true_table";
        
        //2. 拼接字段列表部分
        //通过array_keys()获得数组下标部分，返回值数组
        $fields = array_keys($data);
        //使用参数1函数，处理参数2这个数组，这样处理：遍历参数2数组，数组的值传递到参数这个函数中
        $field_list = array_map(function($v){
            return '`'.$v.'`';
        }, $fields);
        
        //将数组元素连接成字符串
        $field_list = '('.implode(',', $field_list).')';
        $sql .= $field_list;       
        
        //3. 拼接VALUES部分
        $field_value = array_values($data);
        //安全处理：插入数据前，将引号转义并包裹
        $field_value = array_map(array($this->dao,"quote"), $field_value);
        $field_value = ' VALUES('.implode(',', $field_value).')';
        
        $sql .= $field_value;
        
        //4. 执行sql语句，并返回主键值
        $this->dao->exec($sql);
        return $this->dao->lastInsertId();  
    }
    
    //自动删除
    //参数：删除的记录的主键值
    //最终：根据主键删除记录
    public function delete($id)
    {
        //$sql = "DELETE FROM 表名 WHERE 主键字段=$id
        $sql = "DELETE FROM $this->true_table WHERE $this->pk=$id";
        //die($sql);
        return $this->dao->exec($sql);
    }
    
    //自动更新
    //参数1：更新的字段 和 值关联关系；例如：array('goods_name'='诺基亚')
    //参数2：必须要有where条件，例如：array('goods_id'=>100)
    //最终：UPDATE 表名 SET `goods_name`=’诺基亚’，`shop_price`=999 WHERE `goods_id`=100
    public function update($data,$where=null)
    {
        //1. 先判断是否有条件
        if(!$where){
            //没有条件，直接停止
            return false;
        }else{
            //拼接where条件
            foreach ($where as $k=>$v){
                $where_str = " WHERE `$k`='$v'";
            }            
        }
        //2. 
        $sql = "UPDATE $this->true_table SET ";
        //字段列表   array{0=>`goods_name`,1=>`shop_price`}
        $fields = array_keys($data);
        $fields = array_map(function($v){
            return '`'.$v.'`';
        }, $fields);
        
        //字段的值：array(0=>'iphone \'7',1=>999)
        $field_values = array_values($data);
        $field_values = array_map(array($this->dao,"quote"), $field_values);
        
        //拼接成 字段名=字段值,字段名=字段值   `goods_name`='iphone \'7,`shop_price`=999
        $str = '';
        foreach ($fields as $k=>$v){
            $str .= $v.'='.$field_values[$k].',';
        }
        //删除最后一个逗号 ,字符串截取substr
        $str = substr($str, 0,-1);  //表示从0开始截取，截取到-1这个位置（从后面向前数1个）
        
        $sql .= $str.$where_str;  
        
        //执行sql语句
        return $this->dao->exec($sql);
    }

    //自动查询
    //参数1：查询的字段列表 $data = array('goods_name','shop_price')
    //参数2：查询的条件 $where = array('goods_id'=>1) 
    //find(array('parent_id'=>0))
    public function find($where=array(),$data=array())
    {
        //1. 先判断是否有字段
        if(!$data){
            //没有字段列表
            $fields = '*';
        }else{
           //有字段列表
           $fields = array_map(function($v){
               return '`'.$v.'`';
           },$data);
           $fields = implode(',', $fields);           
        }
        //2. 确定查询的条件
        if(!$where){
            //没有where条件,查询所有数据
            $sql = "SELECT $fields FROM $this->true_table";
            return $this->dao->fetchAll($sql);
        }else{
            foreach ($where as $k=>$v){
                $where_str = '`'.$k.'`='."'$v'";
            }
            //根据条件查询:where parent_id=0
            $sql = "SELECT $fields FROM $this->true_table WHERE $where_str";
            return $this->dao->fetchAll($sql);
        }
        //die($sql);
    }
    
    
}