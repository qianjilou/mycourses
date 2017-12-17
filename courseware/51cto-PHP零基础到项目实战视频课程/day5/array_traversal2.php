<?php
	header( "content-type:text/html;charset=utf-8" );

	$userInfo = array( 
		1 => array(	
			"name" => "张三",
			"age" => 20,
		),
		3 => array(
			"name" => "李四",
			"age" => 30,
		),
		5 => array(
			"name" => "王五",
			"age" => 40,
		),
	);

	// for ( $i = 0; $i < count( $userInfo ); $i++ ){
	// 	echo $userInfo[$i]['name'] . "<br/>";
	// }	

	foreach ( $userInfo as $k => $v ){
		echo $k . '--->' . $v['name'] . "<br/>";
		echo $k . '--->' . $v['age'] . "<br/>";
	}

	echo "<hr/>";
	
	foreach ( $userInfo as $k => $uInfo ){
		foreach ( $uInfo as $detail ){
			echo $k . '--->' . $detail . "<br/>";
		}
	}









?>