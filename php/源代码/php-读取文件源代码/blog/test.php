<?php
	header('content-type:text/html;charset=utf-8');
	//演示各个状态码

	//200
	//echo '<br> hello,world!';
	//告诉浏览器，重新定向到abc.html, 会返回302码
	//header('Location: abc.html');

	header('Refresh:5 ;url=abc.html');