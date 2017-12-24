<?php 
//函数的介绍
//1.函数的定义
function getSum($num1,$num2){
	$res = $num1+$num2;   //要封装函数的代码;
	echo $res;            //要封装函数的代码;
	return $res;          //返回值
}
//2.调用函数并传递参数
getSum(2,3);

//形参可以给默认值，且可以是多种类型的数据
function abc($num1,$num2,$fh=true){
	if($fh == false){
		return;
	}else{
		$res = $num1+$num2;
		echo $res;
	}
}
$res = abc(1,2,false);
var_dump($res);
$a = 3;
$b = 5;
$c = 2;
$f = 6;
abc($a,$b,$c,$f);



//如何返回多个值--数组
function getVal($num1,$num2=0){
	if(is_array($num1)){
		$res1 = $num1[0] + $num1[1];
		$res2 = $num1[0] - $num1[1];
		return $arr = array($res1,$res2);
	}else{
		$res1 = $num1+$num2;
		$res2 = $num1-$num2;
		return $arr = array($res1,$res2);
	}
}
$res = getVal(1,2);
var_dump($res);
$arr = array(3,4);
$res = getVal($arr);
var_dump($res);





 ?>