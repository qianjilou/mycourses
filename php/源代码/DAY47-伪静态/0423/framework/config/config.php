<?php
//框架的配置文件
return array(
    //数据库的配置信息
    'host'              =>  '127.0.0.1',
    'user'              =>  'root',
    'pass'              =>  'root',
    'dbname'            =>  'ask',
    'port'              =>  3306,
    'charset'           =>  'utf8',
    'table_prefix'      =>  'ask_',
    
    //smarty的配置
    'left_delimiter'    =>  '<{',
    'right_delimiter'   =>  '}>',
    
    //默认的模块（前台、后台）
    'default_module'    =>  'home',
    //默认的控制器（IndexController）
    'default_controller'=>  'Index',
    //默认的方法（indexAction）
    'default_action'    =>  'indexAction',
    
    //邮件服务器的配置
    'email_host'        =>   'smtp.163.com',      //邮件服务器主机地址
    'sender'            =>   'alsothank@163.com', //发送者的邮箱
    'nickname'          =>   '泰牛程序员',           //昵称
    'account'           =>   'alsothank',         //发送者邮箱账号
    'token'             =>   'itbull2017',         //授权码
    //短信的配置 
    'accountSid'        =>  '8aaf07085b5fee9a015b894791c010f0',
    'accountToken'      =>  '7b75c145eb5b47779d349d17ec7562e0',
    'appId'             =>  '8aaf07085b5fee9a015b8947922e10f4',
    'serverIP'          =>  'app.cloopen.com',
    'serverPort'        =>  '8883',
    'softVersion'       =>  '2013-12-26',
    'expire_time'       =>  5,  //验证码有效期
    'tempId'            =>  1   //短信模板，测试账号的模板是1
);