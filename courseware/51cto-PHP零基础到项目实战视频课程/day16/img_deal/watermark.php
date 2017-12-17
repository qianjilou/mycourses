<?php
	$fileName = "./img/1.jpg";
	$wMarkImg = "./baidu.png";

	list( $dstWidth, $dstHeight, $dType, $dAttr ) = getimagesize( $fileName );
	list( $wWidth, $wHeight, $wType, $wAttr ) = getimagesize( $wMarkImg );

	$dstIm = imagecreatefromjpeg( $fileName );	
	$srcIm = imagecreatefrompng( $wMarkImg );

	$cx = ( $dstWidth - $wWidth ) / 2;
	$cy = ( $dstHeight - $wHeight ) / 2;
	imagecopy( $dstIm, $srcIm, $cx, $cy, 0, 0, $wWidth, $wHeight );	

	imagejpeg( $dstIm, "1.jpg", 100 );
	imagedestroy( $srcIm );
	imagedestroy( $dstIm );
	


?>