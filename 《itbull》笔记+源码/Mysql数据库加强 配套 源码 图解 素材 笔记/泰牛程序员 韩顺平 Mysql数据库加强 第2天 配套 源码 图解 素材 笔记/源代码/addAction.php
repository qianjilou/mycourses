<?php
	header("content-type:text/html;charset=utf-8");

	//处理添加的请求
	//1. 接收数据, 需要验证
	echo 'id= ' . $_POST['id'] . '<br>';

	//id 是整数
	$id = isset($_POST['id']) && is_numeric($_POST['id']) && !strpos($_POST['id'], '.') ? $_POST['id'] : '';
	
	//要求name 不能为空。
	$name =  empty($_POST['name']) ? '' :  $_POST['name'];
	//成绩必须是数字
	$chinese = isset($_POST['chinese']) && is_numeric($_POST['chinese']) ? $_POST['chinese'] : '';
	$math = isset($_POST['math']) && is_numeric($_POST['math']) ? $_POST['math'] : '';
	$english = isset($_POST['english']) && is_numeric($_POST['english']) ? $_POST['english'] : '';

	//后台验证
	if($id == '' || $name == '' || $math == '' || $chinese == '' || $english == ''){
		echo '你的数据输入有问题，请重新输入';
		header('Location: addUser.php');
		exit;
	}

	//添加操作
	//显示数据库中的数据
	$con = @mysql_connect('localhost', 'root', 'root');
	if(!$con){
		die('错误信息' . mysql_error());
	}

	//设置编码
	mysql_query('set names utf8');
	//选择数据库
	mysql_select_db('stusys');
	$sql = "INSERT INTO `student` VALUES($id, '$name', $chinese, $english, $math)";

	if(mysql_query($sql)){
		header('Location:ok.php');
		exit;
	}else{
		
		header('Location:err.php');
		exit;
	}
	//资源的回收，和关闭我们让系统完成





	