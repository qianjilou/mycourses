<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="jquery.min.js"></script>
	<script>
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

	function getCities ( provinceId ) {
		var xmlHttp = getXmlHttp();
		xmlHttp.onreadystatechange = function () {
			 if ( xmlHttp.readyState == 4 || xmlHttp.readyState == 'complete' ) {
			 	var result = xmlHttp.responseText;
			 	var obj = JSON.parse( result );
			 	var str = '';
			 	for ( var i in obj ) {
			 		str += "<option value='" + obj[i].region_id + "'>" + obj[i].region_name + "</option>";
			 	}
			 	$("#city").empty().append( str );
			 	$("#city").triggerHandler( "change" );
			 }
		}
		var url = "ajax.php";
		xmlHttp.open( "POST", url, true );	
		xmlHttp.setRequestHeader( "Content-type", "application/x-www-form-urlencoded" );
		xmlHttp.send( "province_id=" + provinceId );
	}

	function getDistrict ( cityId ) {
		var xmlHttp = getXmlHttp();
		xmlHttp.onreadystatechange = function () {
			 if ( xmlHttp.readyState == 4 || xmlHttp.readyState == 'complete' ) {
			 	var result = xmlHttp.responseText;
			 	var obj = JSON.parse( result );
			 	var str = '';
			 	for ( var i in obj ) {
			 		str += "<option value='" + obj[i].region_id + "'>" + obj[i].region_name + "</option>";
			 	}
			 	$("#district").empty().append( str );
			 }
		}
		var url = "ajax.php";
		xmlHttp.open( "POST", url, true );	
		xmlHttp.setRequestHeader( "Content-type", "application/x-www-form-urlencoded" );
		xmlHttp.send( "city_id=" + cityId );
	}

	$(function(){
		$("#province").change( function(){
			var index= $("#province option:selected").val();
			getCities( index );
		} );
		$("#city").change( function(){
			var index= $("#city option:selected").val();
			getDistrict( index );
		} );
	});

	</script>
</head>
<body>
	<?php
		require( "Mysql.class.php" );
		$sql = "SELECT * FROM ecs_region WHERE parent_id = 1";
		$provinceList = $mysql->getAll( $sql );

	?>
	<select name="province" id="province">
		<?php
		if ( !empty( $provinceList ) ) {
			foreach( $provinceList as $k => $v ) {
			?>
				<option value="<?php echo $v['region_id']; ?>"><?php echo $v['region_name']; ?></option>	
			<?php	
			}
		}
		?>
	</select>	
	<select name="city" id="city">
		<option value="0">请选择城市</option>	
	</select>	
	<select name="district" id="district">
		<option value="0">请选择区域</option>	
	</select>	
</body>
</html>