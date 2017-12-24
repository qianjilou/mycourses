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
        //先查询是否登录
        
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
        //问题保存成功之后，就根据返回的问题id，查询问题的详情，并将详情保存到静态 html文件
        if($q_id){
            $result = $model -> getDetails($q_id);
            
            $this->smarty->assign('question',$result['question']);
            $this->smarty->assign('replys',$result['replys']);
            $this->smarty->assign('reply_nums',count($result['replys']));
            
            $result = $this->smarty->fetch('question/detail.html');     
            //smarty提供了fetch方法，用来替换模板变量，并返回而不是直接显示
            //将其写入到静态的html文件中
            //1. 定义静态文件的根目录
            $basic_path = './application/public/html/';
            $sub_path = date('Ymd').'/';
            if(!is_dir($basic_path.$sub_path)){
                mkdir($basic_path.$sub_path,0777,true);
            }
            $file = 'detail_'.$q_id.'.html';
            
            $res = file_put_contents($basic_path.$sub_path.$file, $result);
            //写入成功之后，将地址保存到数据库
            if($res){
                $data['static_url'] = $sub_path.$file;
                $where['question_id'] = $q_id;
                $res1 = $model -> update($data,$where);
                if($res1){
                    $this->jump('index.php', '发布成功');
                }else{
                    $this->jump('?m=home&c=question&a=addAction', '请重试');
                }
            }
            
        }       
    }
  
    //查询问题详情
    public function detailAction()
    {
        $question_id = $_GET['id'];
        
        //根据问题id查询该问题的详情
        $q_model = Factory::M('Question');
        $result = $q_model -> getDetails($question_id);
        
        //分配给视图显示
        $this->smarty->assign('question',$result['question']);
        $this->smarty->assign('replys',$result['replys']);
        $this->smarty->assign('reply_nums',count($result['replys']));
        
        $this->smarty->display('question/detail.html');        
    }
}
