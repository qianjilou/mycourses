<?php
//1. 绘制图像资源（创建一个画布）
$image = imagecreatetruecolor(500, 300);
//2. 先分配一个绿色
$green = imagecolorallocate($image, 22, 153, 0);
//3. 使用绿色填充画布
imagefill($image, 0, 0, $green);

//4. 在画布中绘制图像
$bai = imagecolorallocate($image, 255, 255, 255);
imageline($image, 100, 100, 100, 200, $bai);
imageline($image, 100, 200, 200, 200, $bai);
imageline($image, 100, 100, 200, 200, $bai);

//3. 在浏览器直接输出图像资源
header("Content-Type:image/jpeg");
imagejpeg($image);

//销毁图像资源
imagedestroy($image);