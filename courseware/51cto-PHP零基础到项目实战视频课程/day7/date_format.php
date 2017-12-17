<?php
	$str = "Jan 01 2015";
	// echo preg_replace( "/(\w+) (\d+) (\d+)/", '${1} ${2} 2016', $str );

	$str = "2015 01 01";
	// echo preg_replace( "/(\w+) (\d+) (\d+)/", '${1}.${2}.2016', $str );
	// echo preg_replace( "/(\w+) (\d+) (\d+)/", '${1}/${2}/2016', $str );
	echo preg_replace( "/(\w+) (\d+) (\d+)/", '\\1/\\2/2016', $str );
?>