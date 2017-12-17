<?php
	session_start();
	require( "Mysql.class.php" );
	
	if ( isset( $_REQUEST['act'] ) && $_REQUEST['act'] == 'logout' ) {
		unset( $_SESSION['user'] );
		unset( $_SESSION['password'] );
		echo "<script>location.href='index.php';</script>";
	}
	
	// print_r( $_SESSION );
	// die();
	if ( isset( $_SESSION['user'] ) ) {
		$sql = "SELECT * FROM member WHERE user_name = '{$_SESSION['user']}' AND user_password = '{$_SESSION['password']}'";
		$hasUser = $mysql->getRow( $sql );
		if ( empty( $hasUser ) ) {
			echo "<script>location.href='index.php';</script>";
		}
	} else {
		echo "<script>location.href='index.php';</script>";
	}
	
	
	echo "欢迎你: {$_SESSION['user']} | <a href='?act=logout'>注销</a>";
?>