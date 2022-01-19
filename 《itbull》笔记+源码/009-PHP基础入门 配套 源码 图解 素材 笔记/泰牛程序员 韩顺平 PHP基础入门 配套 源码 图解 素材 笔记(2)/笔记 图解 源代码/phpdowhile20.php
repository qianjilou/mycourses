<?php
	//使用do..while输出10句话
	header("content-type:text/html;charset=utf-8");
	$i = 0;
	do{
		echo '我是泰牛程序员<br>';
		$i++;
	}while($i < 10);