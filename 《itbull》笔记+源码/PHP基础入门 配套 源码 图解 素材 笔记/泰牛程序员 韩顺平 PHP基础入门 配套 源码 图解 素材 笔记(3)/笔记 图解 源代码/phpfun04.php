<?php
	header("content-type:text/html;charset=utf-8");
	
	/*

		一个有3层
				*            1层 打出2个空格(3-1)  *1个 2*(1-1) +1
			   ***           2层 打出1个空格(3-2)  *3个 2*(2-1) +1
			  *****          2层 打出0个空格(3-3)  *5个 2*(3-1) +1
	思路: 先打空格，再打星号
	//规律

	*/
	printTu(4);
	function printTu($n)
	{
		
		for($i = 0; $i < $n; $i++ )
		{
			//开始打空格
			for($k = 0; $k < $n-$i+1; $k++)
			{
				echo '&nbsp;';
			}
			//开始打星号
			for($j = 0; $j < 2*$i + 1; $j++)
			{
				echo '▲';
			}
			//换行
			echo '<br>';
		}
	}

	