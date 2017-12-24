<?php 
//可变函数
$a = 'sum';
function sum($num1,$num2){
	return $num1+$num2;
}
$sum = $a(1,2);   //$sum = sum(1,2);
echo $sum;


//定义并赋值
$b = 'get';
function get(){
	echo 1;
}
//变量名加括号，PHP系统会尝试解析成函数，如果有当前变量中的值为命名的函数，就会调用，如果没有报错。
$b();


 ?>