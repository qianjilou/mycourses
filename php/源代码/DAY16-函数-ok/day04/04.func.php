<?php 
//函数库
function getVal($number,$zhuan){
	$res = '';
	switch ($zhuan) {
		case 2:
			$res = decbin($number);
			break;
		case 10:
			$res = bindec($number);
			break;
	}
	return $res;
}








 ?>