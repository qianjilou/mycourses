<?php
	header( "content-type:text/html;charset=utf-8" );

	function showNum ( $n ){
		echo $n . "\t";
		if ( $n > 0 ){
			showNum( $n - 1 );
		}else {
			echo "<----->" . "\t";	
		}
		echo $n . "\t";
	}
	// showNum( 3 );

	function fab ( $n ) {
		if ( $n <= 2 ){
			return 1;
		}else {
			return fab( $n - 1 ) + fab( $n - 2 );
		}
	}
	// echo fab( 5 );
	// for ( $i = 1; $i < 20; $i++ ){
	// 	echo fab( $i ) . "\t";
	// }


	function fac( $n ){
		if ( $n == 1 ){
			return 1;
		}else {
			return $n * fac( $n - 1 );
		}
	}
	echo fac( 4 );





?>