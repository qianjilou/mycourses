<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>留言板</title>
	<link rel="stylesheet" href="../css/bootstrap.css">
	<style>
	body {
		padding: 100px;
	}
	</style>
</head>
<body>
<?php
	$link = mysql_connect( "localhost", "root", "root" ) or die( mysql_error() ) ;
	mysql_select_db( "2016php0314" );
	mysql_query( "set names utf8" );
?>

<?php
	if ( !empty( $_POST['title'] ) ) {
		$title = htmlspecialchars( $_POST['title'], ENT_QUOTES );
		$message = htmlspecialchars( $_POST['message'], ENT_QUOTES );
		// $message = $_POST['message'];
		$sql = "INSERT INTO message( title, content ) VALUES ( '$title', '$message' )";
		$res = mysql_query( $sql );
		if ( $res ) {
			?>
			<script>
			alert( "发布成功" );
			</script>
			<?php
		}else {
			?>
			<script>
			alert( "发布失败" );
			</script>
			<?php
		}
	}
?>


<?php
	$p = isset( $_GET['p'] ) ? intval( $_GET['p'] ) : 1;
	$sqlTotal = "SELECT count(*) FROM message";
	$res = mysql_query( $sqlTotal );
	$row = mysql_fetch_row( $res );
	$total = $row[0];
	$pageSize = 3;
	$page = ceil( $total / $pageSize );


	$sql = "SELECT * FROM message ORDER By message_id ASC LIMIT " . ( $p - 1 ) * $pageSize . "," . $pageSize;
	$msgList = array();
	$res = mysql_query( $sql );
	while ( $row = mysql_fetch_assoc( $res ) ) {
		$msgList[] = $row;
	}
?>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<form action="" method="post" class="form-horizontal">
					<div class="form-group">
						<label for="" class="col-md-2 control-label">标题:</label>
						<div class="col-md-10">
							<input type="text" name="title" class="form-control">
						</div>
					</div>	
					<div class="form-group">
						<div class="col-md-10 col-md-offset-2">
							<textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
						</div>
					</div>	
					<div class="form-group">
						<div class="col-md-10 col-md-offset-2">
							<input type="submit" value="发布留言" class="btn btn-primary">
						</div>
					</div>
				</form>
			</div>

			<div class="col-md-8 col-md-offset-2">
				<ul class="pagination pull-right">
					<li><a href="?p=1">首页</a></li>
					<?php
						if ( $p <= 1 ){
						?>
							<li class="disabled"><a href="javascript:;">上一页</a></li>
						<?php						
						}else {
						?>
							<li><a href="?p=<?php echo ($p - 1); ?>">上一页</a></li>
						<?php	
						}
					?>
					<?php
						$active = "";
						for ( $i = 1; $i <= $page; $i++ ){
							if ( $p == $i ){
								$active = "active";
							}else {
								$active = "";	
							}
							?>
								<li class="<?php echo $active; ?>"><a href="?p=<?php echo $i;?>"><?php echo $i; ?></a></li>
							<?php			
						}
					?>
					<?php
						if ( $p == $page ){
						?>
							<li class="disabled"><a href="javascript:;">下一页</a></li>
						<?php					
						}else {
						?>
							<li><a href="?p=<?php echo ($p + 1); ?>">下一页</a></li>
						<?php	
						}
					?>
					<li><a href="?p=<?php echo $page; ?>">尾页</a></li>
				</ul>
				<div class="col-md-offset-2 col-md-10">
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
	</div>	
</body>
</html>