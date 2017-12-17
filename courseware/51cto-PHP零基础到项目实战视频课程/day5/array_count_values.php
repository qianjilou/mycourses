<?php
	$arr = array( 10, 20, 30, 10, 20, 30, 30, 30 );
	$newArr2 = array_count_values( $arr );
	print_r( $newArr2 );

	$newArr = array();

	foreach ( $arr as $k => $v ){
		if ( !isset( $newArr[$v] ) ){
			$newArr[$v] = 1;
		}else {
			$newArr[$v] += 1;			
		}
	}
	print_r( $newArr );

?>