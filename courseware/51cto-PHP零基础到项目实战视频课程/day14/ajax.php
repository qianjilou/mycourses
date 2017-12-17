<?php
	if ( isset( $_GET['act'] ) && $_GET['act'] == 'q' ) {
		echo $_GET['user_name'] . ":" . date( "Y-m-d H:i:s" );
	}else if ( isset( $_POST['act'] ) && $_POST['act'] == 'q' ) {
		echo $_POST['user_name'] . ":" . date( "Y-m-d H:i:s" );
	}
?>