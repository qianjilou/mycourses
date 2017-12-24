<?php
//1. 创建一个画布资源（在内存中创建一个画布）
$image = imagecreatetruecolor(500, 300);

//2. 给画布分配颜色
//参数1：给那个画布，也就是哪个图像资源分配颜色
$color = imagecolorallocate($image, 24, 145, 0);

imagefill($image, 0, 0, $color);

//3. 开始绘制图像(绘制线条)
//参数1：在哪个画布资源中进行绘制
//参数2：起点的x轴坐标
//参数3：起点的y轴坐标
//参数4：终点的x轴坐标
//参数5：终点的y轴坐标
//参数6：使用什么颜色绘制线条
$red = imagecolorallocate($image, 255, 0, 0);
imageline($image, 0, 0, 100, 100, $red);

//4. 输出、还是保存（暂时先输出到浏览器）
header("Content-Type:image/png");
//将图像资源输出给浏览器
imagepng($image);

//5. 销毁内存中的图像资源
imagedestroy($image);


