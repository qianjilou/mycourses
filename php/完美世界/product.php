<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>完美世界</title>
	<link rel="stylesheet" href="./css/front.css" />
	<link rel="stylesheet" href="./css/css.css" />
	<script type="text/javascript" src="./js/front_common.js"></script>
	<script type="text/javascript" src="./js/front_index.js"></script>
</head>
<body>
	<?php
		require( "header.php" );
		
	?>

	
	<div id="wrap">
 <div class="news_top">产品中心</div>
 <?php
  $cat = new CategoryModel( $db );
  $id = isset( $_REQUEST['id'] ) ? intval( $_REQUEST['id'] ) : 2;
  $cat_detail = $cat->get_cat_detail( $id );
 ?>
 <div class="news_title">您所在的位置：首页 &gt; 产品中心 &gt; <?php echo isset( $cat_detail['cat_name'] ) ? $cat_detail['cat_name'] : ''; ?></div>
 <div class="news_content">
   <div class="news_content_left_title">
     <ul>
     	<?php
     		
     		$cat_list = $cat->get_product_son_category();
        
        $style = '';
        $font_color = '';
     		if ( !empty( $cat_list ) ) {	
     			foreach ( $cat_list as $k => $v ) {
            if ( $v['cat_id'] == $id ) {
              $style = 'style="background-color:red;"';
              $font_color = "style='color:white;'";
            }else {
              $style = '';
              $font_color = '';
            }              
     				?>
     				<li <?php echo $style; ?>><a <?php echo $font_color; ?> href="product.php?id=<?php echo $v['cat_id']; ?>"><?php echo $v['cat_name']; ?></a></li>			
     				<?php
     			}
     		}
     	?>
     </ul>
   </div>
   <div class="news_content_left_bg">
   	<?php   		
   		$cat_son_list = $cat->get_cat_list( $id );
   	?>
   
   	<?php
   		if ( !empty( $cat_son_list ) ) {
   			foreach ( $cat_son_list as $k => $v ) {
   				?>
   				<div class="product_left">
	   				<dl>
				       <dd><img src="./upload/<?php echo !empty( $v['img_center'] ) ? $v['img_center'] : 'touxiang1023.jpg'; ?>" width=104 height=104 ></dd>
				       <dt><span class="news_font01"><?php echo $v['cat_name']; ?></span>
				       	<span class="product_font01"><?php echo $v['url']; ?></span><br />
				       	<?php echo $v['cat_desc']; ?>
				</dt>
				<span class="product_botton">
					<a href="<?php echo $v['url']; ?>"><img src="images/product_01.jpg" width="138" height="40"></a>
					<a href="<?php echo $v['url']; ?>"><img src="images/product_02.jpg" width="138" height="40"></a></span>
			     	</dl>
			   </div>
   				<?php
   			}
   		}
   	?>
     

   </div>
   
   
   
   
   
   
   <div class="news_content_right"><img src="images/news_right.png" width="220" height="136"></div>
   <div style=" clear:both;"></div>
 </div>
 <div style=" clear:both;"></div>
</div>





	
	<div class="bottom"><div class="max"><ul class="content"><li><div class="tit01"><span>公司</span></div><p><a href="http://www.wanmei.com/enterprise/company.htm">公司简介</a></p><p><a href="http://hr.wanmei.com" target="_blank">招聘信息</a></p><p><a href="http://www.wanmei.com/enterprise/aboutme.htm">联系我们</a></p><p><a href="http://www.wanmei.com/enterprise/legal.htm">法律声明</a></p><p><a href="http://www.wanmei.com/enterprise/sitemap.htm">网站地图</a></p></li><li><div class="tit01"><span>账号</span></div><p><a href="http://passport.wanmei.com/jsp/member/register.jsp">注册通行证账号</a></p><p><a href="http://passport.wanmei.com/">账号安全</a></p><p><a href="http://passport.wanmei.com/jsp/indulge/index.jsp">防沉迷登记</a></p><p><a href="http://passport.wanmei.com/jsp/member/password.jsp">修改密码</a></p></li><li><div class="tit01"><span>充值</span></div><p><a href="http://pay.wanmei.com">充值中心</a></p><p><a href="http://www.wanmei.com/pay/goukazhinan.shtml">购卡指南</a></p><p><a href="http://www.wanmei.com/pay/faq_other.shtml">充值问题</a></p></li><li><div class="tit01"><span>游戏</span></div><p><a href="http://www.arcgames.cn/">Arc游戏平台</a></p><p><a href="http://www.173.com/">Arc页游</a></p><p><a href="http://www.4games.com">海外4Games</a></p><p><a href="http://www.laohu.com">老虎游戏</a></p></li><li><div class="tit01"><span>服务</span></div><p><a href="http://vip.wanmei.com">特权VIP</a></p><p><a href="http://cs.wanmei.com">客服中心</a></p><p><a href="http://www.wanmei.com/jiazhang/">家长监护</a></p></li><li class="r"><div class="tit01"><span>商城</span></div><p><a href="http://shop.wanmei.com">完美商城</a></p><p><a href="http://wanmei.tmall.com">天猫旗舰店</a></p><p><a href="http://wanmeishijie.jd.com">京东旗舰店</a></p></li></ul><!--h5><a href="http://www.wanmei.com/enterprise/company.htm">公司介绍</a> | <a href="#">开发团队</a> | <a href="http://hr.wanmei.com" target="_blank">招聘信息</a> | <a href="aboutme.htm">联系我们</a> | <a href="proclaim.htm">法律声明</a> | <a href="map.htm">网站地图</a></h5--><h5 style="text-align:center; line-height:2;">京ICP证：050016号《网络文化经营许可证》编号：京网文[2011]0782-287号《网络视听许可证》编号：0110587 京公网安备110105019888号 <br>建议18岁以上的成年人游戏<br>完美世界（北京）网络技术有限公司 版权所有</h5><h5 style="text-align:center;"><a href="http://www.hd315.gov.cn/beian/view.asp?bianhao=010202005060700536" target="_blank"><img src="images/icp.gif" alt=""></a><a href="https://ss.knet.cn/verifyseal.dll?sn=2011011300100005061&amp;ct=df&amp;pa=011371" target="_blank"><img src="images/kexin.gif" alt=""></a><a href="http://www.bjwhzf.gov.cn/accuse.do" target="_blank"><img src="images/sc.gif" alt=""></a><a href="http://www.cogcpa.org/" target="_blank"><img src="images/bq.gif" alt=""></a><a href="http://www.wanmei.com/news_lvse.htm" target="_blank"><img src="images/lvse.gif" alt=""></a></h5><h6>京ICP证：050016号《网络文化经营许可证》<br>完美世界（北京）网络技术有限公司 版权所有</h6></div></div>


</body>
</html>