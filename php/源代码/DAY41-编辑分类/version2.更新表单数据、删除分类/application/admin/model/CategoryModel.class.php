<?php
namespace admin\model;
use framework\core\Model;

class CategoryModel extends Model
{
    protected $logic_table = 'category';
    
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
}