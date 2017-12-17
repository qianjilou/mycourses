<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>第一个html&php混编程序</title>
	<script>
	window.onload = function (){ 
		var oBtn = document.getElementById( "btn" );
		var oTxt = document.getElementById( "txt" );
		oBtn.onclick = function () {
			oTxt.value = "你被修改了";
		}
	}
	</script>
</head>
<body style="background:<?php echo '#ff8800'; ?>;"> 
	<h3><?php echo "欢迎学习php程序"; ?></h3>	
	<input type="text" id="txt" value="<?php echo '你正在学习的第一个php程序'; ?>">
	<input type="button" value="修改" id="btn">
</body>
</html>