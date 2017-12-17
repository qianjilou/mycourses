<?php
	header( "content-type:text/html;charset=utf-8" );

	// $a = 'a';
	// $b = 'b';
	// var_dump( $a < $b );

	// $str = '18';
	$str = 'a';
	if ( '0' <= $str && $str <= '9' ) {
		echo $str . "是个0-9之间数字类型的字符";
	}else {
		echo $str . "不是个0-9之间数字类型的字符";
	}


?>