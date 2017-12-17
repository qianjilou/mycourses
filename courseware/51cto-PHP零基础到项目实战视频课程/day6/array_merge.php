<?php
	$arr = array( "mysql", "php" );
	$arr2 = array( "mysql", "php" );
	$newArr = array_merge( $arr, $arr2 );
	print_r( $newArr );


	$arr3 = array( "mysql" => "mysql11", "php" => "php11" );
	$arr4 = array( "mysql22", "php" => "php22" );
	$newArr2 = array_merge( $arr3, $arr4 );
	print_r( $newArr2 );

?>