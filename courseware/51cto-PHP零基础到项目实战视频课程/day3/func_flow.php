<?php
	function fn1 (){
		echo "fn1<br/>";
		fn2();
	}
	function fn2 (){
		echo "fn2<br/>";
		fn3();
	}
	function fn3(){
		echo "fn3<br/>";
		fn4();
	}
	function fn4(){
		echo "fn4<br/>";
	}
	fn1();
?>