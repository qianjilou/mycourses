<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>文件上传</title>
</head>
<body>
	<?php
		if ( isset( $_POST['upload'] ) ) {
			if ( $_FILES['photo']['error'] > 0 ) {
				switch ( $_FILES['photo']['error'] ) {
					case 1:
						die ("其值为 1，上传的文件超过了 php.ini 中 upload_max_filesize 选项限制的值");							
					case 2:
						die( "其值为 2，上传文件的大小超过了 HTML 表单中 MAX_FILE_SIZE 选项指定的值" );
					case 3:
						die( "其值为 3，文件只有部分被上传" );
					case 4:
						die( "其值为 4，没有文件被上传" );
					default:
						die( "未知错误类型" );
				}	
			}
			$uploadDir = "./upload/";
			$ext = array( "jpg", "gif", "png", "jpeg", "bmp" );
			$fileInfo = explode( ".", $_FILES['photo']['name'] );
			$fileExt = array_pop( $fileInfo );
			if ( !in_array( $fileExt, $ext ) ) {
				die( "不支持的文件后缀" );
			}
			if ( !is_dir( $uploadDir ) ) {
				mkdir( $uploadDir );
			}
			$fileName = $uploadDir . $_FILES['photo']['name'];
			if ( move_uploaded_file( $_FILES['photo']['tmp_name'], $fileName ) ) {
				echo "<script>alert('上传成功');</script>";
			}else {
				echo "<script>alert('上传失败');</script>";
			}
		}
	?>
	<form action="" method="post" enctype="multipart/form-data">
		<input type="file" name="photo" id="photo">
		<input type="submit" name="upload" value="上传文件">
	</form>	
</body>
</html>