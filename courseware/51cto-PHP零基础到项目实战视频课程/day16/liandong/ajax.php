<?php
	require( "Mysql.class.php" );
	if ( !empty( $_REQUEST['province_id'] ) ) {
		$sql = "SELECT * FROM ecs_region WHERE parent_id = " . $_REQUEST['province_id']; 
		$cities = $mysql->getAll( $sql );
		echo json_encode( $cities );
	}else if ( !empty( $_REQUEST['city_id'] ) ) {
		$sql = "SELECT * FROM ecs_region WHERE parent_id = " . $_REQUEST['city_id']; 
		// echo $sql;
		$district = $mysql->getAll( $sql );
		echo json_encode( $district );
		//json_decode
	}
?>