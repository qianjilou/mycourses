<?php
	session_start();
	// echo session_id();
	// echo session_name();
	
	$_SESSION['name'] = "ghost";
	if ( isset( $_REQUEST['act'] ) && $_REQUEST['act'] == 'clear' ) {
		// unset( $_SESSION['name'] );
		$_SESSION = array();
		session_destroy();	
	}
?>

<a href="?act=clear">clear session</a>