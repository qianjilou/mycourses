<?php
	header( "content-type:text/html;charset=utf-8" );

	$arr = array( 10, 20, 30 );
	for ( $i = 0; $i < count( $arr ); $i++ ){
		echo $arr[$i] . "<br/>";
	}
	echo "<hr/>";
	for ( $i = 0; $i < count( $arr ); $i++ ){
		echo $arr[$i] . "<br/>";
	}
	echo "<hr/>";
	foreach( $arr as $item ){
		echo $item . "<br/>";
	}
	echo "<hr/>";
	foreach( $arr as $item ){
		echo $item . "<br/>";
	}
	echo "<hr/>";
	foreach ( $arr as $k => $v ){
		echo $k . "--->" . $v . "<br/>";
	}
?>