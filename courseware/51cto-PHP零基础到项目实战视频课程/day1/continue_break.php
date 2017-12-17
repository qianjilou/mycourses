<?php
	header( "content-type:text/html;charset=utf-8" );
	// for ( $i = 1; $i <= 10; $i++ ) {
	// 	echo $i . "<br/>";
	// }	


	for ( $i = 1; $i <= 10; $i++ ) {
		if ( $i == 5 ) {
			// continue;
			break;
		}
		echo $i . "<br/>";
	}	

?>