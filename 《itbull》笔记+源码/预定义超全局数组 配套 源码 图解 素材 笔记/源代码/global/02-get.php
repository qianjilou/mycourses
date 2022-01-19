<?php
	header("content-type:text/html;charset=utf-8");
	//说明_GET可能的中文乱码

	echo "<a href='getInfo.php?city=北京'>点击测试</a>";
	//如果出现了乱码，请这样编码一下
	$str = '北京';
	$str = urlencode($str);
	
	echo $str;
	echo "<a href='getInfo.php?city=$str'>点击测试</a>"; 