<?php 
//说明：在一个函数内部再次有条件调用自己（当前函数），这个时候就称为“递归调用”，即自己调用自己。
function abc($a){
	if($a > 2){
		abc(--$a);
	}
	echo $a;  //2 2 3
}
abc(4);








 ?>