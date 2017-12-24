<?php
class QuestionController extends Controller
{
    public function listAction()
    {
        //命令模型查询数据
        $q_model = Factory::M('QuestionModel');
        $questions = $q_model -> getAllQuestions();
        
        //命令视图显示数据
        
    }
}