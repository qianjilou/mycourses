<?php
	function show ( $v, $k ){
		echo $k . '--->' . $v . "<br/>";
	}	
	$arr = range( 1, 10 );
	array_walk( $arr, "show" );
?>