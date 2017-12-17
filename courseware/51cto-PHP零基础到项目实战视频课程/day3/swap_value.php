<?php
	header( "content-type:text/html;charset=utf-8" );

	$a = 10;
	$b = 20;
	echo "<h3>a和b交换之前的值是:</h3>";
	echo "a={$a} b={$b}<br/>";

	// $temp = $a;
	// $a = $b;
	// $b = $temp;
	// echo "<h3>a和b交换之后的值是:</h3>";
	// echo "a={$a} b={$b}<br/>";


	swap( $a, $b );
	echo "<h3>a和b交换之后的值是:</h3>";
	echo "a={$a} b={$b}<br/>";

	// function swap( $n1, $n2 ){
	// 	$temp = $n1;
	// 	$n1 = $n2;
	// 	$n2 = $temp;
	// }


	function swap ( &$n1, &$n2 ){
		$temp = $n1;
		$n1 = $n2;
		$n2 = $temp;
	}

?>