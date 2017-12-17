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
	$link = mysql_connect( "localhost", "root", "root" );
	mysql_select_db( "php0314" );
	mysql_query( "set names utf8" );
?>
<?php
	$msgInfo = array();
	if ( !empty( $_GET['id'] ) ) {
		$sql = "SELECT * FROM message WHERE message_id = " . $_GET['id'];
		$res = mysql_query( $sql );
		$msgInfo = mysql_fetch_assoc( $res );
	}
?>
	<div class="container">
		<div class="row col-md-offset-2">
			<a href="index.php" class="btn btn-lg btn-primary">留言列表</a>
		</div>
		<div class="row">
			<form action="" method="post" class="form-horizontal">
				<div class="form-group">
					<label for="" class="control-label col-md-2">
					主题:
					</label>					
					<div class="col-md-10">
						<input type="text" name="title" id="title" class="form-control" value="<?php if ( !empty( $msgInfo['title'] ) ){
								echo $msgInfo['title'];
							}?>">
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-offset-2 col-md-10">
						<textarea class="form-control" name="content" id="content" cols="30" rows="10"><?php if ( !empty( $msgInfo['content'] ) ){
								echo $msgInfo['content'];
							} ?></textarea>	
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-offset-2 col-md-10">
						<input type="submit" value="编辑留言" class="btn btn-primary"> 	
					</div>
				</div>
			</form>
		</div>
		
	
	<?php
		if ( !empty( $_POST['title'] ) ) {
			$title = htmlspecialchars( $_POST['title'], ENT_QUOTES );
			$content = htmlspecialchars( $_POST['content'], ENT_QUOTES);
			$id = $_GET['id'];
			$sql = "UPDATE message SET title='$title', content='$content' WHERE message_id = " . $id;
			$bRes = mysql_query( $sql );			
			if ( $bRes ) {
				?>
				<script>
				alert( "update ok" );
				</script>
				<?Php
			}else {
				?>
				<script>
				alert( "update error" );
				</script>
				<?php
			}
		}
	?>
	</div>


</body>
</html>