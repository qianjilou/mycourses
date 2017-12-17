<?php
	$fileName = "./img/1.jpg";
	// $imgInfo = getimagesize( $fileName );
	// print_r( $imgInfo );
	list( $oriWidth, $oriHeight, $type, $attr ) = getimagesize( $fileName );
	
	// $width = 400;
	// $height = 400;

	$width = 960;
	$height= 540;

	$dstIm = imagecreatetruecolor( $width, $height );
	$srcIm = imagecreatefromjpeg( $fileName );	

	imagecopyresampled ( $dstIm, $srcIm, 0, 0, 0, 0, 
			$width, $height, $oriWidth, $oriHeight );

	imagejpeg( $dstIm, "2.jpg", 100 );
	imagedestroy( $dstIm );
	imagedestroy( $srcIm );

?>