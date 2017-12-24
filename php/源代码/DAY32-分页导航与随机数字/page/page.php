<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="css/bootstrap.css">
	</head>
	<body>
		<?php 
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
    		$sql = "SELECT count(*) as total FROM goods";
    		$result = $dao -> fetchOne($sql);
    		
		
		
		  require 'Page.class.php';
		  $page = new Page();
		  
		  //当前是第几页
		  $page -> now_page = isset($_GET['page'])?$_GET['page']:1;
		  //每页显示几条记录
		  $page -> pagesize = 5;
		  //总的记录数
		  $page -> total_pages = $result['total'];
		  
		  echo $page -> create();
		  
		  
		  //查询商品列表
		  
            //拼接sql语句查询所有的商品信息
            /*
             * now      offset      pagesize
             *  1         0             5
             *  2         5             5
             *  3         10            5
             */
            $offset = ($page -> now_page - 1)*$page->pagesize;
            $size = $page -> pagesize;
            
            $sql = "SELECT * FROM goods limit $offset,$size";
            $goods_list = $dao -> fetchAll($sql);
            
            //加载商品列表的模板（模子）
            require_once '2.template.php';
		  
		?>
	</body>
</html>