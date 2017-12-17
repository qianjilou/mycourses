<?php
	$str = "aaaa1111bb";
	// echo str_replace( "a", "A", $str );
	// $newStr = str_replace( "a", "A", $str );
	// echo str_replace( "b", "B", $newStr );

	echo str_replace( array( "a", "b" ), array( "A", "B" ), $str );


?>