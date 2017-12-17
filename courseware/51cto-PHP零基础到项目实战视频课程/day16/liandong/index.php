<?php
	require( "./Mysql.class.php" );
	require( "./smarty/Smarty.class.php" );

	$smarty = new Smarty();
	$smarty->cache_dir = "./cache";
	$smarty->compile_dir = "./compile";
	$smarty->template_dir = "./template";

	$provinceList = $mysql->getAll( "SELECT * FROM ecs_region WHERE parent_id = 1" );
	
	$smarty->assign( "provinceList", $provinceList );


	$smarty->display( "index.html" );
?>