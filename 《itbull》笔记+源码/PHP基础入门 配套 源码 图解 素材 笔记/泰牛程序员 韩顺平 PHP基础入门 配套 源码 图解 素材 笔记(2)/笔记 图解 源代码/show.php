<?php
	
	header("content-type:text/html;charset=utf-8");
	//接收用户提交的层数这个值 
	$n = $_POST['cengshu'];
	
	//打印对应的图形

	for($i = 0; $i < $n; $i++)
	{
		//循环3次
		//每一次打印的星号时候$i+1个
		for($j = 0; $j < $i+1; $j++)
		{
			echo '▲';
		}
		echo '<br>';
	}