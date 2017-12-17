<?php
	header( "content-type:text/html;charset=utf-8" );

	function fn1 ( $n1, $n2 ){
		return $n1 + $n2;
	}

	function fn2 ( $n1, $n2 ){
		return $n1 * $n1 + $n2 * $n2;
	}

	function fn3 ( $n1, $n2 ){
		return $n1 * $n1 * $n1 + $n2 * $n2 * $n2;
	}

	// $funcName = "fn1";
	// $funcName = "fn2";
	$funcName = "fn3";
	echo $funcName( 10, 20 );
?>