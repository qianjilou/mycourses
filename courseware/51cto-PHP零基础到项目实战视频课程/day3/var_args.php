<?php

	function add (){
		// echo func_num_args();
		// print_r( func_get_args() );
		// $args = func_get_args();
		// print_r( $args );	
		// echo func_get_arg( 0 ) . "<br/>";
		// echo func_get_arg( 1 ) . "<br/>";
		// echo func_get_arg( 2 ) . "<br/>";
		// echo func_get_arg( 3 ) . "<br/>";

		// $args = func_get_args();
		// $sum = 0;
		// $count = func_num_args();
		// for ( $i = 0; $i < $count; $i++ ){
		// 	$sum += $args[$i];
		// }
		// return $sum;


		$args = func_get_args();
		$sum = 0;
		$count = count( $args );
		for ( $i = 0; $i < $count; $i++ ){
			$sum += func_get_arg( $i );	
		}
		return $sum;
	}
	echo add( 10, 20, 30, 40 );
?>