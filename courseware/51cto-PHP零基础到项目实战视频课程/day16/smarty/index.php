<?php
	session_start();
	require( "./smarty/Smarty.class.php" );

	$smarty = new Smarty();
	// print_r( $smarty );

	$smarty->cache_dir = "./cache";
	$smarty->compile_dir = "./compile";
	$smarty->template_dir = "../template";

	$smarty->assign( "title", "smarty模板引擎" );

	$userInfo = array(
		"bajie" => "八戒",
		"wukong" => "悟空",
		"bailongma" => "白龙马",
	);
	$smarty->assign( "userInfo", $userInfo );

	$userList = array(
		"hr" => array(
			"zhangsan" => "张三",
			"lisi" => "李四",
			"王五" => "王五",
		),
		"sale" => array(
			"wukong" => "悟空",
			"bajie" => "八戒",
			"bailongma" => "白龙马",
		),
	);

	$smarty->assign( "a", 10 );
	$smarty->assign( "b", 50 );

	$_SESSION['admin'] = "ghost";


	$smarty->assign( "userList", $userList );
	$smarty->display( "index.html" );
?>