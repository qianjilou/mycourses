<?php
	header( "content-type:text/html;charset=utf-8" );

	// $str = "abc234da";
	$str = "2341234";
	if ( preg_match( "/\D/", $str ) ) {
		echo "不全是数字";
	}else {
		echo "全是数字";		
	}

?>