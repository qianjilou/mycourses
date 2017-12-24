<?php
namespace home\controller;
use framework\core\Controller;
use framework\core\Factory;
use framework\tools\Page;

class IndexController extends Controller
{
    public function indexAction()
    {
        //查询分类列表
        $model = Factory::M('admin\model\Category');
        $where = array('parent_id'=>0);
        $cat_list = $model -> find($where);
        
        //查询问题列表(分页查询)
        $q_model = Factory::M('Question');        
        //针对问题列表进行分页展示        
        $page = new Page();
        
        //设置总的记录数(封装到模型中)
        $page -> total_pages = $q_model -> countQuestions(); 
        
        $page -> pagesize = 1;  //每页显示几条记录
        $page -> now_page = isset($_GET['page'])?$_GET['page']:1;
        $offset = ($page->now_page -1 )* $page->pagesize;
        $limit = $page->pagesize;        
        //分页查询问题列表，也封装到模型中
        $questions = $q_model -> getAllQuestions($offset,$limit);
        
        //创建分页导航条
        $page_bar = $page -> create();
        
        //查询热门话题列表
        $m_topic = Factory::M('Topic');
        $hot_topics = $m_topic -> getHotTopics();
        $this->smarty->assign('hot_topics',$hot_topics);
        
        //热门用户
        $m_user = Factory::M('User');
        $hot_users = $m_user -> getHotUsers();
        $this->smarty->assign('hot_users',$hot_users);
        
        //分配到模板
        $this->smarty->assign('pagebar',$page_bar);
        $this->smarty->assign('questions',$questions);
        $this->smarty->assign('cat_list',$cat_list);
        $this->smarty->display('index.html');
    }
}