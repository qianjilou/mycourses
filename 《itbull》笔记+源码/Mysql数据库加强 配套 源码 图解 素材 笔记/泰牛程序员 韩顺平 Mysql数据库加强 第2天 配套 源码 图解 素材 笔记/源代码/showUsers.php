<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title> 用户管理页面 </title>
  <script type="text/javascript">
  </script>
 </head>
 <body>
  <h1>管理用户界面</h1>
  <?php
	//操作数据库
	$con = @mysql_connect('localhost', 'root', 'root');
	if(!$con){
		die('错误信息' . mysql_error());
	}

	//设置编码
	mysql_query('set names utf8');
	//选择数据库
	mysql_select_db('stusys');
	$sql = 'SELECT * FROM `student`';
	//查询数据库，获取到 $res 结果集, 可以将其看着一个表
	$res = mysql_query($sql);
	//$row = mysql_fetch_assoc($res) , 从$res 中取出一条一条记录
	echo "<table border='1px' width='600px'>";
	echo "<tr><th>id</th><th>学生名</th><th>语文成绩</th><th>英语成绩</th><th>数学成绩</th><th>操作</th></tr>";
	while($row = mysql_fetch_assoc($res)){
		echo "<tr><th>{$row['id']}</th><th>{$row['name']}</th><th>{$row['chinese']}</th><th>{$row['english']}</th><th>{$row['math']}</th><th><a href='#'>修改用户</a> <a href='delAction.php?id={$row['id']}'>删除用户</a></th></tr>";
	}
	echo "</table>";
  ?>
 </body>
</html>
