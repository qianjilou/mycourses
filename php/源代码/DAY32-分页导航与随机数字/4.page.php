<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/bootstrap.css">
	</head>
	<body>		
		<?php 
		  require_once 'Page.class.php';
		  $page = new Page();
		  $ul = $page -> create();
		  echo $ul;
		?>
	</body>
</html>