<?php
	header( "content-type:text/html;charset=utf-8" );

	// function showUserInfo ( $name, $sex, $age ){
	// 	echo $name . '---' . $sex . '---' . $age . "<br/>";		
	// }
	// showUserInfo( "张三", "男", 20 );
	// showUserInfo( "张三" );


	// function showUserInfo ( $name, $sex = "男", $age = 20 ){
	// 	echo $name . '---' . $sex . '---' . $age . "<br/>";		
	// }
		
	// showUserInfo( "张三" );

	function showUserInfo ( $name = "张三", $sex, $age = 20 ){
		echo $name . '---' . $sex . '---' . $age . "<br/>";		
	}

	showUserInfo( "女" );



?>