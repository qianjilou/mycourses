<?php
namespace admin\model;
use framework\core\Model;

class CategoryModel extends Model
{
    protected $logic_table = 'category';
    //保存错误信息
    private $error = array();   
    //递归查询所有分类信息
    //参数1：查询的数组
    //参数2：查询哪个分类下面的子类,默认值是0，表示查询顶级分类下面的子类
    //参数3：分类的层级,默认是顶级分类，每调用一次递归查询level就+1
    public function getTreeCategory($cat_list,$p_id=0,$level=0)
    {
        static $arr = array();
        foreach($cat_list as $k=>$v){
            //谁的parent_id是0，谁就是0的子类
            if($v['parent_id']==$p_id){
                //将层级序号保存到当前分类数组中
                $v['level'] = $level;
                $arr[] = $v;
                //再次查询该分类下面的子类
                $this->getTreeCategory($cat_list,$v['cat_id'],$level+1);
            }
        }
        return $arr;
    }
    
    //查询某个分类是否是叶子分类
    //参数就是待删除的分类id
    public function isLeafCategory($cat_id)
    {
        //由于我们不需要返回任何值，只需要返回true、false,所以我们查询的字段可以写 1
        //如果查询到了返回1，如果没有查询到返回空
        $sql = "SELECT 1 FROM $this->true_table WHERE parent_id=$cat_id";
        return $this->dao->fetchColumn($sql);
    }
    
    //数据验证
    //参数是：控制器先接收的表单的数据，并传递过来的
    public function checkData($data)
    {
        //1. 分类标题不能为空
        if($data['cat_name']==''){
            $this->error[] = '分类标题不能为空';            
        }
        //2. 分类标题不能为纯数字、数字开头   1234abcd   1234
        if((int)$data['cat_name']!=0){
            $this->error[] = '分类标题不能为纯数字、或数字开头';
        }
        //3. 分类标题、分类描述不能超过8个字符长度
       if(mb_strlen($data['cat_name'])>=8 || mb_strlen($data['cat_desc'])>=8){
           $this->error[] = '分类标题和描述太长了，不能超过8个字符';
       }
       //4. 一个分类下面，不能创建相同的子类
       if($this->hasCategory($data['cat_name'], $data['parent_id'])){
           $this->error[] = '一山不容二虎，该分类已经存在';
       }
       if(empty($this->error)){
           //为空，说明没有错误
           return true;
       }else{
           //不为空，说明有错误
           return false;
       }
    }
    //查询一个分类下面是否已经存在某个子类
    //参数1：添加的分类的标题
    //参数2:父级分类的id，查询该分类下面是否有参数1子类
    public function hasCategory($cat_name,$p_id)
    {
        $sql = "SELECT 1 FROM $this->true_table WHERE cat_name='$cat_name' AND parent_id=$p_id";
        return $this->dao->fetchColumn($sql);        
    }
    
    //显示错误信息的方法
    public function showError()
    {        
        if(!empty($this->error)){
            //有错误
            $err_str = '';
            foreach ($this->error as $v){
                $err_str .= $v.'<br>';
            }
            return $err_str;
        }
    }
    
    
}