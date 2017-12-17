<?php
	header( "content-type:text/html;charset=utf-8" );

	$score = 82;
	if ( $score < 60) {
		echo "不及格";
	}else if ( $score < 70 ) {
		echo "及格";	
	}else if ( $score < 80 ) {
		echo "中等";
	}else if ( $score < 90 ) {
		echo "良好";
	}else {
		echo "优秀";
	}


	$level = floor( $score / 10 );
	switch ( $level ) {
		case 0:
		case 1:
		case 2:
		case 3:
		case 4:
		case 5:
			echo "不及格";
			break;
		case 6:
			echo "及格";	
			break;
		case 7:
			echo "中等";
			break;
		case 8:
			echo "良好";
			break;
		case 9:
			echo "优秀";
			break;
		case 10:
			echo "满分";
	}


?>