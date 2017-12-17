<?php
	header( "content-type:text/html;charset=utf-8" );

	$arr = array( 1, 20, 30, 0, 100 );
	for ( $i = 0; $i < count( $arr ); $i++  ){
		$min = $i;
		for ( $j = $i + 1; $j < count( $arr ); $j++ ){
			// if ( $arr[$min] > $arr[$j] ){
			if ( $arr[$min] < $arr[$j] ){
				$min = $j;
			}
		}
		if ( $min != $i ){
			swap( $arr[$min], $arr[$i] );
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