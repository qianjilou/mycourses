<?php
	header( "content-type:text/html;charset=utf-8" );
	
	$userInfo = array(
		array( "name" => "zhangsan", "age" => 22 ),
		array( "name" => "lisi", "age" => 23 ),
		array( "name" => "wangwu", "age" => 24 ),
	);

	// echo count( $userInfo );
	echo count( $userInfo, true );


?>
