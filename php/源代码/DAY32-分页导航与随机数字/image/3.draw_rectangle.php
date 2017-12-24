<?php
//1. 绘制图像资源（创建一个画布）
$image = imagecreatetruecolor(500, 300);
//2. 先分配一个绿色
$green = imagecolorallocate($image, 22, 153, 0);
//3. 使用绿色填充画布
imagefill($image, 0, 0, $green);

//4. 在画布中绘制图像
$bai = imagecolorallocate($image, 255, 255, 255);
//参数1：图像资源（画布）
//参数2、3：起点的x、y轴坐标
//参数4、5：终点的x、y轴坐标
//imagerectangle($image, 100, 100, 300, 200, $bai);
imagefilledrectangle($image, 100, 100, 300, 200, $bai);

//5. 在浏览器直接输出图像资源
header("Content-Type:image/jpeg");
imagejpeg($image);

//6. 销毁图像资源
imagedestroy($image);