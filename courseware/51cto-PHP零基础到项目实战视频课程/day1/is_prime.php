<?php
	// $a = 2;
	// $a = 20;
	$a = 7;
	if ( $a < 2 ) {
		echo $a . "不是素数<br/>";
	}else {
		$flag = true;
		for ( $i = 2; $i < $a; $i++ ) {
			if ( $a % $i == 0 ) {
				$flag = false;
				break;
			}
		}
		if ( $flag ) {
			echo $a . "是素数";
		}else {
			echo $a . "不是素数";
		}
	}
?>