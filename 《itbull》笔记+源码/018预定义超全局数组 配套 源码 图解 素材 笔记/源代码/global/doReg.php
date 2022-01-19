<?php
	header("content-type:text/html;charset=utf-8");
	//介绍注册页面的数据

	//接收喜欢的旅游项目
	$hobby = isset($_POST['hobby']) ?  $_POST['hobby'] : '';

	echo '<pre>';
	var_dump($hobby);

	//接收到性别
	$sex = isset($_POST['sex']) ?  $_POST['sex'] : '';

	echo '<br> sex = ' . $sex;

	//接收籍贯
	$jiguan = isset($_POST['jiguan']) ?  $_POST['jiguan'] : '';
	echo '<br> 籍贯 = ' . $jiguan;

	//接收个人介绍
	$jieshao = isset($_POST['jieshao']) ?  $_POST['jieshao'] : '';

	echo '<br> 介绍 = ' . $jieshao;

	//头像的文件名

	$head = isset($_POST['head']) ? $_POST['head'] : '';

	echo '<br> head ='  . $head;

	//获取到哪个按钮被点击
	$button_val = isset($_POST['mybutton']) ? $_POST['mybutton'] : '';

	echo '<br> 被点击的按钮的 值是' . $button_val;