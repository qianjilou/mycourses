<?php
namespace home\controller;
use framework\core\Controller;
use framework\core\Factory;

class IndexController extends Controller
{
    public function indexAction()
    {
        //查询分类列表
        $model = Factory::M('admin\model\Category');
        $where = array('parent_id'=>0);
        $cat_list = $model -> find($where);
        
        //分配到模板
        $this->smarty->assign('cat_list',$cat_list);
        $this->smarty->display('index.html');
    }
}