<?php
	
	$a = 10;
	$b = 10;
	if($a == $b)
	{
		echo '相等';
	}
	if($a > $b)
	{
		echo "<br>$a > $b";
	}

	if($a < $b)
	{
		echo "<br>$a < $b";
	}

	if($a === $b)
	{
		echo "<br>$a === $b";
	}

	//如果$a 和 $b的值或者类型不相同，就会为true
	if($a !== $b)
	{
		echo "<br>$a !== $b";
	}

	$a = 4;
	$b = 4.1;
	$B = 70;
	echo '<br>==' . $B . $b . ' ==<br>'; 

	if($a == $b)
	{
		echo "$a == $b";
	}
