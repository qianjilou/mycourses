<?php 
$arr = array(1,2,3,4,5);
foreach($arr as $k=>$v){
	echo $v;
};
echo "<hr />";
foreach($arr as $k=>$v):
	echo $v;
endforeach;
?>