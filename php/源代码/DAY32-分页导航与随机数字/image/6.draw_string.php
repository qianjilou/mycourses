<?php
//1. 绘制图像资源（创建一个画布）
$image = imagecreatetruecolor(500, 300);
//2. 先分配一个绿色
$green = imagecolorallocate($image, 22, 153, 0);
//3. 使用绿色填充画布
imagefill($image, 0, 0, $green);

//4. 在画布中绘制图像
$bai = imagecolorallocate($image, 255, 255, 255);
//绘制文字
//参数2：字体大小
//参数3：文字的x轴坐标
//参数4：文字的y轴坐标
//参数5：绘制的字符
imagestring($image, 25, 200, 250, 'hello itbull', $bai);

//5. 在浏览器直接输出图像资源
header("Content-Type:image/jpeg");
imagejpeg($image);

//6. 销毁图像资源
imagedestroy($image);