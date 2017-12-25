<?php
	header('content-type:text/html;charset=utf-8');

	$str = '北京你好';

	//可以先编码一下

	$new_str = urlencode($str);

	echo '<pre>';
	var_dump($new_str);

	$new2_str = urldecode('%E5%8C%97%E4%BA%AC%E4%BD%A0%E5%A5%BD');

	var_dump($new2_str);