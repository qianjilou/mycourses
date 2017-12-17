<?php
	$fileName = "./img/1.jpg";

	list( $oriWidth, $oriHeight, $type, $attr ) = getimagesize( $fileName );	

	$width = 400;
	$height = 400;

	$srcIm = imagecreatefromjpeg( $fileName );
	$dstIm = imagecreatetruecolor( $width, $height );

	imagecopyresampled ( $dstIm, $srcIm, 
			0, 0, 100, 100, 
			$width, $height, $width, $height );
	imagejpeg( $dstIm,  "1_crop.jpg", 100 );
	imagedestroy( $dstIm );
	imagedestroy( $srcIm );

?>