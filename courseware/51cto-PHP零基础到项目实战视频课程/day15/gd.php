<?Php
	$width = 300;
	$height = 200;
	$im = imagecreatetruecolor( $width, $height );

	$fillColor = imagecolorallocate( $im, 255, 0, 0 );
	imagefill( $im, 0, 0, $fillColor );

	//画点
	// $pixelColor = imagecolorallocate( $im, 0, 0, 0 );
	// imagesetpixel( $im, $width / 2, $height /2, $pixelColor );

	//用点画线
	// $pixelColor = imagecolorallocate( $im, 0, 0, 0 );
	// for ( $i = 0; $i <= $height; $i++ ) {
	// 	imagesetpixel( $im, $width / 2, $i, $pixelColor );
	// }

	//画线
	// $pixelColor = imagecolorallocate( $im, 0, 0, 0 );
	// imageline( $im, $width / 2, 0, $width / 2, $height, $pixelColor );

	//画矩形
	// $recColor = imagecolorallocate( $im, 0, 0, 0 );	
	// imagerectangle( $im, $width / 4, $height / 4, $width * 3 / 4, $height * 3 / 4, $recColor );
	// imagefilledrectangle( $im, $width / 4, $height / 4, $width * 3 / 4, $height * 3 / 4, $recColor );

	//多边形
	// $lineColor = imagecolorallocate( $im, 0, 0, 0 );	
	// imagepolygon( $im, array( $width / 2, $height / 4, $width * 3 / 4, $height * 3 / 4, $width / 4, $height * 3 / 4 ), 3, $lineColor );		
	// imagefilledpolygon( $im, array( $width / 2, $height / 4, $width * 3 / 4, $height * 3 / 4, $width / 4, $height * 3 / 4 ), 3, $lineColor );		

	//椭圆	
	// $lineColor = imagecolorallocate( $im, 0, 0, 0 );	
	// imageellipse( $im, $width / 2, $height / 2, $width, $height, $lineColor );
	// imageellipse( $im, $width / 2, $height / 2, 200, 200, $lineColor );


	// $lineColor = imagecolorallocate( $im, 0, 0, 0 );	
	// imagearc( $im, $width / 2, $height / 2, $width, $height, 0, 90, $lineColor );
	// imagearc( $im, $width / 2, $height / 2, $width, $height, 90, 180, $lineColor );
	// imagearc( $im, $width / 2, $height / 2, $width, $height, 0, 180, $lineColor );
	// imagefilledarc( $im, $width / 2, $height / 2, $width, $height, 0, 90, $lineColor, IMG_ARC_PIE );
	// imagefilledarc( $im, $width / 2, $height / 2, $width, $height, 0, 90, $lineColor, IMG_ARC_CHORD );
	// imagefilledarc( $im, $width / 2, $height / 2, $width, $height, 0, 90, $lineColor, IMG_ARC_NOFILL );
	// imagefilledarc( $im, $width / 2, $height / 2, $width, $height, 0, 90, $lineColor, IMG_ARC_EDGED );


	// $lineColor = imagecolorallocate( $im, 0, 0, 0 );	
	// imagestring( $im, 5, 100, 100, "php string", $lineColor );
	// imagestring( $im, 5, 100, 100, "php班机", $lineColor );


	$lineColor = imagecolorallocate( $im, 0, 0, 0 );	
	imagettftext ( $im, 20, 0, 0, 100, $lineColor, "./font/msyh.ttf", "中国" );







	header( "content-type:image/png" );
	imagepng( $im );
	imagedestroy( $im );
?>