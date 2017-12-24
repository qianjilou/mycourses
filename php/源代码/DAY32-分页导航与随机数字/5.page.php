<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/bootstrap.css">
	</head>
	<body>		
		<?php 
		  //查询商品信息
    		//引入DAOMySQLiclass.php类
    		require_once 'DAOMySQLi.class.php';
    		
    		$option = array(
    		    'host'      =>  '127.0.0.1',
    		    'user'      =>  'root',
    		    'pwd'       =>  'root',
    		    'port'      =>  3306,
    		    'db'        =>  'php_7',
    		    'charset'   =>  'utf8'
    		);
    		$dao = DAOMySQLi::getSingleton($option);
    		
    		
    		//生成分页导航
    		require_once 'Page.class.php';
    		$page = new Page();
    		
    		//设置总的记录数
    		$sql = "SELECT count(*) AS total FROM goods";
    		$total = $dao -> fetchOne($sql);
    		$page -> total_pages = $total['total'];
    		$page -> pagesize = 5;
    		$page -> now_page = isset($_GET['page'])?$_GET['page']:1;

    		//拼接sql语句查询所有的商品信息
    		/*
    		 *   now          offset      pagesize
    		 *    1             0            5
    		 *    2             5            5
    		 *    3             10           5
    		 *    4             15           5
    		 *    $offset = (now - 1)*pagesize
    		 * 
    		 */
    		$offset = ($page->now_page -1 )* $page->pagesize;
    		$limit = $page->pagesize;
    		$sql = "SELECT * FROM goods limit $offset,$limit";
    		$goods_list = $dao -> fetchAll($sql);
		  
    		//加载商品列表的模板（模子）
    		require_once '2.template.php';
    		
    		
		  
		  
		 
		  
		  $ul = $page -> create();
		  echo $ul;
		?>
	</body>
</html>