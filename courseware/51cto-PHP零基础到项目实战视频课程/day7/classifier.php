<?php
	$str = "abcd";	
	// $pattern = "/a{0,1}bc/";
	// $pattern = "/a{1}bc/";
	// $pattern = "/a{1,}bc/";
	// $pattern = "/a?bc/";
	// $pattern = "/a*bc/";
	$pattern = "/a+bc/";
	var_dump( preg_match( $pattern, $str, $match ) );
	print_r( $match );
?>