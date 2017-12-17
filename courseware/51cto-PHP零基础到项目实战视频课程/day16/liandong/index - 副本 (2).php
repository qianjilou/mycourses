<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>省，市，县三级联动</title>
	<script src="jquery.min.js"></script>
	<script src="json2.js"></script>
	<script>

	//$.get
	//$.post
	function getCities( provinceId ) {
		$.ajax({
			type : "POST",
			url : "ajax.php",
			data : { province_id : provinceId },
			dataType : "json",
			success : function ( data ) {
				var str = "";
				for ( var i in data ) {
					str += "<option value='" + data[i].region_id + "'>" + data[i].region_name + "</option>";
				}
				$("#city").empty().append( str );
				$("#city").triggerHandler( "change" );
			}
		});		
	}
	function getDistric( cityId ) {
		$.ajax({
			type : "GET",
			url : "ajax.php",
			data : { city_id : cityId },
			dataType : "json",
			success : function ( data ) {
				var str = '';
				for ( var i in data ) {
					str += "<option value='" + data[i].region_id + "'>" + data[i].region_name + "</option>";
				}
				$("#district").empty().append( str );
			}
		});	
	}
	$(function(){
		$("#province").change(function(){
			var index = $("#province option:selected").val();
			getCities( index );
		});
		$("#city").change(function(){
			var index = $("#city option:selected").val();
			getDistric( index );
		});
	});
	</script>
</head>
<body>
	<?php
		require( "Mysql.class.php" );
		$provinceList = $mysql->getAll( "SELECT * FROM ecs_region WHERE parent_id = 1" );
	?>
	<select name="province" id="province">
		<?php
		if ( !empty( $provinceList ) ) {
			foreach ( $provinceList as $k => $v ) {
				?>
				<option value="<?php echo $v['region_id']; ?>"><?php echo $v['region_name']; ?></option>
				<?php
			}
		}
		?>	
	</select>	
	<select name="city" id="city">
		<option value="0">请选择市</option>
	</select>
	<select name="district" id="district">
		<option value="0">请选择区</option>
	</select>
</body>
</html>