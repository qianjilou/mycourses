<?php
	header("content-type:text/html;charset=utf-8");
	//$_SERVER 数组
	
	echo '<pre>';
//	echo '浏览器的ip地址:' . $_SERVER['REMOTE_ADDR'];

//	if(strpos($_SERVER['REMOTE_ADDR'], '127.0') === 0){
//		header('Location: err.php');
//	}else{
//		echo '你的ip安全!';
//	}

	echo '显示apache版本号和php版本号';
	echo '<br>' . $_SERVER['SERVER_SOFTWARE'];

	echo '<br> 你请求的方式是:';
	echo '<br>' . $_SERVER['REQUEST_METHOD'];

	if($_SERVER['REQUEST_METHOD'] == 'GET'){
		//使用get方式接收
		echo '<br> get方式处理';
	}else if($_SERVER['REQUEST_METHOD'] == 'POST'){
		echo '<br> post方式处理';
	}