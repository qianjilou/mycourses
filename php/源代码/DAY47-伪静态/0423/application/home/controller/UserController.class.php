<?php
namespace home\controller;
use framework\core\Controller;
use framework\tools\Captcha;
use framework\tools\Verify;
use framework\core\Factory;
use framework\tools\Email;
use framework\tools\Message;

/*
 * 用户模块，负责用户的处理（注册、登录）
 */
class UserController extends Controller
{
    //1. 显示注册用户的表单
    public function registerAction()
    {
       $this->smarty->display('user/register.html'); 
    }
    //2. 接收表单数据并把用户保存到数据库
    public function doRegisterAction()
    {
        //echo '<pre>';
        //var_dump($_POST);
        //先把验证的流程的列出来
        //1. 验证是否同意网站的协议
        if(isset($_POST['agreement_chk'])){
            //说明同意协议
            //2. 验证码是否正确(拿POST提交的 和 session中的进行比较)
            //session_start();
            if(strtolower($_SESSION['code']) == strtolower($_POST['seccode_verify'])){
                //验证码正确
                //3. 验证用户名、密码、邮箱是否符合规则
                $verify = new Verify();
                //用户名
                $result1 = $verify -> checkUser($_POST['user_name']);
                $result2 = $verify -> checkPass($_POST['password']);
                $result3 = $verify -> checkEmail($_POST['email']);
                if($result1 && $result2 && $result3){
                    //说明都符合规则
                    //还要验证用户名、邮箱是否已经注册
                    $m_user = Factory::M('User');
                    $result = $m_user -> hasUserEmail($_POST['user_name'],$_POST['email']);
                    if($result){
                        //查询到了，说明用户名、或邮箱已经注册
                        $this->jump('?m=home&c=user&a=registerAction', '用户名、邮箱已经注册');
                    }else{
                        //没有查到，说明用户名、或邮箱可以使用
                        //直接保存到数据库
                        $data['username'] = $_POST['user_name'];
                        $data['password'] = md5($_POST['password']);
                        $data['email'] = $_POST['email'];
                        $data['is_active'] = 0; //未激活
                        $data['reg_time'] = time();
                        $data['activate_code'] = md5(mt_rand(1000,9999).time()); //唯一的激活码
                        $result = $m_user -> insert($data);
                        if($result){
                            //注册成功
                            //发送邮件
                            $title = '注册成功，请激活';
                            $content = <<<HTML
<a href="http://localhost/0418/index.php?m=home&c=user&a=activateAction&code={$data['activate_code']}&user={$data['username']}">点击激活</a>
HTML;
                            $res = Email::send($title, $content, $data['email']);
                            if($res === true){
                                //注册成功
                                $this->jump('?m=home&c=user&a=loginAction', '注册成功');
                            }else{
                                //注册失败
                                $this->jump('?m=home&c=user&a=registerAction', '注册失败');
                            }
                        }else{
                            //注册失败
                            $this->jump('?m=home&c=user&a=registerAction', '注册失败，请重试');
                        }                       
                    }
                }else{
                    //有不符合规则的
                    //验证码错误
                    $this->jump('?m=home&c=user&a=registerAction', $verify->showError());
                }
            }else{
                //验证码错误
                $this->jump('?m=home&c=user&a=registerAction', '验证码错误');
            }            
        }else{
            //没有同意协议
            $this->jump('?m=home&c=user&a=registerAction', '请先同意协议');
        }
        
    }
    //3. 生成验证码
    public function makeCaptchaAction()
    {
        $captcha = new Captcha();
        $captcha -> font_file = FONT_PATH.'STHUPO.TTF';
        $captcha -> makeImage();
    }
    //4.激活邮件
    public function activateAction()
    {
        //接收传递过来的用户名、激活码
        $user = $_GET['user'];
        $code = $_GET['code'];
        //1. 先去数据库查询是否给该用户发送过该激活码
        $m_user = Factory::M('User');
        $result = $m_user -> checkByUserCode($user,$code);
        if($result){
            //2. 查询到了，验证是否已过期
            // 拿注册时间 和 当前时间 比较 》 24小时，已过期
            if(time() - $result['reg_time'] > 24*3600){
                $this->jump('?c=user&a=registerAction', '激活链接已过期');
            }else{
                //3. 没有过期,再验证是否已经激活了
                if($result['is_active']==1){
                    //说明已经激活了
                    $this->jump('?c=user&a=loginAction', '已激活请直接登录');
                }else{
                    //说明没有激活，在这里激活,也就是将is_active更新为1
                    $data['is_active'] = 1;
                    $where = array('user_id'=>$result['user_id']);
                    $res = $m_user -> update($data,$where);
                    if($res){
                        $this->jump('?c=user&a=loginAction', '激活成功请登录');
                    }else{
                        $this->jump('?c=user&a=registerAction', '激活失败');
                    }
                }                
            }            
        }else{
            //没有查询到，激活失败
            $this->jump('?c=user&a=registerAction', '请重新发送激活邮件');
        }
    }
    
    //5.，显示登录界面
    public function loginAction()
    {
        $this->smarty->display('user/login.html');
    }
    
