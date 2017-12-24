<?php
namespace home\model;
use framework\core\Model;

class UserModel extends Model
{
    protected $logic_table = 'user';
    //查询热门用户
    public function getHotUsers()
    {
        $sql = "SELECT count(q.question_id) as q_nums,u.username,u.user_pic FROM ask_user AS u LEFT JOIN ask_question AS q ON u.user_id=q.user_id GROUP BY q.user_id ORDER BY q_nums DESC LIMIT 3";
        return $this->dao->fetchAll($sql);
    }
    //查询用户名、邮箱是否已经注册
    public function hasUserEmail($username,$email)
    {
        $sql = "SELECT 1 FROM $this->true_table WHERE username='$username' OR email='$email'";
        return $this->dao->fetchColumn($sql);
    }
    //根据用户名、激活码查询
    public function checkByUserCode($user,$code)
    {
        $sql = "SELECT * FROM $this->true_table WHERE username='$user' AND activate_code='$code'";
        return $this->dao->fetchRow($sql);
    }
    //根据用户名、密码查询用户信息
    public function checkByUserPass($user,$pwd)
    {
        $sql = "SELECT * FROM $this->true_table WHERE username='$user' AND password='$pwd'";
        return $this->dao->fetchRow($sql);
    }
    
    
    
    
    
    
}