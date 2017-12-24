<?php
	header('content-type:text/html;charset=utf-8');
	//如何获取所有的http请求的消息头(拒绝对192.168 服务)

	//我们的http的消息后，都会被封装到 $_SERVER (预定义超全局数组)
	//echo '<pre>';
	//var_dump($_SERVER);

	//拒绝对192.168 服务
	$remote_addr = $_SERVER['REMOTE_ADDR'];

	echo '<br> 地址是: ' . $remote_addr;

	/*
		strpos($remote_addr, '192.168'), 该函数可以判断$remote_addr
		中是否含有'192.168' ,如果有就会返回一个值，表示在$remote_addr串的第几个位置, 返回0表示，开头就出现.

		strpos — 查找字符串首次出现的位置 
		
		//如果有人，在1分钟内，连续访问该页面10次，就封杀该ip
		//先使用数据库. 

	*/

	if($remote_addr == '' || strpos($remote_addr, '192.168') === 0){
		
		echo '<br> 你的地址有问题，拒绝服务!';
	}else{
		echo '<br> 你通过验证，可以看';
	}