<?php
	$arr = range( 1, 100 );
	// $newArr = array_slice( $arr, 0, 10 );
	// $newArr = array_slice( $arr, 10, 10 );
	$newArr = array_slice( $arr, 20, 10 );
	foreach ( $newArr as $item ){
		echo $item . "<br/>";
	}
?>