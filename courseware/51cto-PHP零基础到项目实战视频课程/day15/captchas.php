<?php
	session_start();
	$width = 150;
	$height = 50;

	$im = imagecreatetruecolor( $width, $height );
	$fillColor = imagecolorallocate( $im, mt_rand( 175, 255 ), mt_rand( 175, 255 ), mt_rand( 175, 255 ) );
	imagefilledrectangle( $im, 0, 0, $width, $height, $fillColor );		

	for ( $i = 0; $i < 10; $i++ ) {
		$lineColor = imagecolorallocate( $im, mt_rand( 0, 165 ), mt_rand( 0, 165 ), mt_rand( 0, 165 ) );
		imageline( $im, mt_rand( 0, $width ), mt_rand( 0, $height ), mt_rand( 0, $width ), mt_rand( 0, $height ), $lineColor );		
	}

	$chars = "abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
	$codeLen = 4;
	$char = '';
	for ( $i = 0; $i < $codeLen; $i++ ) {
		$char .= $chars[mt_rand( 0, strlen($chars) - 1 )];
	}

	$_SESSION['captchas'] = $char;
	$codeWidth = $width / $codeLen;
	for ( $i = 0; $i < $codeLen; $i++ ) {
		$codeColor = imagecolorallocate( $im, mt_rand( 0, 175 ), mt_rand( 0, 175 ), mt_rand( 0, 175 ) );
		imagettftext ( $im, 20, mt_rand( -30, 30 ), $codeWidth * $i + mt_rand( 5, 10 ), $height / 1.5, $codeColor, "./font/msyh.ttf", $char[$i] );
	}

	header( "content-type: image/png" );
	imagepng( $im );
	imagedestroy( $im );
?>