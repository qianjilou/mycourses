<?php
header("Content-type:text/html;charset=UTF-8");
//接收a的值
$page = isset($_GET['page']) ? $_GET['page'] : 1;    //三元运算符
//每页显示的数量
$pagesize = 2;
//获取当前页
//就是$page
//计算偏移量
$offset = ($page-1)*$pagesize;
//连接数据库
$conn = @mysql_connect('localhost','root','');
mysql_query("use mes");
mysql_query("set names utf8");
//准备sql语句
$sql = "select * from mes_info order by id desc limit $offset,$pagesize";
//发送
$res = mysql_query($sql);
//处理结果集资源
$rows = array();
while ($row = mysql_fetch_assoc($res)) {
	$rows[] = $row;
}
//var_dump($rows);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<ul>
		<?php foreach($rows as $k=>$v){?>
		<li><?php echo $v['title'];?></li>
		<?php }?>
	</ul>
	<a href="page.php?page=1">首页</a>
	<a href="page.php?page=<?php echo $page-1;?>">上一页</a>
	<a href="page.php?page=<?php echo $page+1;?>">下一页</a>
	<a href="page.php?page=<?php echo $pagemax;?>">末页</a>
</body>
</html>