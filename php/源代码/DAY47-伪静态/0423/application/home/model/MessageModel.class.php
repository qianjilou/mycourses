<?php
namespace home\model;
use framework\core\Model;

class MessageModel extends Model
{
    //protected $logic_table = 'message';
    //根据手机号码、验证码查询发送的时间
    public function checkByPhoneCode($phone,$code)
    {
        $sql = "SELECT send_time FROM $this->true_table WHERE phone='$phone' AND code='$code'";
        return $this->dao->fetchColumn($sql);
    }
}