



<?php
header("Content-type:text/html;charset=utf-8");
//接收数据
$title = $_POST['title'];
$content = $_POST['content'];
$addtime = date("Y-m-d H:i:s");   //2016-3-25 09:56:22
//echo $addtime;
//对数据进行验证
if ($title == '' || $content == '') {
	//echo "标题或内容不能为空!";
	echo "<script>alert('标题或内容不能为空!');
	window.location.href='add.php';</script>";
	exit;
}
//插入数据到数据库
//1.连接数据库
$conn = @mysql_connect('localhost','root','');
//2.选择数据库
mysql_select_db("mes");
//3.设置编码
mysql_query("set names utf8");
//4.准备插入sql语句
$sql = "insert into mes_info values('','{$title}','{$content}','{$addtime}')";
//5.发送sql语句
$res = mysql_query($sql);
//判断是否成功
if (!$res) {
	echo "<script>alert('添加失败!');
	window.location.href='add.php';</script>";
}else{
	echo "<script>alert('添加成功!');
	window.location.href='index.php';</script>";
}
?>