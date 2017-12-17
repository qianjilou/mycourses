<?php
	require( "Mysql.class.php" );
	if ( !empty( $_REQUEST['province_id'] ) ) {
		$sql = "SELECT * FROM ecs_region WHERE parent_id = " . $_REQUEST['province_id'];
		$provinceList = $mysql->getAll( $sql );	
		die( json_encode( $provinceList ) );
	}else if ( !empty( $_REQUEST['city_id'] ) ) {
		$sql = "SELECT * FROM ecs_region WHERE parent_id = " . $_REQUEST['city_id'];
		$districtList = $mysql->getAll( $sql );	
		die( json_encode( $districtList ) );
	}

?>