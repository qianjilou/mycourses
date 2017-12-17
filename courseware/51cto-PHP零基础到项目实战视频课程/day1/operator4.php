<?php
	// $userName = "ghost";
	// $userPwd = "ghost1234";

	// if ( $userName == "ghost" && $userPwd == "ghost123" ) {
	// 	echo "用户名和密码填写正确";
	// }else {
	// 	echo "用户名和密码填写错误";
	// }


	// $userName = "ghost2";
	// $userPwd = "ghost1234";
	
	// if ( $userName == "ghost" || $userPwd == "ghost123" ) {
	// 	echo "用户和密码至少有个是正确的";
	// }else {
	// 	echo "用户名和密码都是错误的";
	// }

	
	$userName = "ghost";
	if ( empty( $userName ) ) {
		echo "用户名为空";		
	}else {
		echo "用户名不为空";
	}


?>