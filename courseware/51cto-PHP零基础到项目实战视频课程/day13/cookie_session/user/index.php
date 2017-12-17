<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>注册&登陆</title>
	<link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>
<?php
	require( "Mysql.class.php" );
	if ( isset( $_POST['reg'] ) ) {
		$userName = htmlspecialchars( $_POST['user_name'], ENT_QUOTES );
		$userPwd = htmlspecialchars( $_POST['user_password'], ENT_QUOTES );
		$data = array(
			"user_name" => $userName,
			"user_password" => $userPwd,
			"reg_time" => date( "Y-m-d H:i:s" ),
		);
		$sql = "SELECT * FROM user WHERE user_name = '$userName'";
		if ( $mysql->getRow( $sql ) ) {
			echo "<script>alert('用户已存在');</script>";
		}else {
			if ( $mysql->add( "user", $data ) ) {
				echo "<script>alert('ok');</script>";
				// header( "Location:user_center.php" );
			}else {
				echo "<script>alert('error');</script>";
			}
		} 
	}else if ( isset( $_POST['login'] ) ) {
		$userName = htmlspecialchars( $_POST['user_name'], ENT_QUOTES );
		$userPwd = htmlspecialchars( $_POST['user_password'], ENT_QUOTES );
		$data = array(
			"user_name" => $userName,
			"user_password" => $userPwd,
		);
		$sql = "SELECT * FROM user WHERE user_name = '$userName' AND user_password = '$userPwd'";
		if ( $mysql->getRow( $sql ) ) {
			$_SESSION['userName'] = $userName;
			$_SESSION['userPwd'] = $userPwd;
			header( "Location:user_center.php" );
			exit();
		}else {
			echo "<script>alert('用户名或者密码错误');</script>";
		}
	}	
?>
	<div class="col-md-8 col-md-offset-2">
		<form action="" class="form-horizontal" method="post">
			<div class="form-group">
				<label for="" class="control-label col-md-2">用户名:</label>
				<div class="col-md-10">
					<input class="form-control" type="text" name="user_name" id="">
				</div>
			</div>	
			<div class="form-group">
				<label for="" class="control-label col-md-2">用户密码:</label>
				<div class="col-md-10">
					<input class="form-control" type="password" name="user_password" id="">
				</div>
			</div>	
			<div class="form-group">
				<div class="col-md-offset-2 col-md-10">
					<input type="submit" name="reg" value="注册" class="btn btn-primary">	
					<input type="submit" name="login" value="登陆" class="btn btn-primary">	
				</div>
			</div>
		</form>
	</div>	
</body>
</html>