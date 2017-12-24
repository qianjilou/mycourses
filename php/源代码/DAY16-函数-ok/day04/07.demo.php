<?php 
//匿名函数--在PHP里用的少，在js用特别。
//
//普通方式
$sum = function ($num1,$num2){
	return $num1+$num2;
};    //是给变量结束符
$res = $sum(1,2);
var_dump($sum);
echo $res;

echo '<hr>';
//回调方式
function getSub($n1,$n2,$c){
	return $c($n1,$n2);
}
$res = getSub(3,2,function($n1,$n2){
	return $n1-$n2;
});
echo $res;
echo '<hr>';



//没有名的函数：如何调用？
//普通的方式转回调
//回调--在一个函数中调用另一个函数
function sum($n1,$n2,$c){
	return $c($n1,$n2);
}
$res = sum(1,2,function($n1,$n2){
	return $n1+$n2;
});
var_dump($res);




















echo '<hr>';

?>
//js中有好多的事件--事件：点击，键盘按键，页面加载
onload = function(){
	alert('页面加载完成');
}