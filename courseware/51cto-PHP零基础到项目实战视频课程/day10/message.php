<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>留言板</title>
	<link rel="stylesheet" href="./css/bootstrap.css">
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
						<input type="submit" value="发布留言" class="btn btn-primary"> 	
					</div>
				</div>
			</form>
		</div>
		<div class="row">
			<div class="col-md-offset-2 col-md-10">
				<?php
					$sql = "SELECT COUNT(*) as total FROM message";
					$totalRes = mysql_query( $sql );	
					$row = mysql_fetch_row( $totalRes );
					$total = $row[0];

					$pageSize = 5;	
					$page = ceil( $total / $pageSize );

					$p = isset( $_GET['p'] ) ? intval( $_GET['p']) : 1;

					$sql = "SELECT * FROM message ORDER BY message_id ASC LIMIT " . ( $p - 1 ) * $pageSize . "," . $pageSize;
					$res = mysql_query( $sql );
					$msgList = array();
					while ( $row = mysql_fetch_assoc( $res ) ) {
						$msgList[] = $row;
					}
				?>
				<ul class="pagination">
				<li><a href="?p=1">首页</a></li>
				<?php
					if ( $p == 1 ){
					?>
					<li class="disabled"><a href="javascript:;">上一页</a></li>
					<?php						
					}else {
						?>
							<li><a href="?p=<?php echo $p - 1; ?>">上一页</a></li>
						<?php	
					}
				?>	
				<?php
					$active = '';
					for ( $i = 1; $i <= $page; $i++ ) {
						if ( $p == $i ) {
							$active = "active";
						}else {
							$active = "";
						}
						?>
							<li class="<?php echo $active; ?>"><a href="?p=<?php echo $i;?>"><?php echo $i;?></a></li>
						<?Php
					}
				?>
				<?php
					if ( $p == $page ){
					?>
					<li class="disabled"><a href="javascript:;">下一页</a></li>
					<?php						
					}else {
						?>
							<li><a href="?p=<?php echo $p + 1; ?>">下一页</a></li>
						<?php	
					}
				?>	
				<li><a href="?p=<?php echo $page; ?>">尾页</a></li>
				</ul>
				<?php			
					if ( !empty( $msgList ) ) {
						foreach ( $msgList as $k => $v ) {
							?>
							<div class="media">
								<div class="media-body">
								<h3><?php echo $v['message_id']; ?>,<?php echo $v['title']; ?></h3>
								<p><?php echo $v['content']; ?></p>
								</div>
							</div>
							<?php
						}
					}
				?>				
			</div>
		</div>
	</div>	
	
	<?php
		if ( !empty( $_POST['title'] ) ) {
			$title = htmlspecialchars( $_POST['title'], ENT_QUOTES );
			$content = htmlspecialchars( $_POST['content'], ENT_QUOTES);
			$sql = "INSERT INTO message( title, content ) VALUES ( '$title', '$content' )";
			echo $sql;
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



</body>
</html>