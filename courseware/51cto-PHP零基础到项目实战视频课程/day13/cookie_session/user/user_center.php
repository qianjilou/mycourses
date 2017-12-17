<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>用户中心</title>
</head>
<body>
	<?php
		require( "Mysql.class.php" );
		if ( isset( $_REQUEST['act'] ) && $_REQUEST['act'] == 'logout' ) {
			unset( $_SESSION['userName'] );
			unset( $_SESSION['userPwd'] );
			header( "Location:index.php" );
			exit();
		}
		if ( empty( $_SESSION['userName'] ) ) {
			header( "Location:index.php" );
			exit();
		}else if ( !empty( $_SESSION['userName'] ) ) {
			$sql = "SELECT * FROM user WHERE user_name = '{$_SESSION['userName']}' AND user_password = '{$_SESSION['userPwd']}'";
			if ( !$mysql->getRow( $sql ) ) {
				header( "Location:index.php" );
				exit();
			}
		}
	?>
	<h3>
		欢迎登陆用户<?php echo isset( $_SESSION['userName'] ) ? $_SESSION['userName'] : ""; ?>
		<a href="?act=logout">注销</a>
	</h3>
</body>
</html>