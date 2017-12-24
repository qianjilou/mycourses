<?php
//发送邮件：以我的163邮箱，给我的QQ邮箱发送邮件
//引入需要的核心类文件
require 'framework/vendor/PHPMailer/PHPMailer.class.phpmailer.php';
//实例化对象
$mail = new PHPMailer();

//3.设置属性，告诉我们的服务器，谁跟谁发送邮件
$mail -> IsSMTP();			//告诉服务器使用smtp协议发送
$mail -> SMTPAuth = true;		//开启SMTP授权
$mail -> Host = 'smtp.163.com';	//告诉我们的服务器使用163的smtp服务器发送
$mail -> From = 'alsothank@163.com';	//发送者的邮件地址
$mail -> FromName = 'itbull';		//发送邮件的用户昵称
$mail -> Username = 'alsothank';	//登录到163邮箱的用户名、账号
$mail -> Password = 'itbull2017';	//第三方登录的授权码，在邮箱里面设置

//编辑发送的邮件内容
$mail -> IsHTML(true);		//发送的内容使用html编写
$mail -> CharSet = 'utf-8';		//设置发送内容的编码
$mail -> Subject = '天气越来越热了，每天选一迟到的同学买雪糕吃';	//设置邮件的主题、标题
$mail -> MsgHTML('大家还是最好别迟到....可以省下钱自己偷偷多吃几根...');//发送的邮件内容主体
//告诉服务器接收人的邮件地址
$mail -> AddAddress('877216091@qq.com');
//调用send方法，执行发送
$result = $mail -> Send();

if($result){
    echo 'ok';
}else{
    echo $mail -> ErrorInfo;
}



