<?php
	$str = "abca";
	// $pattern = '/(a)(b)(c)\\1/';
	$pattern = '/(a)(b)(c)\\2/';
	var_dump( preg_match( $pattern, $str ) );
?>