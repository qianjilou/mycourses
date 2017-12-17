<?php
	$arr = array( 10, 20, 100, 0, 2, 5, 40 );

	for ( $i = 0; $i < count( $arr ); $i++ ){
		$min = $i;
		for ( $j = $i + 1; $j < count( $arr ); $j++ ){
			if ( $arr[$min] > $arr[$j] ){
				$min = $j;
			}
		}
		if ( $min != $i ){
			swap( $arr[$min], $arr[$i] );
		}
	}
	foreach( $arr as $item ) {
		echo $item . "\t";
	}


	function swap ( &$n1, &$n2 ){
		$temp = $n1;
		$n1 = $n2;
		$n2 = $temp;
	}
?>