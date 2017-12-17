<?php session_start(); ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>注册&登录</title>
</head>
<body>
	<form action="" method="post">
		<p>用户名: <input type="text" name="user" id="" /></p>
		<p>密码: <input type="password" name="password" id="" /></p>
		<p>验证码: <img src="captchas.php" onclick="this.src='captchas.php?t=' + Math.random()" /></p>
		<p>输入验证码: <input type="text" name="captchas" id="" /></p>
		<p>
			<input type="submit" value="注册" name="reg" />
			<input type="submit" value="登录" name="login" />
		</p>
	</form>
	<?php
		require( "Mysql.class.php" );
		if ( isset( $_POST['reg'] ) ) {
			$userName = htmlspecialchars( trim( $_POST['user'] ), ENT_QUOTES );
			$userPwd = htmlspecialchars( trim( $_POST['password'] ), ENT_QUOTES );
			$sql = "SELECT * FROM member WHERE user_name = '{$userName}'";
			$hasUser = $mysql->getRow( $sql );
			if ( $hasUser ) {
				echo "用户名已经存在<br/>";
			} else {
				$userInfo = array(
					'user_name' => $userName,
					'user_password' => md5($userPwd),
					'reg_time' => date( "Y-m-d H:i:s", time() ),
				);
				if ( $mysql->add( 'user', $userInfo ) ) {
					echo "用户注册成功<br/>";
				}else {
					echo "用户注册失败<br/>";
				}
			}
		} else if ( isset( $_POST['login'] ) ) {
			$userName = htmlspecialchars( trim( $_POST['user'] ), ENT_QUOTES );
			$userPwd = htmlspecialchars( trim( $_POST['password'] ), ENT_QUOTES );
			$sql = "SELECT * FROM member WHERE user_name = '{$userName}' AND user_password = '$userPwd'";
			$hasUser = $mysql->getRow( $sql );		
			$captchas = $_POST['captchas'];
			if ( !empty( $hasUser ) && strtolower($captchas) == strtolower($_SESSION['captchas']) ) {
				$_SESSION['user'] = $userName;
				$_SESSION['password'] = $userPwd;
				echo "<script>location.href='user_center.php';</script>";
				//echo "登录成功";
			} else {
				echo "登录失败";
			}
		}
	?>
</body>
</html>