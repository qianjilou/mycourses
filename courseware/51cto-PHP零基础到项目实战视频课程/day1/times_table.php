<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>九九乘法表</title>
	<style>
	table {
		border-collapse: collapse;
	}
	th,td {
		padding: 5px 10px;
		border: 1px solid #666;
	}
	</style>	
</head>
<body>
	<?php
		echo "<table>";
		for ( $i = 1; $i <= 9; $i++ ) {
			echo "<tr>";
			for ( $j = 1; $j <= $i; $j++ ) {
				echo "<td>" . $i . " x " . $j . " = " .  $i * $j . "</td>";
			}
			echo "</tr>";
		}
		echo "</table>";
	?>	
</body>
</html>