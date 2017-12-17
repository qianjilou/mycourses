<?php
	$str = "abcd";	
	if ( preg_match( "/a/", $str )  ) {
		echo $str . " contains a";
	}else {
		echo $str . " not contains a";
	}

	echo "<hr/>";

	$str = "abcd";	
	if ( preg_match( "/A/", $str )  ) {
		echo $str . " contains A";
	}else {
		echo $str . " not contains A";
	}

	echo "<hr/>";

	$str = "abcd";	
	if ( preg_match( "/A/i", $str )  ) {
		echo $str . " contains A or a";
	}else {
		echo $str . " not contains A or a";
	}

?>