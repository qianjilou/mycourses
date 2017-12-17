<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>输出表格</title>
	<link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>
	<?php
		// echo "<table class='table table-bordered'>";
		// for ( $i = 1; $i <= 5; $i++ ){
		// 	echo "<tr>";
		// 	for ( $j = 1; $j <= 5; $j++ ){
		// 		echo "<td>" . "第" . $i . "行,第" . $j . "列</td>";
		// 	}
		// 	echo "</tr>";
		// }
		// echo "</table>";

		function outputTable( $r, $c ){
			echo "<h3 class='text-center'>输出{$r}行{$c}列的表格</h3>";
			echo "<table class='table table-bordered'>";
			for ( $i = 1; $i <= $r; $i++ ){
				echo "<tr>";
				for ( $j = 1; $j <= $c; $j++ ){
					echo "<td>第{$i}行第{$j}列</td>";
				}
				echo "</tr>";
			}
			echo "</table>";
		}

		outputTable( 5, 5 );
		outputTable( 8, 6 );

	?>	
</body>
</html>