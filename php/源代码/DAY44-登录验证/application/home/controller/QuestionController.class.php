<?php
namespace home\controller;
use framework\core\Controller;
use framework\core\Factory;
/*
 * 问题控制器，负责问题的功能模块
 */
class QuestionController extends Controller
{
    //显示发起问题时的表单
    public function addAction()
    {
        //先查询分类信息
        $c_model = Factory::M('admin\model\Category');
        $cat_list = $c_model -> find();
        $cat_list = $c_model -> getTreeCategory($cat_list);
        
        
        //查询话题列表
        $t_model = Factory::M('admin\model\Topic');
        $topics = $t_model -> find();
        
        //分配到发起问题的表单中
        $this->smarty->assign('cat_list',$cat_list);
        $this->smarty->assign('topics',$topics);      
        
        $this->smarty->display('question/add.html');
    }

    //接收发起问题提交的表单数据
    public function addHandleAction()
    {
        //1. 收集表单数据，并保存到数据库
        $data['question_title'] = $_POST['question_title']; //问题标题
        $data['cat_id'] = $_POST['cat_id'];     //问题所属分类
        $data['question_desc'] = $_POST['question_desc']; //问题描述
        $data['user_id'] = 1;   //暂时写死
        $data['pub_time'] = time(); //发布时间

        //问题和话题之间怎么关联呢？
        //先保存问题信息
        $model = Factory::M('Question');
        //返回刚刚插入的问题的序号，再将该问题和话题进行关联
        $q_id = $model -> insert($data);
        
        //有几个话题，向问题话题关联数据表插入几条数据
        $qt_model = Factory::M('QuestionTopic');
        if(isset($_POST['topic_id'])){
            foreach ($_POST['topic_id'] as $v){
                $dd['question_id'] = $q_id;
                $dd['topic_id'] = $v;
                $qt_model -> insert($dd);
            }
        }        
        //允许用户没有选择话题，所以我们只需要保证问题发布成功即可
        if($q_id){
            $this->jump('index.php', '发布成功');
        }else{
            $this->jump('?m=home&c=question&a=addAction', '发起失败');
        }        
    }
    
}
