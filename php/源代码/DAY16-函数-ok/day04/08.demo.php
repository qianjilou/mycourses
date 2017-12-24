<?php 
//内部函数
function getVal($n1,$n2){
	//需要制作一个 加法和 减法
	function sum($n1,$n2){
		return $n1+$n2;
	}
	function sub($n1,$n2){
		return $n1-$n2;
	}
	echo sum($n1,$n2);
	echo sub($n1,$n2);
}
getVal(1,2);
echo '<hr>';
echo sum(3,5);  //外部不能调用内部函数 










 ?>