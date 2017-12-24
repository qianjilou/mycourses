<?php 
//函数的调用机制

function getVal(&$num1,&$num2){
	$res = $num1+$num2;
	return $res;
}
$num1 = 10;
$num2 = 20;
$res = getVal($num1,$num2);
echo $res;
echo '<hr>';


//引用传递
$a = 8;
function abc(&$b){
	$b = 3;
	echo $b; //3
}
abc($a);
echo $a;  //6



 ?>