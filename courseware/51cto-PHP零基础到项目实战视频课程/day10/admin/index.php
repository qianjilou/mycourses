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
	if ( !empty( $_GET['act'] ) && $_GET['act'] == 'del' ) {
		if ( !empty( $_GET['id'] ) ) {
			$sql = "DELETE FROM message WHERE message_id = " . $_GET['id'];
			$mysql->query( $sql );
		}
	}	
?>
<?php
	$sql = "SELECT COUNT(*) as total FROM message";
	$total = $mysql->getCol( $sql );

	$pageSize = 5;	
	$page = ceil( $total / $pageSize );

	$p = isset( $_GET['p'] ) ? intval( $_GET['p']) : 1;

	$sql = "SELECT * FROM message ORDER BY message_id ASC LIMIT " . ( $p - 1 ) * $pageSize . "," . $pageSize;
	$msgList = $mysql->getAll( $sql );
?>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<a href="info.php?act=add" class="btn btn-lg btn-primary pull-right" >添加新闻>></a>	
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<table class="table table-bordered table-striped table-hover">
					<thead>
						<tr>
							<th>ID</th>		
							<th>标题</th>		
							<th>操作</th>	
						</tr>
						<?php
						if ( !empty( $msgList ) ) {
							foreach( $msgList as $k => $v ) {
								?>
								<tr>
									<td><?php echo $v['message_id']; ?></td>
									<td><?php echo $v['title']; ?></td>
									<td>
										<a href="info.php?act=edit&id=<?php echo $v['message_id']; ?>">编辑</a>
										<a href="?act=del&id=<?php echo $v['message_id']; ?>">删除</a>
									</td>
								</tr>
								<?php							
							}
						}
						?>
					</thead>
				</table>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				
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
						
			</div>
		</div>
	</div>	
	


</body>
</html>