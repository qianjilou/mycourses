<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>分页</title>
	<link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>
	<div class="container">
	<?php
		$arr = range( 1, 100 );
		$total = count( $arr );	
		$pageSize = 10;
		$page = ceil( $total / $pageSize );

		$p = isset( $_GET['p'] ) ? $_GET['p'] : 1;
		$newArr = array_slice( $arr, ( $p - 1 ) * $pageSize, $pageSize );
		foreach ( $newArr as $item ){
			echo $item . "<br/>";
		}
	?>	
	</div>
	<div class="container">
		<ul class="pagination">
			<li><a href="?p=1">首页</a></li>
			<?php
				if ( $p <= 1 ){
				?>
					<li class="disabled"><a href="javascript:;">上一页</a></li>
				<?php						
				}else {
				?>
					<li><a href="array_slice2.php?p=<?php echo ($p - 1); ?>">上一页</a></li>
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
						<li class="<?php echo $active; ?>"><a href="array_slice2.php?p=<?php echo $i;?>"><?php echo $i; ?></a></li>
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
	</div>
</body>
</html>