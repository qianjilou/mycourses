<?php
	$str = "    hello    ";
	echo "(" . $str . ")";
	echo "<hr/>";
	echo "(" . trim( $str ) . ")";
	echo "<hr/>";
	echo "(" . trimSpace( $str ) . ")";
	function trimSpace ( $str ) {
		$pattern = "/^\s+|\s+$/";
		return preg_replace_callback( $pattern, "noSpace", $str );
	}	
	function noSpace ( $match ) {
		// print_r( $match );
		// var_dump( $match );
		return "";
	}

	
?>