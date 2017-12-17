<?php
	$str = "afdas1234asdf134as1234";
	function findNum ( $str ) {
		$temp = '';
		$arr = array();
		for ( $i = 0; $i < strlen( $str ); $i++ ) {
			if ( $str[$i] >= '0' && $str[$i] <= '9' ) {
				$temp .= $str[$i];
			}else {
				if ( $temp ) {
					array_push( $arr, $temp );
					$temp = '';
				}
			}
		}
		if ( $temp ) {
			array_push( $arr, $temp );
			$temp = '';
		}
		return $arr;	
	}	


	print_r( findNum( $str ) );


?>