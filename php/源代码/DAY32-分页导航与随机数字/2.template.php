<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<table>
			<tr>
				<th>序号</th>
				<th>商品名称</th>
				<th>商品价格</th>
			</tr>
			<?php foreach ($goods_list as $v):?>
			<tr>
				<td><?php echo $v['goods_id'];?></td>
				<td><?php echo $v['goods_name'];?></td>
				<td><?php echo $v['shop_price'];?></td>
			</tr>
			<?php endforeach;?>
		</table>
	</body>
</html>