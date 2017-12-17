<?php
	header( "content-type:text/html;charset=utf-8" );
	$fruit = array(
		"banana" => "香蕉",
		"apple" => "苹果",
		"pear" => "梨子",
		"watermelon" => "西瓜",
	);
	print_r( $fruit );
	print_r( array_values( $fruit ) );
?>