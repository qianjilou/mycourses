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
    'token'             =>   'itbull2017'         //授权码
    
    
);