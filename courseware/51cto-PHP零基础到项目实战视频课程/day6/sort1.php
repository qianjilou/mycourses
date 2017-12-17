<?php
	$arr = array( 10, 20, 100, 0, 2, 5, 40 );

	for ( $i = 0; $i < count( $arr ); $i++ ){
		for ( $j = $i + 1; $j < count( $arr ); $j++ ){
			if ( $arr[$i] > $arr[$j] ){
				swap( $arr[$i], $arr[$j] );	
			}
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