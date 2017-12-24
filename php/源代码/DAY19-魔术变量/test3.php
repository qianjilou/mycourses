<?php
	header('content-type:text/html;charset=utf-8');
	//

	$a = 'hello';
	$b = &$a;
	$b = 'haha';

	var_dump($a, $b);

	