<?php 
//回调函数

function getSum($a,$b,$c){
	return $c($a,$b);   //sub(1,2);
}

function sum($num1,$num2){
	return $num1+$num2;
}

function sub($num1,$num2){
	return $num1-$num2;
}
$res = getSum(3,4,'sub');
echo $res;









 ?>