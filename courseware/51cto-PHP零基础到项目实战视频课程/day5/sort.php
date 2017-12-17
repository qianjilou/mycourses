<?php
	header( "content-type:text/html;charset=utf-8" );

	$arr = array( 1, 20, 30, 0, 100 );
	// sort( $arr );
	// rsort( $arr );
	// foreach ( $arr as $k => $v ){
	// 	echo $v . "<br/>";
	// }

	for ( $i = 0; $i < count( $arr ); $i++ ){
		for ( $j = $i + 1; $j < count( $arr ); $j++ ){
			// if ( $arr[$i] > $arr[$j] ){
			if ( $arr[$i] < $arr[$j] ){
				swap( $arr[$i], $arr[$j] );
			}
		}	
	}
	
	foreach ( $arr as $k => $v ){
		echo $v . "<br/>";
	}

	function swap ( &$n1, &$n2 ){
		$temp = $n1;
		$n1 = $n2;
		$n2 = $temp;
	}




?>