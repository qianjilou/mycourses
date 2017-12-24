<?php
namespace framework\core;
class Framework
{
    public function __construct()
    {
        $this->initAutoload();
        $this->initMCA();
        $this->dispatch();
    }
    public function initAutoload()
    {
        spl_autoload_register(array($this,"autoloader"));
    }
    public function autoloader($className)
    {
        echo '需要:'.$className.'<br>';
        if($className=='Smarty'){
            require_once './framework/vendor/smarty/Smarty.class.php';
            return;
        }
        //1. 先炸开字符串，数组
        $arr = explode('\\', $className);
    
        //2.确定加载的根目录
        if($arr[0] == 'framework'){
            $basic_path = './';
        }else{
            $basic_path = './application/';
        }
        //3.确定子目录
        $sub_path = str_replace('\\', '/', $className);
    
        //4.确定后缀
        //I_DAO.interface.php
        if(substr($arr[count($arr)-1], 0,2)=='I_'){
            $fix = '.interface.php';
        }else{
            $fix = '.class.php';
        }
        //5. 确定文件名
        $class_file = $basic_path.$sub_path.$fix;
        if(file_exists($class_file)){
            require_once $class_file;
        }
    }
    
    public function initMCA()
    {
        $m = isset($_GET['m'])?$_GET['m']:'home';
        define('MODULE', $m);
        $c = isset($_GET['c'])?$_GET['c']:'Index';
        define('CONTROLLER', $c);
        $a = isset($_GET['a'])?$_GET['a']:'indexAction';
        define('ACTION',$a);
    }
    public function dispatch()
    {
        //实例化控制器对象，调用方法
        //使用类的时候，一定要加上命名空间
        $controller_name =  MODULE.'\controller\\'.CONTROLLER.'Controller';
        
        $controller = new $controller_name;
        $a = ACTION;
        $controller -> $a();
    }
}