<?php
namespace framework\core;
/*
 * 工厂类，功能是根据用户传递的模型类，返回单例的模型对象
 */
class Factory
{
    //定义公共的静态的方法
    //参数：模型类名
    public static function M($modelName)
    {
        //判断模型中是否含有Model
        if(substr($modelName,-5)!='Model'){
            $modelName .= 'Model';
        }
        //判断是否附带命名空间
        if(!strchr($modelName, '\\')){
            //拼接命名空间
            $modelName = MODULE.'\model\\'.$modelName;
        }
        static $model_list = array();
        
        if(!isset($model_list[$modelName])){           
            $model_list[$modelName] = new $modelName;
        }
        return $model_list[$modelName];
    }
    
    //生成伪静态url地址
    //Factory::U('admin/topic/add');   ---->  localhost/0423/admin/topic/add.html
    //参数1：传递MCA的值
    //参数2：传递额外的参数,可以没有   array('id'=>3) 
    public static function U($mca,$params=array())
    {
        //1. 先获得项目的根目录,获得当前脚本所在的绝对地址
        $root = $_SERVER['SCRIPT_NAME'];    //      /0423/index.php        
        //2. 将index.php替换掉
        $root = str_replace('index.php', '', $root); //  /0423/        
        //3. 将MCA拼接到根目录下
        $root = $root.$mca;                //   /0423/home/question/delete/
        
        //4. 判断是否传递额外参数了
        if(!empty($params)){
            //在mca后面拼接上额外参数    array('id'=>3) 
            foreach ($params as $k=>$v){
                $root .= '/'.$k.'/'.$v;
            }
            $root .= '.htm';
        }
        return $root;
        //echo '<pre>';
        //var_dump($root);
    }
    
}
