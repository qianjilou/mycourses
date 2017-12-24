<?php
//1. 绘制图像资源（创建一个画布）
$image = imagecreatetruecolor(500, 300);
//2. 先分配一个绿色
$green = imagecolorallocate($image, 22, 153, 0);
//3. 使用绿色填充画布
imagefill($image, 0, 0, $green);

//4. 在画布中绘制图像
$bai = imagecolorallocate($image, 255, 255, 255);
//绘制弧形，如果填充的话就是扇形
//参数2、3：弧形的圆心的坐标
//参数4、5：弧形的半径（宽度、高度）
//参数6、7：开始的角度、结束的角度（3点钟的位置是0，起点）
//imagearc($image, 100, 100, 100, 100, 0, 90, $bai);
imagefilledarc($image, 100, 100, 100, 100, 0, 90, $bai, IMG_ARC_PIE);

//5. 在浏览器直接输出图像资源
header("Content-Type:image/jpeg");
imagejpeg($image);

//6. 销毁图像资源
imagedestroy($image);