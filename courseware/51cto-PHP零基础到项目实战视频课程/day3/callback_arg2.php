<?php
	function isEven( $n ){	
		if ( $n % 2 == 0 ){
			return true;
		}
	}

	function isOdd ( $n ){
		if ( $n % 2 != 0 ){
			return true;
		}
	}
	// for ( $i = 0; $i < 100; $i ++ ){
	// 	if ( isEven( $i ) ) {
	// 		echo $i . "<br/>";
	// 	}
	// }

	function filter( $fn ){
		for ( $i = 0; $i < 100; $i++ ){
			if ( $fn( $i ) ) {
				echo $i . "<br/>";
			}
		}
	}
	// filter( "isEven" );
	filter( "isOdd" );


?>