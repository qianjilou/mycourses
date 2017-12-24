<?php
namespace home\model;
use framework\core\Model;

/*
 * 问题模型类，负责问题数据表的增删改查
 */
class QuestionModel extends Model
{
   protected $logic_table = 'question';
   //关联查询所有的问题列表
   public function getAllQuestions($offset,$limit)
   {
        $sql = "SELECT q.*,c.cat_name,u.username,u.user_pic FROM ask_question AS q LEFT JOIN ask_category AS c ON q.cat_id=c.cat_id LEFT JOIN ask_user AS u ON q.user_id=u.user_id LIMIT $offset,$limit";
        return $this->dao->fetchAll($sql);       
   }
   //统计问题数量
   public function countQuestions()
   {
       $sql = "SELECT count(*) AS total FROM $this->true_table";
       return $this->dao -> fetchColumn($sql);
   }
}