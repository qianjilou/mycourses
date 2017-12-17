<?php
	// function add ( $n ){
	// 	$sum = 0;
	// 	$sum += $n;
	// 	return $sum;
	// }
	// echo add( 10 ) . "<br/>";
	// echo add( 20 ) . "<br/>";

	
	// $sum = 0;
	// function add ( $n ){
	// 	global $sum;
	// 	$sum += $n;
	// 	return $sum;	
	// }
	// echo add( 10 ) . "<br/>";
	// echo add( 20 ) . "<br/>";

	
	function add ( $n ) {
		static $sum = 0;
		$sum += $n;
		return $sum;
	}
	echo add( 10 ) . "<br/>";
	echo add( 20 ) . "<br/>";




?>