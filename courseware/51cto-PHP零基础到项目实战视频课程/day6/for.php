<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>
	<?php
		$userInfo = array(
			"hr" => array(
				array( "张三", 12200 ),
				array( "李四", 13000 ),
				array( "王五", 14000 ),
			),
			"customer" => array(
				array( "张大三", 22200 ),
				array( "李大四", 23000 ),
				array( "王大五", 24000 ),
			),
		);
		echo "<table class='table table-bordered table-striped table-hover'>";
		echo "<tr><th>部门</th><th>姓名</th><th>年龄</th></tr>";
		foreach( $userInfo as $k => $v ){
			foreach ( $v as $k2 => $v2 ){
				echo "<tr>";
				echo "<td>{$k}</td>";
				echo "<td>{$v2[0]}</td><td>{$v2[1]}</td>";
				echo "</tr>";
			}
		}
		echo "</table>";
		echo "<table class='table table-bordered table-striped table-hover'>";
		echo "<tr><th>部门</th><th>姓名</th><th>年龄</th></tr>";
		foreach( $userInfo as $k => $v ){
			foreach ( $v as $k2 => $v2 ){
				echo "<tr>";
				echo "<td>{$k}</td>";
				foreach ( $v2 as $k3 => $v3 ){
					echo "<td>{$v3}</td>";
				}
				echo "</tr>";
			}
		}
		echo "</table>";

		$count = 0;
		echo "<table class='table table-bordered table-striped table-hover'>";
		echo "<tr><th>部门</th><th>姓名</th><th>年龄</th></tr>";
		foreach( $userInfo as $k => $v ){
			foreach ( $v as $k2 => $v2 ){
				echo "<tr>";
				if ( $count % 3 == 0 ){
					echo "<td rowspan='3'>{$k}</td>";
				}
				$count++;
				foreach ( $v2 as $k3 => $v3 ){
					echo "<td>{$v3}</td>";
				}
				echo "</tr>";
			}
		}
		echo "</table>";
	?>	
</body>
</html>