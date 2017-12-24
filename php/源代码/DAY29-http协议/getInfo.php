<?php
	header('content-type:text/html;charset=utf-8');
	//getInfo.php, 接收我们的提交的数据

	echo '<pre>';
	var_dump($_GET);
	echo '<br>----------';
	var_dump($_POST);
	echo '<br>***********';
	var_dump($_SERVER);