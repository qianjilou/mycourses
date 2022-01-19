<?php
header("Content-type:text/html;charset=utf-8"); 
//获取数据
//1.连接数据库
$conn = @mysql_connect('localhost','root','');
//2.选择数据库
mysql_query("use mes");
//3.编码
mysql_query("set names utf8");
//获取当前页
$page = isset($_GET['page']) ? $_GET['page'] : 1;
//设置每页显示数量
$pagesize = 2;
//获取总记录数
$res = mysql_query("select * from mes_info");
$total = mysql_num_rows($res);
//计算最大页
$pagemax = ceil($total/$pagesize);
//计算偏移量
$offset = ($page-1)*$pagesize;
//4.获取数据sql语句
$sql = "select * from mes_info order by id desc limit $offset,$pagesize";
//5.发送sql语句
$res = mysql_query($sql);   //结果集的资源
//6.要结果集资源转换成数据
//$row = mysql_fetch_assoc($res);
//7.获取多条数据
//定义一个空数据，接收将来的数据
$rows = array();
//把数据放到一个新的二维数组中
while ($row = mysql_fetch_assoc($res)) {
	$rows[] = $row;
}
//var_dump($rows);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>留言板</title>
	<link rel="stylesheet" href="bs/css/bootstrap.min.css">
	<script src="bs/js/jquery.min.js"></script>
	<script src="bs/js/bootstrap.min.js"></script>
	<script src="bs/js/holder.min.js"></script>
</head>
<body>
	<div class="container">
		<nav class="navbar navbar-inverse" >
		  <div class="navbar-header">
		    <a class="navbar-brand"  href="#">留言板</a>
		  </div>
		 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		    <ul class="nav navbar-nav">
		      <li><a href="add.php">发布留言</a></li>
		    </ul>
		  </div><!-- /.navbar-collapse -->
		</nav>
		<div class="row">
		  <div class="col-md-3">
		  	<div class="panel panel-primary">
				<div class="panel-heading">
					最新
				</div>
				<div class="panel-body">
				  	<ul>
				  		<li>内容</li>
				  	</ul>
				</div>
			</div>
		  </div>
		  <div class="col-md-9">

			<?php foreach($rows as $k=>$v){?>
			<div class="panel panel-primary">
				<div class="panel-heading">
					<?php echo $v['title'];?>
				</div>
				<div class="panel-body" style="height:120px;">
				  	<?php echo $v['content'];?>
				</div>
				<div class="panel-footer">
					<?php echo $v['addtime'];?>
				</div>
			</div>
			<?php };?>
			<ul class="pager">
			  <li class="previous"><a href="index.php?page=1">&larr; 首页</a></li>
			  <li><a href="index.php?page=<?php echo $page<=1 ? $page : $page-1;?>">上一页</a></li>
			  <li><a href="index.php?page=<?php echo $page>=$pagemax ? $pagemax : $page+1;?>">下一页</a></li>
			  <li class="next"><a href="index.php?page=<?php echo $pagemax;?>">末页 &rarr;</a></li>
			</ul>
				

				
			</div>
		</div>
	</div>
</body>
</html>