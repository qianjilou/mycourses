<?php
namespace framework\core;
/*
 * 基础控制器类，用来封装控制器类的公共的方法
 */
class Controller
{
    protected $smarty;
    public function __construct()
    {
        //初始化时区
        $this->initTimezone();
        //初始化smarty
        $this->initSmarty();
    }
    public function initTimezone()
    {
        date_default_timezone_set('PRC');
    }
    public function initSmarty()
    {
        $this->smarty = new \Smarty();
        $this->smarty -> left_delimiter = '<{';
        $this->smarty -> right_delimiter = '}>';
        $this->smarty -> setTemplateDir(APP_PATH.MODULE.'/view/');
        $this->smarty  -> setCompileDir(APP_PATH.MODULE.'/runtime/tpl_c');
    }
    
    //页面跳转的方法
    public function jump($url,$message,$delay=3)
    {
        header("Refresh:$delay;url=$url");
        echo $message;
        die;
    }
    
    //防跳墙验证
    public function isLogin()
    {
        //1. 先判断是否输入正确的用户名、密码
        session_start();
        if(!isset($_SESSION['user'])){
            //没有登录成功
            //2. 判断浏览器端是否保存了上次登录成功的信息
            if(!isset($_COOKIE['uname'])){
                //说明cookie中没有用户的信息
                $this->jump('?c=user&a=loginAction', '非法访问,请登录');
            }else{
                //说明cookie中有用户的信息，还要查询用户信息是否修改了
                $m_user = Factory::M('User');
                $result = $m_user -> checkByUserPass($_COOKIE['uname'],$_COOKIE['keysid']);
                if(!$result){
                    //说明修改过密码
                    $this->jump('?c=user&a=loginAction', '密码已过期，请重新登录');
                }else{
                    //说明没有改过密码,为了在前台首页统一使用用户信息
                    $_SESSION['user'] = $_COOKIE['uname'];
                }
            }
        }
    }


    //防跳墙的验证
    
}