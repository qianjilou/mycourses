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
						<input type="text" name="title" id="title" class="form-control">
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-offset-2 col-md-10">
						<textarea class="form-control" name="content" id="content" cols="30" rows="10"></textarea>	
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-offset-2 col-md-10">
						<input type="submit" value="添加留言" class="btn btn-primary"> 	
					</div>
				</div>
			</form>
		</div>
		
	
	
	<?php
		if ( !empty( $_POST['title'] ) ) {
			$title = htmlspecialchars( $_POST['title'], ENT_QUOTES );
			$content = htmlspecialchars( $_POST['content'], ENT_QUOTES);
			$sql = "INSERT INTO message( title, content ) VALUES ( '$title', '$content' )";
			// echo $sql;
			$bRes = mysql_query( $sql );			
			if ( $bRes ) {
				?>
				<script>
				alert( "insert ok" );
				</script>
				<?Php
			}else {
				?>
				<script>
				alert( "insert error" );
				</script>
				<?php
			}
		}
	?>
	</div>


</body>
</html>