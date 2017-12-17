<?php
	$arr = range( 100, 120 );
	print_r( $arr );
	$newArr = array_rand( $arr, 10 );
	print_r( $newArr );
?>