<?php
	header('content-type:text/html;charset=utf-8');


	$file_full_path = 'd:/hello.txt';

	$fp = fopen($file_full_path, 'w');

	echo 'ok';