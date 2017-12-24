<?php
   //首先，接收购买的商品
   $book = isset($_GET['name'])?$_GET['name']:'';
   //将商品的信息存储到session文件
   session_start();
   if(isset($_SESSION['cart'][$book])){
       //说明已经购买了,数量++
       $_SESSION['cart'][$book] ++;
   }else{
       //说明没有购买过这本书，他的数量就是1
       $_SESSION['cart'][$book] = 1;
   }
   
   echo '购买成功';
   echo '<a href="goods_list.php">点击返回商品列表</a>';