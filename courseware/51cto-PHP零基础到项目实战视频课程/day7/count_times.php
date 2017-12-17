<?php
	$str = "abcasdfsdaasasaaaaaaa";
	$arr = array();
	// $arr = explode( "", $str );
	for ( $i = 0; $i < strlen( $str ); $i++ ) {
		array_push( $arr, $str[$i] );
	}
	// print_r( $arr );
	// print_r( array_count_values( $arr ) );
	$timesArr = array_count_values( $arr );
	// arsort( $timesArr );
	asort( $timesArr );
	print_r( $timesArr );

?>