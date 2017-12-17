<?php
	$str = "this is a test string";
	$words = explode( " ", $str );
	print_r( $words );
	echo implode( ",", $words );

?>