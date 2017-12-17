<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>留言板</title>
	<link rel="stylesheet" href="../css/bootstrap.css">
	<style>
	body {
		padding: 20px;
	}
	</style>
</head>
<body>
<?php
	require( "Mysql.class.php" );
?>

<?php
	$msgInfo = array();
	$act = "";
	$tipInfo = "";
	if ( isset( $_REQUEST['act'] ) && $_REQUEST['act'] == 'add' ) {
		$act = "insert";
		$tipInfo = "添加留言";
	}else if ( isset( $_REQUEST['act'] ) && $_REQUEST['act'] == 'insert'
	|| isset( $_REQUEST['act'] ) && $_REQUEST['act'] == 'update' ) {
		$title = htmlspecialchars( $_POST['title'], ENT_QUOTES );
		$content = htmlspecialchars( $_POST['content'], ENT_QUOTES);
		$msgInfo = array(
			"title" => $title,
			"content" => $content,
		);
		if ( $_REQUEST['act'] == 'insert' ) {
			$tipInfo = "添加留言";
			$bRes = $mysql->add( "message", $msgInfo );
			$act = 'insert';
		}else {
			$id = $_REQUEST['id'];
			$tipInfo = "编辑留言";
			$msgInfo['message_id'] = $id;
			$bRes = $mysql->update( "message", $msgInfo, "WHERE message_id = " . $id );
			$act = 'update';
		}
		if ( $bRes ) {
			?>
			<script>
			alert( "ok" );
			</script>
			<?Php
		}else {
			?>
			<script>
			alert( "error" );
			</script>
			<?php
		}
	}else if ( isset( $_REQUEST['act'] ) && $_REQUEST['act'] == 'edit' ) {
		if ( !empty( $_REQUEST['id'] ) ) {
			$msgInfo = $mysql->getRow( "SELECT * FROM message WHERE message_id = " . $_REQUEST['id'] );
		}
		$tipInfo = "更新留言";
		$act = 'update';
	}
?>

	<div class="container">
		<div class="row  col-md-offset-2">
			<a href="index.php" class="btn btn-lg btn-primary">留言列表</a>
		</div>
		<div class="row">
			<form action="" method="post" class="form-horizontal">
				<div class="form-group">
					<label for="" class="control-label col-md-2">
					主题:
					</label>					
					<div class="col-md-10">
						<input type="text" name="title" id="title" class="form-control" value="<?php if ( !empty( $msgInfo['title'] ) ) {
							echo $msgInfo['title'];
							}?>">
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-offset-2 col-md-10">
						<textarea class="form-control" name="content" id="content" cols="30" rows="10"><?php if ( !empty( $msgInfo['content'] ) ) {
							echo $msgInfo['content'];
							} ?></textarea>	
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-offset-2 col-md-10">
						<input type="submit" value="<?php echo $tipInfo; ?>" class="btn btn-primary"> 	
					</div>
				</div>
				<input type="hidden" name="act" value="<?php echo $act; ?>">
				<input type="hidden" name="id" value="<?php if ( !empty( $msgInfo['message_id']) ){
					echo $msgInfo['message_id'];
					} ?>">
			</form>
		</div>
		
	</div>


</body>
</html>