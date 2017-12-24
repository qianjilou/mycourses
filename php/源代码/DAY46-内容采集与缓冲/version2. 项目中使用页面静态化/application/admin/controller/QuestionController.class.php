<?php
namespace admin\controller;
use framework\core\Controller;
use framework\tools\HttpRequest;
use framework\core\Factory;

class QuestionController extends Controller
{
    public function addAction()
    {
        $this->smarty->display('question/add.html');
    }
    //接收采集的网址，并制定筛选规则
    public function collectAction()
    {
        $url = $_POST['url'];
        //开始采集
        $http = new HttpRequest();
        $http -> url = $url;
        $result = $http -> send();
        //定义规则进行筛选
        $reg = '/<a.+?class="js-title-link">(.+?)<\/a>.+?<script.+?class="content">(.+?)<\/script>/su';
        
        preg_match_all($reg, $result,$match);
        
        //问题的标题
        $title = $match[1];
        //问题的回复内容
        $replys = $match[2];
        //echo '<pre>';
        //var_dump($title,$replys);
        //将这些问题列表、对应的回复保存到数据库
        $m_question = Factory::M('home\model\Question');
        $m_reply = Factory::M('Reply');
        foreach ($title as $k=>$v){
            $data['question_title'] = $v;
            $data['cat_id'] = 1;    //固定死分类id为1，将来会有小编2次编辑
            $data['user_id'] = 1;
            $data['pub_time'] = time(); //也是小编审核的时间
            
            //返回问题的主键值
            $question_id = $m_question -> insert($data);
            if($question_id){
                //保存该问题对应的回复
                $dd['reply_content'] = $replys[$k];
                $dd['user_id'] = 1; 
                $dd['reply_time'] = time(); //也应该时小编指定的
                $dd['question_id'] = $question_id;
                $m_reply -> insert($dd);
            }
        }
        $this->jump('index.php', '采集成功');        
    }
}