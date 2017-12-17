<?php
	
	$a = 10;
	$b = 20;
	function show (){
		global $a, $b;
		echo $a . '---' . $b . "<br/>";
	}
	show();
	function show2 () {
		global $a,$b;
		echo $a . '---' . $b . "<br/>";
	}
	show2();


?>