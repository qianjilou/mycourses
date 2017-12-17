<?php
	$str = "php language,program";
	// $pattern = "/[,\s]/";
	// print_r( preg_split( $pattern, $str ) );

	// $newArr = explode( " ", $str );
	// print_r( $newArr );

	// $newStr = str_replace( " ", ",", $str );
	$newArr = explode( ",", str_replace( " ", ",", $str ) );
	print_r( $newArr );
?>