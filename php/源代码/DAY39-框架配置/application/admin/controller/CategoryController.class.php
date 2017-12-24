<?php
namespace admin\controller;
use framework\core\Controller;
use framework\core\Factory;
/*
 * 分类控制器类，主要负责分类管理这个功能模块
 */
class CategoryController extends Controller
{
    
    //查询分类列表
    public function indexAction(){
        //命令模型查询数据
        $model = Factory::M('admin\model\GoodsModel');
        
        //查询
        $data = array('goods_name','shop_price');
        $where = array('goods_id'=>100);
        $model -> find(array('goods_name','shop_price'));
        die;
        
        //更新
        $data = array(
            'goods_name'=>"iphone '7",
            'shop_price'=> 999
        );
        $where = array(
            'goods_id' => 100
        );
        $model -> update($data,$where);        
        //插入操作
        $data = array(
            'goods_name'=>"iphone '7",
            'shop_price'=> 999
        );
        $model -> insert($data);
        //删除
        $model -> delete(100);  
        
        
        //查询分类列表
        $cat_list = $model -> user_select();        
        //命令视图显示数据
        //使用 smarty将分类列表的数据分配过去            
        $this->smarty -> assign('cat_list',$cat_list);
        $this->smarty -> display('goods_list.tpl');
    }
    
    //删除分类
    public function deleteAction(){}
    
    //修改分类
    public function editAction(){}
    
    //增加分类
    public function addAction(){
        
    }
}