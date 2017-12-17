<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>敏感词过滤</title>
	<link rel="stylesheet" href="../css/bootstrap.css">	
</head>
<body>
	<div class="container">
		<div class="col-md-8 col-md-offset-2">
			<form action="" method="post">
				<div class="form-group">
					<label for="">原文:</label>
					<textarea class="form-control" name="txt1" id="txt1" cols="30" rows="10"></textarea>
				</div>
				<div class="form-group">
					<label for="">替换后:</label>
					<textarea class="form-control" name="txt2" id="txt2" cols="30" rows="10"></textarea>
				</div>
				<div class="form-group">
					<input type="submit" value="过滤" class="btn btn-primary">
				</div>
			</form>
		</div>	
	</div>
	<?php
		if ( !empty( $_POST['txt1'] ) ) {
			$oriTxt = $_POST['txt1'];
			$pattern = "/靠|你妹的|SB/i";
			$filterTxt = preg_replace_callback( $pattern, "filter", $oriTxt );
			$filterTxt = str_replace( array( "\r\n", '\r', '\n' ), '', $filterTxt );
			?>
			<script>
			document.getElementById( "txt2" ).value = "<?php echo $filterTxt; ?>";
			</script>
			<?php
		}
		function filter ( $match ) {
			$iLen = strlen( $match[0] );
			// echo $sLen . "<br/>";
			$pattern = '/^[\x{4e00}-\x{9fa5}]+$/u';
			if ( preg_match( $pattern, $match[0] ) ) {	
				$iLen /= 3;				
			}
			$temp = '';
			for ( $i = 0; $i < $iLen; $i++ ) {
				$temp .= '*';	
			}
			return  $temp;
		}
	?>
</body>
</html>