<?php
	$a = 20;
	if ( $a > 10 ){
		echo "a大于10<br/>";
	}

	if ($a > 10) :
		echo "a大于10<br/>";
	endif;


	$score = 72;
	$level = floor( $score / 10 );
	switch( $level ){
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
			break;
	}

	switch( $level ):
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
			break;
	endswitch;

	echo "<hr/>";

	if ( $a > 30 ):
		echo "a大于30";
	else:
		echo "a小于30";
	endif;


	// for ( $i = 0; $i < 10; $i++ ) :
	// 	echo $i . "\t";
	// endfor;

	echo "<hr/>";

	if ( $a < 60 ):
		echo "不及格";
	elseif( $a < 70):
		echo "及格";
	elseif( $a < 80 ):
		echo "中等";
	elseif( $a < 90 ):
		echo "良好";
	else:
		echo "优秀";
	endif;


	$i = 1;
	$sum = 0;
	while ( $i <= 100 ):
		$sum += $i;
		$i++;
	endwhile;
	echo $sum;



?>