    //6. 登录的验证操作
    public function doLoginAction()
    {
        //1. 先验证用户名、密码是否正确
        $user = $_POST['user_name'];
        $pwd = md5($_POST['password']);
        $m_user = Factory::M('User');
        $result = $m_user -> checkByUserPass($user,$pwd);
        if($result){
            //2. 说明用户名、密码正确,再验证是否已激活
            if($result['is_active']==1){
                //3. 说明已经激活，判断是否记住我
                if(isset($_POST['net_auto_login'])){
                    //说明记住我，记住之后再登录
                    setcookie('uname',$result['username'],time()+7*24*3600);
                    setcookie('keysid',$result['password'],time()+7*24*3600);
                }
                //说明没有记住我,直接登录
                //session_start();
                //$_SESSION['user'] = $result['username'];
                $_SESSION['user'] = $result;
                
                $this->jump('index.php', '登录成功');
            }else{
                //说明未激活
                $this->jump('?c=user&a=loginAction', '请先激活在登录');
            }            
        }else{
            //说明用户名、或密码错误
            $this->jump('?c=user&a=loginAction', '用户名或密码错误');
        }        
    }
    
    //退出登录
    public function logoutAction()
    {
        //删除session、cookie里面的信息
        //session_start();
        unset($_SESSION['user']);
        setcookie('uname','',time()-1);
        setcookie('keysid','',time()-1);
        
        $this->jump('?c=user&a=loginAction','退出成功');
    }
    
    //发送短信验证码的表单
    public function msmAction()
    {
        $this->smarty->display('user/msm_register.html');
    }
    //验证用户输入的验证码和我们发送的验证码进行比较
    public function MsgRegisterAction()
    {
        $this->smarty->display('user/do_register.html');
    }
    //给手机发送短信
    public function sendMessageAction()
    {
        //接收表单提交的数据
        //echo '<pre>';
        //var_dump($_POST);
        if(!isset($_POST['agreement_chk'])){
            $this->jump('?c=user&a=msmAction', '请先同意协议');
        }else{
            //图片验证是否正确
            session_start();
            if(strtolower($_SESSION['code'])==strtolower($_POST['seccode_verify'])){
                //说明验证码正确
                //3. 验证手机号码是否符合规则
                $very = new Verify();
                $result = $very ->checkPhone($_POST['phone']);
                if($result){
                    //1. 发送短信验证码
                    $message = new Message();
                    $code = mt_rand(1000,9999);
                    $expire = $GLOBALS['config']['expire_time'];
                    
                    $tempId = $GLOBALS['config']['tempId'];
                    $datas = array($code,$expire);
                    $message ->sendTemplateSMS($_POST['phone'], $datas, $tempId);
                    //2. 把发送的短信的内容保存到数据库
                    $m_model = Factory::M('Message');
                    $data['phone'] = $_POST['phone'];
                    $data['code'] = $code;
                    $data['send_time'] = time();
                    $result = $m_model -> insert($data);
                    if($result){
                        $this->jump('?c=user&a=MsgRegisterAction', '发送成功');
                    }
                }else{
                    $this->jump('?c=user&a=msmAction', '手机都写不对');
                }
            }else{
                //图片验证码错误
                $this->jump('?c=user&a=msmAction', '图片验证码错误');
            }
        }
    }
    
    //手机注册方法
    public function doSubmitAction()
    {
        //echo '<pre>';
        //var_dump($_POST);
        //1. 验证是否同意协议
        if(isset($_POST['agreement_chk'])){
            //同意
            //2. 图形验证码是否正确
            session_start();
            if(strtolower($_SESSION['code'])==strtolower($_POST['seccode_verify'])){
                //验证码正确
                //3. 用户名、密码、手机号码是否符合规则
                $verify = new Verify();
                $result1 = $verify ->checkUser($_POST['user_name']);
                $result2 = $verify ->checkPass($_POST['password']);
                $result3 = $verify ->checkPhone($_POST['msm']); //手机号码
                if($result1 && $result2 && $result3){
                    //都符合规则
                    //4. 用户名、手机号码是否已注册
                    $m_user = Factory::M('User');
                    $res = $m_user -> checkByUserPhone($_POST['user_name'],$_POST['msm']);
                    if($res){
                        //说明已注册
                        $this->jump('?c=user&a=MsgRegisterAction', '用户名或手机已注册');
                    }else{
                        //说明未注册
                        //5. 短信验证码是否已过期
                        //接收表单提交的  - 数据表保存的发送时间  > 配置文件定义的有效期
                        $m_model = Factory::M('Message');
                        $send_time = $m_model -> checkByPhoneCode($_POST['msm'],$_POST['msm_code']);
                        //因为配置文件的有效期单位是分钟
                        if(time()-$send_time > $GLOBALS['config']['expire_time']*60){
                            //说明过期
                            $this->jump('?c=user&a=MsgRegisterAction', '验证码已过期');
                        }else{
                            //未过期
                            $data['username'] = $_POST['user_name'];
                            $data['password'] = $_POST['password'];
                            $data['phone'] = $_POST['msm'];
                            $data['is_active'] = 1;
                            $result4 = $m_user -> insert($data);
                            if($result4){
                                $this->jump('?c=user&a=LoginAction', '注册成功，请登录');
                            }else{
                                $this->jump('?c=user&a=MsgRegisterAction', '注册失败，请重试');
                            }
                        }
                    }
                }else{
                    //有任何一个不符合规则
                    $this->jump('?c=user&a=MsgRegisterAction', $verify->showError());
                }
            }else{
                //验证码不正确
                $this->jump('?c=user&a=MsgRegisterAction', '验证码错误');
            }
        }else{
            //不同意
            $this->jump('?c=user&a=MsgRegisterAction', '请先同意协议');
        }
        
        
        
       
        
    }
}