<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ajax</title>
	<script>
	function showCurTime () {
		alert( "<?php echo date( 'Y-m-d H:i:s' ); ?>" );	
	}
	var xmlHttp = null;
	function getXmlHttp () {
		if ( window.XMLHttpRequest ) {
			xmlHttp = new XMLHttpRequest();
		}else if ( window.ActiveObject ) {
			xmlHttp = new ActiveObject( "Microsoft.XMLHttpRequest" );
		}
		if ( xmlHttp == null ) {
			alert( "你的浏览器不支持ajax对象" );
		}
		return xmlHttp;
	}

	function getResult () {
		var xmlHttp = getXmlHttp();
		// var url = "ajax.php";
		// var url = "ajax.php?act=q&user_name=zhangsan&tid" + Math.random();

		xmlHttp.onreadystatechange = function () {
			// alert( xmlHttp.readyState );
			/*
				1, open 打开请求
				2, send 发送请求
				3, 获取部分数据
				4, 获取到所有数据
			 */
			 if ( xmlHttp.readyState == 4 || xmlHttp.readyState == 'complete' ) {
			 	// alert( xmlHttp.responseText );
			 	document.getElementById( "tips" ).innerHTML = xmlHttp.responseText;
			 }
		}

		var url = "ajax.php";
		xmlHttp.open( "POST", url, true );	
		xmlHttp.setRequestHeader( "Content-type", "application/x-www-form-urlencoded" );
		xmlHttp.send( "act=q&user_name=zhangsan" );
		// xmlHttp.open( "GET", url, true );	
		// xmlHttp.send( null );
	}


	</script>
</head>
<body>
	<!-- <input type="button" value="ajax测试" id="btn" onclick="showCurTime();"> 	 -->
	<input type="button" value="ajax测试" id="btn" onclick="getResult();"> 	
	<div id="tips"></div>
</body>
</html>