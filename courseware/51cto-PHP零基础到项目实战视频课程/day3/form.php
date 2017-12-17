<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>表单</title>
	<link rel="stylesheet" href="../css/bootstrap.css">
	<script src="../js/jquery.js"></script>
	<script src="../js/validate.js"></script>
	<script src="../js/bootstrap.js"></script>
	<style>
	body {
		padding: 100px;
	}
	</style>
</head>
<body>
	<div class="container">
		<div class="row col-md-offset-3 col-md-6">
			<form action="" method="post" id="userForm">
				<div class="form-group has-feedback">
					<label for="" class="control-label">用户名:</label>
					<input type="text" class="form-control" name="user" placeholder="请输入用户名">
					<span class="glyphicon"></span>
				</div>	
				<div class="form-group has-feedback">
					<label for="" class="control-label">密码:</label>	
					<input type="password" name="pwd" class="form-control" placeholder="请输入密码">
					<span class="glyphicon"></span>
				</div>
				<input type="submit" value="登录" class="btn btn-primary">
			</form>
		</div>
	</div>	

	<?php
		if ( !empty( $_POST['user'] ) && !empty( $_POST['pwd'] ) ) {
			$userName = $_POST['user'];
			$userPwd = $_POST['pwd'];
			if ( $userPwd == 'ghost123' && $userName == 'ghost2' ) {
				?>
				<div class="modal fade" id="pop-window">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button class="close" data-dismiss="modal">
									&times;
								</button>
								<div class="modal-title">登录提示框</div>
							</div>
							<div class="modal-body">
							登录成功
							</div>
							<div class="modal-footer">
								<button class="btn btn-default" data-dismiss="modal">
									关闭
								</button>
								<button class="btn btn-primary" id="btn-ok">
									确定
								</button>
							</div>
						</div>
					</div>
				</div>
				<script>
				$(function(){
					$("#pop-window").modal();
					$("#btn-ok").click(function(){
						location.href="user_center.php";
					});
				});
				</script>
				<?php	
			}
		}
	?>


</body>
</html>