<?php
	function isEven ( $n ){
		if ( $n % 2 == 0 ){
			return true;
		}
	}

	$arr = range( 1, 10 );
	$newArr = array_filter( $arr, "isEven" );
	print_r( $newArr );

?>