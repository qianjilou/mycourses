<?php	
	
	//先输出3层
	header("content-type:text/html;charset=utf-8");
	$n = 3;
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