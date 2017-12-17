<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>输出表格2</title>
	<link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>
	<?php
		function outputTable( $r, $c ){
			$s = "<h3 class='text-center'>输出{$r}行{$c}列的表格</h3>";
			$s .= "<table class='table table-bordered'>";
			for ( $i = 1; $i <= $r; $i++ ){
				$s .= "<tr>";
				for ( $j = 1; $j <= $c; $j++ ){
					$s .= "<td>第{$i}行第{$j}列</td>";
				}
				$s .= "</tr>";
			}
			$s .= "</table>";
			return $s;
		}
		echo outputTable( 7, 3 );
	?>	
</body>
</html>