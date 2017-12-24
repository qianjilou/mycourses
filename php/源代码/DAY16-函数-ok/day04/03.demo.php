<?php 
//使用一个表单，输入任意数字，使之可以在2，8，16进制到10进制或10进制到2，8，16进制之间转换
//1接收表单的数据
$number = isset($_GET['number']) ? $_GET['number'] : '';
$zhuan = isset($_GET['zhuan']) ? $_GET['zhuan'] : '';
//引入函数库文件并调用getVale函数
include_once './04.func.php';
$res = getVal($number,$zhuan);
/*$res = '';
switch ($zhuan) {
	case 2:
		$res = decbin($number);
		break;
	case 10:
		$res = bindec($number);
		break;
}*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="">
		数：<input type="text" name="number">
			<select name="zhuan" id="">
				<option value="2">十进制转二进制</option>
				<option value="10">二进制转十进制</option>
			</select>
		<input type="submit" value="转换">
		<input type="text" value="<?php echo $res;?>">
	</form>
</body>
</html>