<?php
	$str = "thisis a test string";
	// $pattern = "/this/";
	$pattern = "/\bthis/";
	// $pattern = "/this\b/";
	var_dump( preg_match( $pattern, $str, $match ) );
	print_r( $match );
?>