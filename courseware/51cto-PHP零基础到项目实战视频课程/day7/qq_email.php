<?php
	// $str = "359173352";
	// $pattern = '/^[1-9]\d{4,10}$/';
	// var_dump( preg_match( $pattern,	$str ) );

	$str = "test@126.com.cn";
	$pattern = '/^\w+@\w+(\.\w+){1,3}$/';

	var_dump( preg_match( $pattern,	$str ) );
?>