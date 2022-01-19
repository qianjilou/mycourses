<?php
	header("content-type:text/html;charset=utf-8");
	//getInfo.php

	//echo 'city=' . $_GET['city'];

	//如果针对urlencode数据，我们应该解码
	$city = urldecode($_GET['city']);
	//$city = urldecode("%E5%8C%97%E4%BA%AC");
	echo $city;